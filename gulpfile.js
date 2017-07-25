var gulp = require('gulp');

var paths = {
    bootstrap: './bower_components/bootstrap',
    jquery: './bower_components/jquery',
    bootstrap_table: '.bower_components/bootstrap-table',
    public: './public'
}

gulp.task('css', function() {
    return gulp.src(paths.bootstrap + '/dist/css/*.css')
        .pipe(gulp.dest(paths.public + '/css'));
});

gulp.task('map', function() {
    return gulp.src(paths.bootstrap + '/dist/css/*.map')
        .pipe(gulp.dest(paths.public + '/css'));
})

gulp.task('fonts', function() {
    return gulp.src(paths.bootstrap + '/dist/fonts/*')
        .pipe(gulp.dest(paths.public + '/fonts'));
});

gulp.task('js', function() {
    return gulp.src(paths.bootstrap + '/dist/js/*.js')
        .pipe(gulp.dest(paths.public + '/js'));
});

gulp.task('jquery', function() {
    return gulp.src(paths.jquery + '/dist/*.js')
        .pipe(gulp.dest(paths.public + '/js'));
});

gulp.task('bootstrap_table', function() {
    return gulp.src(paths.jquery + '/dist/*.js')
        .pipe(gulp.dest(paths.public + '/js'));
});

gulp.task('default', ['css', 'fonts', 'js', 'jquery', 'map']);