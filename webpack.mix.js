const mix = require('laravel-mix');

mix.postCss('assets/styles/main.pcss', 'dist/styles', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-color-function'),
    require('postcss-preset-env')({stage: 1}),
]);