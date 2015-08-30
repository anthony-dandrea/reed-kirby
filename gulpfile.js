var gulp = require('gulp'),
minifyCSS = require('gulp-minify-css'),
connect = require('gulp-connect-php'),
plugins  = require('gulp-load-plugins')();

// run php server
gulp.task('server', function() {
  connect.server();
});

// concatenate and uglify scripts
gulp.task('scripts', function() {
  return gulp.src('./assets/js/app/*.js')
    .pipe(plugins.plumber())
    .pipe(plugins.concat('script.js'))
    .pipe(plugins.uglify())
    .pipe(plugins.rename({suffix: '.min'}))
    .pipe(gulp.dest('./assets/js'))
});

// compile and minitfy sass
gulp.task('styles', function() {
  return gulp.src('./assets/css/site.scss')
    .pipe(plugins.plumber({
      errorHandler: function(err){
        console.log(err.toString());
        this.emit('end');
      }
    }))
    .pipe(plugins.compass({
      config_file: './config.rb'
    }))
    .pipe(minifyCSS())
    .pipe(plugins.rename({suffix: '.min'}))
    .pipe(gulp.dest('./assets/css'))
});

// watch files for change
gulp.task('watch', function(){
  gulp.watch('./assets/css/*.scss', ['styles']);
  gulp.watch('./assets/js/app/*.js', ['scripts']);
});

// default task: handle assets, start server, watch & reload
gulp.task('default', ['server', 'scripts', 'styles', 'watch']);
