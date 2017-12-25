var gulp = require('gulp');

gulp.task('default', ['bootstrap']);

gulp.task('bootstrap', function () {
    gulp.src('src/bootstrap-3.3.6/dist/css/*')
        .pipe(gulp.dest('css/'))
    gulp.src('src/bootstrap-3.3.6/dist/fonts/*')
        .pipe(gulp.dest('fonts/'))
    gulp.src('src/bootstrap-3.3.6/dist/js/*')
        .pipe(gulp.dest('js/'))
});

gulp.task('font-awesome', function () {
    gulp.src('src/font-awesome-4.6.3/css/*')
        .pipe(gulp.dest('css/'))
    gulp.src('src/font-awesome-4.6.3/fonts/*')
        .pipe(gulp.dest('fonts/'))
});