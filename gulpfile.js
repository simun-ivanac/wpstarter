var gulp = require('gulp')
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    plumber = require('gulp-plumber'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create(),
    babel = require('gulp-babel'),
    jsonminify = require('gulp-jsonminify');

// Theme sass
gulp.task('sass', function() {
    return gulp.src('assets/resources/sass/**/*.sass')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

// Theme scripts
gulp.task('scripts', function() {
    return gulp.src([
        'assets/resources/js/app-start.js',
        'assets/resources/js/app-end.js',
    ])
    .pipe(plumber())
    .pipe(concat('wpstarter-script.js'))
    .pipe(babel({presets: ['es2015']}))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js'))
    .pipe(browserSync.stream());
});

// Server
gulp.task('browser-sync', function() {
    browserSync.init({
        // path on localhost, without http:// or port
        proxy: 'localhost/wpstarter'
    });
});


// Watching
gulp.task('watch', function() {
    gulp.watch('assets/resources/sass/**/*.sass', gulp.series('sass'));
    gulp.watch('assets/resources/js/**/*.js', gulp.series('scripts'));
});


// Init
gulp.task('default',
    gulp.parallel(
        'sass',
        'scripts',
        'browser-sync',
        'watch'
    )
);
