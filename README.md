
## Installing Stap
        composer create-project laravel/laravel laradash
        cd laradash
        composer require laravel/fortify
        php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
        php artisan migrate
        run php artisan serve
## install taliwends css
        npm install -D tailwindcss postcss autoprefixer
        npx tailwindcss init
* open webpack.mix.js and add
        
    mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ]);

* open taliwends.config.js file and add this

        module.exports = {
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
        ],
        theme: {
            extend: {},
        },
        plugins: [],
        }

* add this in resourse/css/app.css file

    @tailwind base;
    @tailwind components;
    @tailwind utilities;

## Add file
** open config\app.php file an add class
     (App\Providers\FortifyServiceProvider::class,) 
* php artisan route:list
** open config\ fortify.php and change this
** open app and go to providers and open for fortifyservice profider and add belo content in boot function


        Fortify::loginView(function () {
            return view('auth.login');
        });
