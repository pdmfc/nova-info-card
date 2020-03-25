let mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");

mix
  .setPublicPath("dist")
  .js("resources/js/card.js", "js")
  .sass("resources/sass/card.scss", "dist/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.config.js")]
  })
  .purgeCss();
