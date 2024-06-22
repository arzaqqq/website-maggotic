// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'Public/js').postCss('src/app.css','Public/css', [
    require("tailwindcss"),
  ])