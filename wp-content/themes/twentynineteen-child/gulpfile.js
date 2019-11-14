function defaultTask(cb){
    console.log("words");
    cb();
}

exports.default = defaultTask;

const minify = require('gulp-minify');
var gulp = require('gulp');

gulp.task('compressSlick', function(){
   return gulp.src( 'assets/styles/slick-1.8.1/slick/slick.js')
   .pipe(minify({
        ext: {
            min: '.min.js'
        }
   }))
   .pipe(gulp.dest('assets/styles/slick-1.8.1/slick'))
});
