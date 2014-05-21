laravel-convert-migrations
==========================

This is a custom command to convert your current SQL database schema into a Laravel 4 Migration file.

Credit to 'bruceoutdoors' Original class = https://gist.github.com/bruceoutdoors/9166186

INSTALLATION
==========================
To install this Artisan command, save the above file into your `app/commands` folder.
Then add `Artisan::add(new ConvertMigrationsCommand);` into your app/start/artisan.php file.

USAGE
==========================
Now when you run `php artisan` you will see the new `convert:migrations` option.

You can use this command by typing `php artisan convert:migrations myDatabaseName`.

If you want to ignore specific tables you can use a comma separated string `--ignore="users, profiles"`.

Example `php artisan convert:migrations myDatabaseName --ignore="table1, table2"`.
