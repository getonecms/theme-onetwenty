
let mix = require('laravel-mix');

mix.js('resources/assets/js/site.js', 'js')
    .js('resources/assets/js/admin.js', 'js')
    .sass('resources/assets/css/admin.scss', 'css')
    .sass('resources/assets/css/site.scss', 'css')
    .options({
        processCssUrls: false
    })
    .setPublicPath('dist')
    .browserSync({
        files: [
            './resources/assets/**/*.{js,css}',
            './templates/admin/**/*.php',
            './templates/**/*.php',
        ],
        proxy: 'http://getonecms.wsl/',
        port: 3000
    })
    .copyDirectory('resources/assets/images', 'dist/images')
    .copy('node_modules/bootstrap-icons/bootstrap-icons.svg', 'dist/images/icons.svg')
