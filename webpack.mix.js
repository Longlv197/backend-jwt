const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/products/index.js", "public/js/products/")
    .js("resources/js/products/add.js", "public/js/products/")
    .js("resources/js/categories/create.js", "public/js/categories/")
    .js("resources/js/categories/index.js", "public/js/categories/")
    .copy(
        "node_modules/jquery-validation/dist/jquery.validate.min.js",
        "public/js/"
    )
    .postCss("resources/css/app.css", "public/css", [
        //
    ])
    .postCss("resources/css/products/index.css", "public/css/products/")
    .postCss("resources/css/products/add.css", "public/css/products/")
    .postCss("resources/css/products/edit.css", "public/css/products/")
    .postCss("resources/css/categories/create.css", "public/css/categories/")
    .postCss("resources/css/categories/index.css", "public/css/categories/");
