module.exports = {
  title: 'Nimbus - WordPress Admin User Manual',
  description: 'Nimbus WordPress Admin User Manual',
  base: '/nimbus/',
  themeConfig: {
    displayAllHeaders: true,
    sidebar: [
      {
        title: 'Nimbus User Manual', 
        path: '/',
        collapsable: false,
        sidebarDepth: 1,
        children: [
          '/home-page/',
          '/menus/',
          '/dancers/',
          '/events/',
          '/pages/',
          '/posts/'
        ]
      },
    ]
  }
}