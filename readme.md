Sebo Base Theme
========

The base theme for all sebo projects

##TODO
- [x] Use Gulp
- [ ] Add repeating patterns modules
- [ ] ACF License option
- [ ] ACF based layouts

## Maybe
- [ ] [hide header on scroll](https://medium.com/@mariusc23/hide-header-on-scroll-down-show-on-scroll-up-67bbaae9a78c)

###Gulp Tasks
- [x] gulp-gzip scripts
- [x] gulp-csscomb with wp standards
- [ ] gulp-uncss clean up stylesheet (remove unused)
- [ ] gulp-csscss clean up stylesheet (remove duplicate)
- [ ] gulp-phpcs with wp standards
- [x] gulp-imagemin optimize images
- [ ] gulp-csslint
- [ ] gulp-jshint

##Version Notes

###0.3.0
- added default mobile menus

###0.2.0
- moved to gulp as a task runner
    - compile and minify sass
    - concat and minify js
    - optimize images
- removed scss.php
- added theme hook alliance support

###0.1.0
- initial release