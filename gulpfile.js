var
  // Modules
  gulp        = require('gulp'),
  connect     = require('gulp-connect-php'),
  sass        = require('gulp-sass'),
  uglify      = require('gulp-uglify'),
  postcss     = require('gulp-postcss'),
  tailwindcss = require('tailwindcss'),
  browserSync = require('browser-sync').create(),
  reload      = browserSync.reload;

  // Directories
  dir = {
    css: {
      src: 'style/**/*.css',
      dest: 'dist/css'
    },
    js: {
      src: 'js/**/*.js',
      dest: 'dist/js'
    }
  }
;

gulp.task('style', function () {
  return gulp.src(dir.css.src)
    .pipe(postcss([
      tailwindcss('./tailwind.js'),
      require('autoprefixer'),
    ]))
    .pipe(gulp.dest('dist/css/'));
});

// JS processing
gulp.task('script', function() {
  function createErrorHandler(name) {
    return function (err) {
      console.error('Error from ' + name + ' in compress task', err.toString());
    };
  }
  return gulp.src(dir.js.src)
    // .pipe(uglify())
    // .on('error', createErrorHandler('uglify'))
    .pipe(gulp.dest(dir.js.dest))
    .pipe(reload({stream: true}))
});

// Default (watch) task
gulp.task('serve', ['style'], function() {
  connect.server({}, function (){
    browserSync.init({
      proxy: '127.0.0.1:8000',
      open: false,
    });
  });
  gulp.watch(dir.css.src, ['style']);
  gulp.watch(dir.js.src, ['script']);
  gulp.watch("**/*.php").on('change', browserSync.reload);
});

gulp.task('default', ['serve']);