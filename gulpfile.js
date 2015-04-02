/**
 * setup them variables
 */

/**
 * List of urls with unique styles used with build task and uncss
 */
var siteurls = {
    // 'http://homepage.com'
}

/**
 * Paths to asset files
 */
var paths = {

    styles: {
        src: './inc/assets/sass',
        files: './inc/assets/sass/**/*.scss',
        dest : './inc/assets/css'
    },

    scripts: {
        src: './inc/assets/js',
        vendor: './inc/assets/js/vendor/**/*.js',
        theme: './inc/assets/js/theme/**/*.js',
        dest: './inc/assets/js'
    },

    images: {
        src: './inc/assets/images/src',
        files: './inc/assets/images/src/*',
        dest: './inc/assets/images'
    },

    build: {
        styles: {
            src: './inc/assets/css',
            files: './inc/assets/css/*.css',
            dest: './inc/assets/css'
        },
        scripts: {
            src: './inc/assets/js',
            files: './inc/assets/js/*.js',
            dest: './inc/assets/js'
        }
    }
}

/**
 * Include packages and setup gulp variables
 */
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    prefix = require('gulp-autoprefixer'),
    cmq = require('gulp-combine-media-queries'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    notify = require('gulp-notify'),
    csscomb = require('gulp-csscomb'),
    // csscss = require('gulp-csscss'),
    uncss = require('gulp-uncss'),
    imagemin = require('gulp-imagemin'),
    gzip = require('gulp-gzip');

/**
 * Compile, minify styles
 */
gulp.task('styles', function() {
    return gulp.src(paths.styles.files)
        .pipe(sourcemaps.init())
            .pipe(sass({
                output: 'expanded'
            }))
        .pipe(sourcemaps.write('./maps'))
        .pipe(prefix('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(csscomb())
        // .pipe(csscss())
        .pipe(cmq({
            log: true
        }))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(rename({suffix: '-min'}))
        .pipe(minify({keepBreaks:true}))
        .pipe(minify({keepSpecialComments: 0}))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(gzip())
        .pipe(gulp.dest(paths.styles.dest));
});

/**
 * Compile, minify scripts
 */
gulp.task('scripts', function() {
    return gulp.src([paths.scripts.vendor, paths.scripts.theme])
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(rename({suffix: '-min'}))
        .pipe(uglify())
        .pipe(gzip())
        .pipe(gulp.dest(paths.scripts.dest));
});

/**
 * Optimize images
 */
gulp.task('images', function() {
    return gulp.src(paths.images.files)
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest(paths.images.dest));
});
/**
 * Build (clean up and gzip scripts) uncss stylesheet
 * gulp-uncss
 */
gulp.task('clean', function() {
    // return gulp.src(paths.build.files)
    //     .pipe(uncss({
    //         html: siteurls
    //     }));
});

/**
 * Default task
 */

/**
 * Watch task
 */
gulp.task('watch', function() {

    gulp.watch(paths.styles.files, ['styles']);
    gulp.watch(paths.scripts.files, ['scripts']);
    gulp.watch(paths.images.files, ['images']);

});
