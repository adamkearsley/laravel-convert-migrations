# Laravel Convert Migrations

This is an artisan command to convert your current SQL database schema into a Laravel 4 Migration file. It'll come really handy when you have started a Laravel project without using migrations, or if you're migrating an old app to Laravel.

## Installation

1. Add the package to your composer.json file and run `composer update`:

```json
"require": {
    "adamkearsley/convert-migrations": "dev-master"
}
```

2. Add `'Adamkearsley\ConvertMigrations\ConvertMigrationsServiceProvider'` to your `app/config/app.php` file, inside the `providers` array.

## Usage

Now it's as easy as running `php artisan convert:migrations myDatabaseName`. Wait a few seconds and, magically, you'll have a new migration in `app/database/migrations`.

**Ignoring Tables**

You can even ignore tables from the migration if you need to. Just use the `ignore` option and separate table names with a comma: `php artisan convert:migrations --ignore="table1, table2"`.

## Credits

Credits go to "bruceoutdoors" [original class](https://gist.github.com/bruceoutdoors/9166186).