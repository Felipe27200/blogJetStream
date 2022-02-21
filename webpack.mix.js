// Llama al paquete necesario para que todo pueda funcionar
const mix = require('laravel-mix');

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

/* Este es el método que utiliza LM que como primer 
parámetro tiene el  archivo js que va a compilar, el segundo parámetro 
es el lugar donde va a guardar el resultado de la compilación del .js*/
mix.js('resources/js/app.js', 'public/js')

    // El segundo parámetro indica que una vez se compilen los estilos
    // el resultado se guardara en esa carpeta
    .postCss('resources/css/app.css', 'public/css', [
        // Aqui se define los componentes requeridos para los estilos
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
