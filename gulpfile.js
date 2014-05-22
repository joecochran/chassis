var gulp = require('gulp'),
    minifycss = require('gulp-cssmin'),
    autoprefixer = require('gulp-autoprefixer'),
    //notify = require('gulp-notify'),
    compass = require('gulp-compass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    cache = require('gulp-cache')
    cmq = require('gulp-combine-media-queries'),
    svgmin = require('gulp-svgmin');

gulp.task('scripts', function() {
    return gulp.src([
        'app/assets/js/vendor/jquery-1.11.0.js',
        'app/assets/js/vendor/semantic.js',
        'app/assets/js/vendor/jquery.tagsinput.js',
        'app/assets/js/vendor/tablesort.js',
        'app/assets/js/vendor/waypoints.js',
        'app/assets/js/vendor/waypoints-sticky.js',
        'app/assets/js/vendor/trumbowyg.js',
        'app/assets/js/scripts.js'])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('public/js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});
gulp.task('styles', function(){
    return gulp.src('app/assets/scss/main.scss')
        .pipe(compass({
            css: 'public/css',
            sass: 'app/assets/scss',
            image: 'app/assets/img',
            font: 'public/font',
            require: ['semantic-ui-sass']
        }))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest('public/css'))
        .pipe(cmq())
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest('public/css/'));
});
gulp.task('images', function() {
    return gulp.src('app/assets/img/**/*')
        .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
        .pipe(gulp.dest('public/img'));
});
gulp.task('svg', function(){
    return gulp.src('app/assets/svg/**/*')
        .pipe(cache(svgmin()))
        .pipe(gulp.dest('public/svg/'));
});

gulp.task('watch', function () {
    gulp.watch('app/assets/scss/**/*.scss', ['styles']);
    gulp.watch('app/assets/js/**/*.js', ['scripts']);
});


gulp.task('default', ['styles', 'scripts', 'watch']);
