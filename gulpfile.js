var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    webpack      = require('webpack-stream'),
    extend       = require('extend'),
    browserSync  = require('browser-sync')

gulp.task('sass', function() {
  return gulp.src("assets/scss/**/*.scss")
  .pipe(sass({
    outputStyle: 'compressed',
    includePaths: ['node_modules/']
  }))
  .pipe(autoprefixer())
  .pipe(gulp.dest("css"));
});

gulp.task('js', function(){
  var config = extend({}, require('./webpack.config.js'), {
    mode: 'production',
  });
  return gulp.src("assets/js/main.js")
  .pipe(webpack(config))
  .pipe(gulp.dest("js"));
});

gulp.task('watch', ['sass', 'js'], function() {
  browserSync.init({
    proxy: 'localhost/suarsuara-wordpress'
  });
  gulp.watch("assets/scss/*.scss", ['sass']);
  gulp.watch("assets/js/*.js", ['js']);
  gulp.watch("css/**/*.css").on('change', browserSync.reload);
  gulp.watch("js/**/*.js").on('change', browserSync.reload);
  gulp.watch("*.php").on('change', browserSync.reload);
  gulp.watch("*.html").on('change', browserSync.reload);
});

gulp.task('default', ['watch']);
