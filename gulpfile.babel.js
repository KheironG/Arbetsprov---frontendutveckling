import { src, dest } from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass( dartSass );
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
const svgSprite = require('gulp-svg-sprite');

export const styles = () => {
  return src('scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('styles.css'))
    .pipe(dest('dist/css'));
}

const spriteConfig = {
  mode: {
    css: {
      render: {
        css: true
      }
    }
  }
};

export const sprites = () => {
  return src('assets/icons/*.svg')
  .pipe(svgSprite(spriteConfig))
  .pipe(dest('dist/css'));
}
