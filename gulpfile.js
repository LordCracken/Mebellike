var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
var minify = require('gulp-minify');
var htmlmin = require('gulp-htmlmin');
var tinypng = require('gulp-tinypng-compress');

gulp.task('minify-css', function (done) {
  gulp.src('./src/**/*.css')
    .pipe(cleanCSS({
      compatibility: 'ie8'
    }))
    .pipe(gulp.dest('dist'))
  done();
});

gulp.task('minify-js', function (done) {
  gulp.src('./src/**/*.js')
    .pipe(minify({
      noSource: true,
      ext: {
        min: '.js'
      },
      ignoreFiles: ['*.min.js']
    }))
    .pipe(gulp.dest('dist'))
  done();
});

gulp.task('htmlmin', function (done) {
  gulp.src('./src/**/*.php')
    .pipe(htmlmin({
      collapseWhitespace: true
    }))
    .pipe(gulp.dest('dist/'))
  done();
});

gulp.task('fonts', function (done) {
  gulp.src('./src/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'))
  done();
});

gulp.task('tinypng', function (done) {
  gulp.src('./src/**/*.{png,jpg,jpeg}')
    .pipe(tinypng({
      key: 'MXJhHpbSwXy1lcv8n0BxQR2bqrf02cnq'
    }))
    .pipe(gulp.dest('dist/'))
  done();
});

// gulp.task('svg', function (done) {
//   gulp.src('./src/img/**/*.svg')
//     .pipe(gulp.dest('dist/img'))
//   done();
// });

gulp.task('backend', function (done) {
  // gulp.src('./src/*.php')
  //   .pipe(gulp.dest('dist/'))
  // gulp.src('./src/phpmailer/*.php')
  //   .pipe(gulp.dest('dist/phpmailer/'))
  gulp.src('./src/*.txt')
    .pipe(gulp.dest('dist/'))
  done();
});

// gulp.task('server-library', function (done) {
//   gulp.src('./src/phpmailer/*.php')
//     .pipe(gulp.dest('dist/phpmailer/'))
//   done();
// });

gulp.task('default', gulp.parallel('minify-css', 'minify-js', 'htmlmin', 'fonts', 'backend'));