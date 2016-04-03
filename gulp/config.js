module.exports.paths = {

  js: {
    src: './src/js/main.js',
    dest: './dist/js/',
    watch: ['./src/**/*.js']
  },

  jade: {
    src: './src/jade/*.jade',
    dest: './dist/',
    watch: ['./src/jade/*.jade']
  },

  less: {
    src: './src/css/styles.less',
    dest: './dist/css/',
    watch: ['./src/css/*.less']
  },

  images: {
    src: './src/images/*.*',
    dest: './dist/images/',
    watch: ['./src/images/*']
  },

  fonts: {
    src: './src/fonts/*.*',
    dest: './dist/fonts/',
    watch: ['./src/fonts/*']
  }
}
