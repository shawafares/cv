let mix = require('laravel-mix');

// FRONT WEBPACK
mix.combine(
	['resources/assets/css/*'], 'public/css/app.css');
mix.combine(
	['resources/assets/js/*'], 'public/js/app.js');

//BACKEND WEBPACK
mix.combine(
	['resources/assets/admin/css/*'], 'public/css/admin/app.css');

mix.combine(
	['resources/assets/admin/js/*'], 'public/css/admin/app.js');
