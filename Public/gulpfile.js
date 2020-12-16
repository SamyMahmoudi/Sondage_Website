const { src, dest, parallel, watch } = require('gulp');
const gulpSass = require('gulp-sass');
const browserSync = require('browser-sync').create();

// Browser Sync
function browser() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
    watch("*.html").on('change', browserSync.reload);
}

// Sass (scss -> css)
function sass(){
    return src('./sass/style.scss')
    .pipe(gulpSass())
    .pipe(dest('./css/'))
    .pipe(browserSync.stream());
}

// Watch Sass
function watcher(done){
    watch('./sass/components/*.scss', sass)
    browserSync.reload();
    done();
}

// Export des function()
module.exports = {
    sass,
    watcher,
    browser: parallel(browser, watcher)
}