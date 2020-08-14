const calendar = document.querySelector('.calendar');
const eventList = document.querySelector('.event-list');
const calendarNav = document.querySelector('.calendar-nav');
const calendarView = document.querySelector('.calendar-view');
const previousMonthEl = document.getElementById('previousMonth');
const currentMonthEl = document.getElementById('currentMonth');
const nextMonthEl = document.getElementById('nextMonth');

if (calendar) {
  document.addEventListener('DOMContentLoaded', () => {
    const today = new Date();
    buildCalendar(today.getMonth(), today.getFullYear());
    setNavMonths(today);
  });

  calendarNav.addEventListener('click', (e) => {
    navigateMonths(e);
  });

  calendarView.addEventListener('click', (e) => {
    changeView(e);
  });
}

function buildCalendar(selectedMonth, selectedYear) {
  const firstDayOfMonth = new Date(selectedYear, selectedMonth, 1).getDay();
  const lastDayOfMonth = new Date(selectedYear, selectedMonth + 1, 0).getDate();
  const lastDayOfPreviousMonth = new Date(selectedYear, selectedMonth, 0).getDate();
  let day;
  let dayNextMonth = 0;

  const maxLimit = (lastDayOfMonth + firstDayOfMonth > 35) ? 42 : 35;

  calendar.querySelectorAll('.calendar__day').forEach(day => { day.remove(); });
  eventList.querySelectorAll('.event').forEach(day => { day.remove(); });

  for (let i = 0; i < maxLimit; i++) {
    if (i == firstDayOfMonth) { day = 1; }
    
    if (firstDayOfMonth > 0 && day == null) {
      const lastFewDaysLastMonth = lastDayOfPreviousMonth - firstDayOfMonth + i + 1;
      let prevMonth = selectedMonth - 1;
      if (prevMonth < 0) { prevMonth = 11; }
      addDayToCalendar(lastFewDaysLastMonth, prevMonth, new Date(selectedYear, selectedMonth - 1, 1).getFullYear(), 'inactive')
    } 
    else if (day >= 1 && day <= lastDayOfMonth) { 
      addDayToCalendar(day, selectedMonth, selectedYear, 'active');
      addDayToEventList(day, selectedMonth, selectedYear);
      day++; 
    }
    else if (day > lastDayOfMonth) { 
      dayNextMonth += 1;
      let nextMonth = selectedMonth + 1;
      if (nextMonth > 11) { nextMonth = 0; }
      addDayToCalendar(dayNextMonth, nextMonth, new Date(selectedYear, selectedMonth + 1, 1).getFullYear(), 'inactive');
    }
  }
}

function addDayToCalendar(calDay, calMonth, calYear, activeClass) {
  const calendarDate = new Date(calYear, calMonth, calDay);
  const calendarDay = document.createElement('div');
  calendarDay.classList.add('calendar__day');
  calendarDay.classList.add(activeClass);
  calendarDay.setAttribute('data-day', calDay);
  calendarDay.setAttribute('data-month', calMonth);
  calendarDay.setAttribute('data-year', calYear);

  const calendarDayTitle = document.createElement('h3');
  calendarDayTitle.textContent = calDay;
  calendarDay.appendChild(calendarDayTitle);

  events.forEach(event => {
    const eventDate = new Date(event.date.substr(6,4), event.date.substr(3,2) - 1, event.date.substr(0,2));

    if (eventDate.getTime() == calendarDate.getTime()) {
      const calendarDayLink = document.createElement('a');
      calendarDayLink.innerHTML = event.title + ' ' + event.time;
      calendarDayLink.href = event.link;
      calendarDay.appendChild(calendarDayLink);
    }
  });

  calendar.appendChild(calendarDay);
}

function addDayToEventList(calDay, calMonth, calYear) {
  const monthDate = new Date(calYear, calMonth, calDay);

  events.forEach(event => {
    const eventDate = new Date(event.date.substr(6,4), 
                               event.date.substr(3,2) - 1, 
                               event.date.substr(0,2));

    if (eventDate.getTime() == monthDate.getTime()) {
      const eventDay = document.createElement('div');
      const eventImg = document.createElement('div');
      const eventText = document.createElement('div');
      const eventLink = document.createElement('a');
      eventDay.classList.add('event');
      eventImg.classList.add('event__image');
      eventText.classList.add('event__text');
      eventLink.classList.add('button');
      eventLink.classList.add('block');
      eventText.innerHTML = '<p>' + eventDate.toLocaleString('default', { weekday: 'long' }) + 
                            ', ' + eventDate.toLocaleString('default', { month: 'long' }) + 
                            ' ' + eventDate.getDate() + 
                            ', ' +  event.time.replace(' ', '') + '</p>' + 
                            '<h3>' + event.title + '</h3>';
      eventLink.href = event.link;
      eventLink.innerHTML = 'RSVP <i class="fas fa-chevron-right"></i>';
      eventText.appendChild(eventLink);
      eventImg.style.backgroundImage = 'url(' + event.image + ')';
      eventDay.appendChild(eventImg);
      eventDay.appendChild(eventText);
      eventList.appendChild(eventDay);
    }
  });  
}

function setNavMonths(currentDate) {
  const lastMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
  const nextMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
  previousMonthEl.innerHTML = '<i class="fas fa-chevron-left"></i> ' + lastMonth.toLocaleString('default', { month: 'long' });
  currentMonthEl.textContent = currentDate.toLocaleString('default', { month: 'long' });
  currentMonthEl.setAttribute('data-month', currentDate.getMonth());
  currentMonthEl.setAttribute('data-year', currentDate.getFullYear());
  nextMonthEl.innerHTML = nextMonth.toLocaleString('default', { month: 'long' }) + ' <i class="fas fa-chevron-right"></i>';
}

function navigateMonths(e) {
  const currentMonthEl = document.getElementById('currentMonth');
  const dtMonth = currentMonthEl.getAttribute('data-month');
  const dtYear = currentMonthEl.getAttribute('data-year');
  const prevNext = e.target.id;

  if (prevNext == 'previousMonth' || e.target.parentNode.id == 'previousMonth') {
    const dt = new Date(parseInt(dtYear), parseInt(dtMonth) - 1, 1);
    buildCalendar(dt.getMonth(), dt.getFullYear());
    setNavMonths(dt);
  } else if (prevNext == 'nextMonth' || e.target.parentNode.id == 'nextMonth') {
    const dt = new Date(parseInt(dtYear), parseInt(dtMonth) + 1, 1);
    buildCalendar(dt.getMonth(), dt.getFullYear());
    setNavMonths(dt);
  }
}

function changeView(e) {
  calendarView.querySelectorAll('i').forEach(icon => { icon.classList.remove('active'); })
  if (e.target.classList.contains('calendar-view__list')) {
    eventList.classList.add('show');
    calendar.classList.remove('show');
    e.target.classList.add('active');
  } else {
    eventList.classList.remove('show');
    calendar.classList.add('show');
    e.target.classList.add('active');
  }
}
