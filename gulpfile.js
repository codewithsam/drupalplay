var gulp = require('gulp');
var livereload = require('gulp-livereload')




gulp.task('watch', function(){
    livereload.listen();
    gulp.watch(['./themes/custom/drupalplay/**/*.css', './themes/custom/drupalplay/**/*.twig', './themes/custom/drupalplay/js/*.js'], function (files){
        livereload.changed(files)
    });
});