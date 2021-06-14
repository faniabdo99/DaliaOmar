let mix = require('laravel-mix');
// your Wordpress theme name here
var themename = "daliaomar";
const themePath = 'wp-content/themes/' + themename + '';
const resources = './src';
mix.sass(`${resources}/scss/app.scss`, `./assets/css`).sourceMaps();
mix.js(`${resources}/js/app.js`, `./assets/js`)

mix.browserSync('http://localhost/dalia');