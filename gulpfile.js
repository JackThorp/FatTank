var serve = require('gulp-serve');

var gulp  = require('./gulp')([
    'jade',
    'less',
    'images',
    'fonts',
    'scripts'
]);


gulp.task('build', ['jade', 'less', 'images', 'fonts', 'scripts']);

gulp.task('serve', ['build'], serve({
  root: ['dist'],
  port: 3005
}));

gulp.task('watch', ['build'], function() {
  gulp.watch('./src/jade/*.jade', ['jade']);
  gulp.watch('./src/css/*.less', ['less']);
  gulp.watch('./src/images/*.*', ['images']);
  gulp.watch('./src/fonts/*', ['fonts']);
  gulp.watch('./src/js/*.js', ['scripts']);
});

gulp.task('default', ['watch', 'serve']);
