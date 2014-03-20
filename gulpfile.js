var gulp = require('gulp'),
    minifycss = require('gulp-minify-css'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify'),
    compass = require('gulp-compass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    lr = require('tiny-lr'),
    server = lr();

gulp.task('scripts', function() {
    return gulp.src([
        'app/assets/js/vendor/jquery-1.11.0.js',
        'app/assets/js/vendor/semantic.js',
        'app/assets/js/vendor/tablesort.js',
        'app/assets/js/vendor/waypoints.js',
        'app/assets/js/vendor/waypoints-sticky.js',
        'app/assets/js/vendor/trumbowyg.js',
        'app/assets/js/scripts.js'])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('public/js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
        .pipe(livereload(server))
        .pipe(notify({ message: 'scripts task complete' }));
});
gulp.task('styles', function(){
    return gulp.src('app/assets/scss/main.scss')
        .pipe(compass({
            css: 'public/css',
            sass: 'app/assets/scss',
            image: 'app/assets/img',
            require: ['semantic-ui-sass']
        }))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest('public/css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest('public/css/'))
        .pipe(livereload(server))
        .pipe(notify({ message: 'styles task complete'}));
});
gulp.task('images', function() {
    return gulp.src('app/assets/img/**/*')
        .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
        .pipe(livereload(server))
        .pipe(gulp.dest('public/img'))
        .pipe(notify({ message: 'images task complete' }));
});


gulp.task('watch', function () {
    server.listen(35729, function (err) {
        if (err) {
            return console.log(err)
        };
        gulp.watch('app/assets/scss/**/*.scss', ['styles']);
        gulp.watch('app/assets/js/**/*.js', ['scripts']);
        gulp.watch('app/assets/img/**/*', ['images']);
    });
});


gulp.task('default', ['styles', 'scripts', 'images', 'watch']);
