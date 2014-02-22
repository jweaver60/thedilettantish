var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
	gulp.src('assets/scss/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('assets/css'));
});

gulp.task('movejs', function() {
	gulp.src(['assets/libraries/foundation/js/foundation.min.js', 'assets/libraries/foundation/js/vendor/jquery.js', 'assets/libraries/foundation/js/vendor/modernizr.js'])
		.pipe(gulp.dest('assets/js'));
});