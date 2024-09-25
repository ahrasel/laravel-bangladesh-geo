# Bangladesh Geo

A Laravel package for managing geo-locations in Bangladesh, including a predefined list of divisions, districts, upazilas and unions.

## Author

-   **MD Amanullah Hoque** - [Github](https://github.com/ahrasel)

## Installation

You can install the package via Composer. Run the following command in your Laravel project:

```bash
composer require ahrasel/bangladesh-geo
```

## Service Provider

If you're using Laravel 5.4 or lower, you need to register the service provider. Add the following line to the `providers` array in `config/app.php`:

```php
Ahrasel\BangladeshGeo\BangladeshGeoServiceProvider::class,
```

## Migration

The package includes a migration for the all table. To run the migration, use the following Artisan command:

```bash
php artisan migrate
```

## Seeder

You can seed the all table with predefined data by running the following command:

```bash
php artisan db:seed --class=Ahrasel\\BangladeshGeo\\Database\\Seeders\\DistrictsSeeder
```

## Usage

You can interact with the `District` model as follows:

```php
use Ahrasel\BangladeshGeo\Models\District;
$district = District::create(['name' => 'New District']);
```

## License

This package is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Acknowledgements

-   **Laravel** - The PHP framework that powers this package.
-   **Packagist** - For hosting our package.
