const gulp = require ('gulp');
const concat = require ('gulp-concat');
const cleanCSS = require("gulp-clean-css");


function watch(){
    gulp.watch("tailwind/src/*.css",     () => {
        return gulp.src ('tailwind/src/*.css')
            .pipe (cleanCSS())
            .pipe (concat ('index.css'))
            .pipe (gulp.dest ('tailwind/'));
    });
}

gulp.task('default', watch);