const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');

// Optimize Images
gulp.task('imageMinPrimary', function(){
    gulp.src('source/images/*')
        .pipe(imagemin({
          interlaced: true
        }))
        .pipe(gulp.dest('assets/images'))
});

gulp.task('imageMinTemp', function(){
    gulp.src('source/images/temp/*')
        .pipe(imagemin({
          interlaced: true
        }))
        .pipe(gulp.dest('assets/images/temp'))
});

gulp.task('imageMinPartner', function(){
    gulp.src('source/images/temp/partner-logos/*')
        .pipe(imagemin({
          interlaced: true
        }))
        .pipe(gulp.dest('assets/images/temp/partner-logos'))
});

// Compile Sass
gulp.task('sass', function(){
  gulp.src('source/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('assets/css'));
});

// Copy vendor's css
gulp.task('copyCss', function () {
    gulp.src('source/scss/*.css')
        .pipe(gulp.dest('assets/css'));
});

// copy js
gulp.task('copyJs', function () {
    gulp.src('source/js/*.js')
        .pipe(gulp.dest('assets/js'));
});

gulp.task('default', ['imageMinPrimary', 'imageMinTemp', 'imageMinPartner', 'sass', 'copyCss', 'copyJs']);

gulp.task('watch', function(){
  gulp.watch('source/js/*.js', ['copyJs']);
  gulp.watch('source/images/*', ['imageMin']);
  gulp.watch('source/scss/*.scss', ['sass']);
});
