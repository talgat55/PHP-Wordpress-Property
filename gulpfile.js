
var gulp      = require('gulp'), // Подключаем Gulp
    sass        = require('gulp-sass'), //Подключаем Sass пакет,
    browserSync = require('browser-sync'), // Подключаем Browser Sync
    autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', function () {
    return  gulp.src('./wp-content/themes/property/static/sass/style.sass')
    .pipe(sass().on('error', sass.logError))
      .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
    .pipe(gulp.dest('./wp-content/themes/property/assets/css/'))
	.pipe(browserSync.reload({stream: true}));


});

