require('dotenv').config();
let tailwindcss = require('tailwindcss');

let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    resolve: {
      alias: {
        "frontend" : path.resolve(__dirname, 'resources/assets/js/frontend'),
        "backend" : path.resolve(__dirname, 'resources/assets/js/backend')
      }
    }
  })

// Frontend assets
mix.js('resources/assets/js/frontend/app.js', 'public/js/')
    .sass('resources/assets/sass/app.scss', 'public/css/');

//Backend assets
mix.js('resources/assets/js/backend/backend.js', 'public/js/');

mix.options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.js')],
});

if (mix.inProduction) {
	mix.version();
}

mix.browserSync({
    proxy: process.env.APP_URL,
    open: false
});
