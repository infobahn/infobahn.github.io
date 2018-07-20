/*!
 * gulp
 * $ npm install gulp-ruby-sass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-notify gulp-rename gulp-livereload gulp-cache del --save-dev
 */

// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    shell = require('gulp-shell'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del'),
    svgstore = require('gulp-svgstore'),
    path = require('path'),
    svgmin = require('gulp-svgmin');

// Sass compilation, autoprefixing and minification
gulp.task('styles', function() {
return gulp.src('assets/sass/style.scss', { style: 'expanded' })
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('assets/css'))
    // .pipe(rename({suffix: '.min'}))
    .pipe(cleanCSS())
    .pipe(gulp.dest('wp-content/themes/pushtodev'))
    .pipe(notify({ message: 'Styles task complete' }));
});

// JShinting, concatinating and minification
gulp.task('scripts', function() {
return gulp.src([
        'assets/js/libs/matchheight.js',
        'assets/js/matchheight.js',
        'assets/js/testimonials.js',
    ])
    // .pipe(jshint())
    // .pipe(jshint.reporter('default'))
    .pipe(concat('production.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('wp-content/themes/pushtodev/dist/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

// Image compression
gulp.task('images', function() {
return gulp.src('assets/img/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
    .pipe(gulp.dest('wp-content/themes/pushtodev/dist/img'))
    .pipe(notify({ message: 'Images task complete' }));
});

gulp.task('svgstore', function () {
    return gulp
        .src('assets/svg/*.svg')
        .pipe(svgmin(function (file) {
            var prefix = path.basename(file.relative, path.extname(file.relative));
            return {
                plugins: [{
                    cleanupIDs: {
                        prefix: prefix + '-',
                        minify: true
                    }
                }]
            }
        }))
        .pipe(svgstore())
        .pipe(rename('svg-icons.svg'))
        .pipe(gulp.dest('wp-content/themes/pushtodev/dist/svg'));
});

// Cleanup
gulp.task('clean', function(cb) {
    del(['wp-content/themes/pushtodev/dist/css/style.min.css', 'wp-content/themes/pushtodev/dist/js/production.min.js'], cb)
});

// Default task
gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts');
});

// Watch task
gulp.task('watch', function() {
    gulp.watch('assets/sass/**/*.scss', ['styles']);
    gulp.watch('assets/js/**/*.js', ['scripts']);
    gulp.watch('assets/img/**/*', ['images']);
    gulp.watch('assets/svg/**/*.svg', ['svgstore']);
});

// clear
gulp.task('clear', function (done) {
  return cache.clearAll(done);
});