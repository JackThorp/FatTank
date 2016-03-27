var conf  = require('../config.js');
var paths = conf.paths;

module.exports = function(gulp) {

  return function() {
    return gulp.src(paths.fonts.src)
      .pipe(gulp.dest(paths.fonts.dest));
  }
};
