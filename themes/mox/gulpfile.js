'use strict'

const gulp                 = require('gulp')
const plumber              = require('gulp-plumber')
const sass                 = require('gulp-sass')
const bs                   = require("browser-sync").create()

gulp.task('css', () => {
  return gulp.src('assets/css/pages/*.scss', { base: 'assets/css/pages' })
              .pipe(plumber(function (err) {
                console.log(err)
                this.emit('end')
              }))
              .pipe(sass({outputStyle: 'compressed'}))
              .pipe(gulp.dest('./'))
})

gulp.task('compile', ['css'])

gulp.task('watch', () => {
  gulp.watch('assets/css/**/*'   , ['css'])
})

gulp.task('server', ['compile', 'watch'], () => {
  bs.init({
    proxy: 'localhost'
  })
})

gulp.task('default', ['server'])

