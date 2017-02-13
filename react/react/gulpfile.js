var gulp = require("gulp"),
	jsmin = require("gulp-uglify"),
	rename = require("gulp-rename");

gulp.task("default",function(){
	gulp.src("dist/main.js")
		.pipe(jsmin())
		.pipe(rename("main.min.js"))
		.pipe(gulp.dest("dist"))
})