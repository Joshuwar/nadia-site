var gulp = require('gulp'),
  sass = require('gulp-sass'),
  clean = require('gulp-clean'),
  concat = require('gulp-concat');

gulp.task('clean', function(){
  return gulp.src(['build/*'], {read:false})
    .pipe(clean());
});

gulp.task('styles', function() {
  gulp.src('./src/scss/style.scss')
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(gulp.dest('./build/css'));
});

gulp.task('images', function() {
  gulp.src('./src/images/**/*.*')
    .pipe(gulp.dest('./build/images'));

  gulp.src('./src/favicon.ico')
    .pipe(gulp.dest('./build'));
});

gulp.task('fonts', function() {
  gulp.src('./src/fonts/**/*.*')
    .pipe(gulp.dest('./build/fonts'));
});

gulp.task('javascripts', function() {
  gulp.src(['./src/javascripts/jquery-1.11.0.min.js', './src/javascripts/bootstrap.min.js', './src/javascripts/app.js'])
    .pipe(concat('main.js'))
    .pipe(gulp.dest('./build/javascripts'));
});

gulp.task('templates', function() {
  gulp.src('./src/index.html')
    .pipe(gulp.dest('./build'));
});

gulp.task('default', ['clean'], function() {
  gulp.start('styles', 'javascripts', 'images', 'fonts', 'templates');
});

gulp.task('watch', function() {
  gulp.watch('./src/scss/*.scss', ['styles']);
  gulp.watch('./src/javascripts/*.*', ['javascripts']);
  gulp.watch('./src/images/*.*', ['images']);
  gulp.watch('./src/fonts/*.*', ['fonts']);
  gulp.watch('./src/index.html', ['templates']);
});

