var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
// var sourcemaps = require('gulp-sourcemaps');
// var autoprefixer = require('gulp-autoprefixer');
// var cleanCSS = require('gulp-clean-css');
// var cmq = require('gulp-combine-media-queries');
var browserSync = require('browser-sync');

gulp.task('sass', function () {
    gulp.src('./belise-lite-child/sass/style.scss')
        .pipe(plumber())
        // .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'expanded'}))
        // .pipe(cmq())
        // .pipe(autoprefixer())
        // .pipe(cleanCSS())
        // .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./belise-lite-child/'))
        .pipe(browserSync.reload({stream: true}))
    ;
});

gulp.task('browser-sync', function () {
    browserSync({
        proxy: 'localhost:8888',
        port:'8888'
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('default', ['browser-sync'], function () {
    gulp.watch("./belise-lite-child/sass/*.scss", ['sass']);
    gulp.watch("./belise-lite-child/*.php", ['bs-reload']);
});
