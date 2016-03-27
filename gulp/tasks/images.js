var conf  = require('../config.js');
var paths = conf.paths;

module.exports = function(gulp) {

  return function() {
    return gulp.src(paths.images.src)
      .pipe(gulp.dest(paths.images.dest));
  }
};
