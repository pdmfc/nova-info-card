let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix
  .setPublicPath('dist')
  .js('resources/js/card.js', 'js')
  .sass('resources/sass/card.scss', 'dist/css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.config.js')]
  })
  .purgeCss({
    whitelistPatterns: [
      /^bg-(red|green|blue|yellow)-200/,
      /^text-(red|green|blue|yellow)-(600|800)/,
      /^border-(red|green|blue|yellow)-600/
    ]
  });
