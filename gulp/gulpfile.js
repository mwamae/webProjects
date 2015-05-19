var gulp = require('gulp');
//include plugins
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');

gulp.task('default', function(){
    return gulp.src('src/*.js').
        pipe(uglify()).
        pipe(gulp.dest('build'));
});