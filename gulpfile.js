const { src, dest, series } = require('gulp');
const gulp = require('gulp');
const uglify = require('gulp-uglify');
const jshint = require('gulp-jshint');
const htmlmin = require('gulp-htmlmin');

const javascriptObfuscator = require('gulp-javascript-obfuscator');
const concat = require('gulp-concat');
const sass = require('gulp-sass')(require('sass'));
const minifyCSS = require('gulp-csso');



const browserSync = require('browser-sync').create();
const files = "./src/js/*.js";

function html() {
    return gulp.src('./src/*.html')
				.pipe(htmlmin({ collapseWhitespace: true }))
				.pipe(gulp.dest('./'))
				.pipe(browserSync.stream())			
};

function css() {
  return src('./src/sass/*.sass')
  .pipe(sass())
  .pipe(minifyCSS())
	.pipe(dest('./assets/css'))
	.pipe(browserSync.stream());
}



function dist() {
	return src([files], { sourcemaps: true })
	// Opções necessárias apenas para a entrega final
	.pipe(uglify({compress: {drop_console: true}}))
	.pipe(javascriptObfuscator())
	.pipe(concat('dist.min.js'))
	.pipe(dest('./assets/js'))
}
function jswatch() {
	browserSync.reload();
};

function watch() {
	browserSync.init({
			server: {
				 baseDir: "./",
				 index: "/index.html"
			}
	});
	gulp.watch('./src/sass/*.sass', css);
	gulp.watch('./src/*.html', html).on('change', jswatch);
	gulp.watch('./src/js/*.js', dist).on('change', jswatch);
}	


exports.html = html;
exports.dist = dist;
exports.css = css;
exports.watch = series(html, css, dist, watch);
exports.default = series(html, css, dist);