# Nimbus Dance WordPress Theme

This is a purpose built WordPress theme, developed by [Julian Garcia](https://julian-garcia.uk), specifically for dance company "Nimbus Dance". It is based on designs supplied by designer [Christine Lhowe](https://christinelhowe.com/) using Adobe XD. Here is the published website using this theme: [nimbusdance.org/](https://www.nimbusdance.org/). 

## Technology/Languages

- JavaScript, HTML, SCSS, PHP
- Node 12.8.2 / npm 6.14.8
- VuePress 1.5.4
- LocalWP to serve WordPress locally
- Dependencies
  - terser (JS minification)
  - archiver (to package theme in to a zip file)
  - node-sass (bundle scss files to single minified css)

## Developer instructions

For local development, clone the repository to a local path and navigate to it. Enter `npm install` to install dependencies. To watch for scss changes and build minified css open another terminal and use `npm start`. After any JavaScript changes use `npm run jsminify`

### Local WordPress Server

- Download LocalWP and add a local site. LocalWP will provide links to view the local site and the local admin dashboard.
- Go to Wordpress admin dashboard and upload this theme by following the "packing the theme" instructions.
- You can then build content manually in WordPress.

### Packaging the theme

After you make changes to the theme locally, you'll need to package in to a zip file. You can then re-import the theme on your remotely or locally served WordPress site. To package the relevant files/folders in to a zip file, use `npm run theme-zip`. This will generate `nimbus.zip` which you can then upload as a theme.

## Admin user manual

A WordPress administrator user manual was developed using VuePress and is served via GitHub Pages: [julian-garcia.github.io/nimbus/](https://julian-garcia.github.io/nimbus/). This includes instructions specific to this custom WordPress theme, including adding events and editing various non standard pages and custom post types.