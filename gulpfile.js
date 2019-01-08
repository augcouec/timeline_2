require("es6-promise").polyfill();

var gulp = require("gulp"),
    sass = require("gulp-sass"),
    plumber = require("gulp-plumber"),
    cssmin = require("gulp-cssmin"),
    rename = require("gulp-rename"),
    jsmin = require("gulp-jsmin"),
    browserify = require("gulp-browserify"),
    autoprefixer = require("gulp-autoprefixer");

var basePath = "assets/";
var configuration = {
    scssDirectory: basePath + "styles/scss/**/*.scss",
    jsDirectory: basePath + "scripts/main.js"
};

gulp.task("css", function () {
    gulp
        .src(configuration.scssDirectory)
        .pipe(plumber())
        .pipe(sass().on("error", sass.logError))
        .pipe(autoprefixer())
        .pipe(cssmin())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest(basePath + "styles/css/"));
});

gulp.task("js", function () {
    gulp
        .src(configuration.jsDirectory)
        .pipe(plumber())
        .pipe(browserify())
        .pipe(jsmin())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest(basePath + "scripts/"));
});

gulp.task("default", ["css", "js"], function () {
    gulp.watch([basePath + "styles/scss/**/*.scss"], ["css"]);
    gulp.watch([basePath + "scripts/**/*.js"], ["js"]);
});

gulp.task("build", ["css", "js"]);