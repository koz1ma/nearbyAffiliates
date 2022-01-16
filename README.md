
## Great-circle distance implementation using laravel

This test uses a .txt file send by the user with a list of affiliates and output a list of affiliates(JSON) within 100km of a location(53.3340285, -6.2535495). The route in use is /file-upload
You need to have laravel 8 installed to be able to run this code and use the command: php artisan server after cloning this repo(you also need to create a .env file before).

The formula used is available on https://en.wikipedia.org/wiki/Great-circle_distance

Most of the code is located on app/Http/Controllers/AppController.php and resources/views/fileUpload.blade.php

You can access this code running live on http://gcddevtest.herokuapp.com/file-upload


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
