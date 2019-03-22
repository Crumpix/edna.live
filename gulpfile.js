'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

// Compile & Generate Style File
gulp.task('styles', function () {
    gulp.src(['./src-assets/scss/style.scss','src-assets/scss/bootstrap-components/bootstrap.scss'])
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(cleanCSS({compatibility: 'ie8'})) //Later on
        .pipe(gulp.dest('./'));
});


// Compile & Generate Javscript File
gulp.task('scripts', function() {
    return gulp.src([

        'node_modules/jquery/dist/jquery.min.js',

        //----- Bootstrap Components ------------------

        'src-assets/javascripts/bootstrap-components/alert.js',
        'src-assets/javascripts/bootstrap-components/button.js',
        'src-assets/javascripts/bootstrap-components/carousel.js',
        'src-assets/javascripts/bootstrap-components/collapse.js',
        'src-assets/javascripts/bootstrap-components/dropdown.js',
        'src-assets/javascripts/bootstrap-components/modal.js',
        'src-assets/javascripts/bootstrap-components/popover.js',
        'src-assets/javascripts/bootstrap-components/scrollspy.js',
        'src-assets/javascripts/bootstrap-components/tab.js',
        'src-assets/javascripts/bootstrap-components/tooltip.js',
        'src-assets/javascripts/bootstrap-components/util.js',



        //----- Bootstrap Components Ends ------------------

        //Common Components
        'src-assets/javascripts/common-components/global.js',

        //Components
        'src-assets/javascripts/components/home.js',

    ])
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe( gulp.dest('./assets/js/'));


});


// Watch If SCSS File Changes
gulp.task('styles:watch', function () {
    gulp.watch('./src-assets/scss/**/*.scss', ['styles']);
});

// Watch If Javascript File Changes
gulp.task('scripts:watch', function () {
    gulp.watch('./src-assets/javascripts/**/*.js', ['scripts']);
});

gulp.task('default', ['styles', 'scripts' , 'styles:watch' , 'scripts:watch']);