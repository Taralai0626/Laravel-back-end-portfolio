

# Laravel CMS using Vanilla PHP Views


A few notes regarding the CMS:

The CMS uses the public storage driver, make sure to update your .env file to:

```php
FILESYSTEM_DRIVER=public
```

The database setup includes migrations and seeding. Run the following command to initialize the database:

```
php artisan migrate:refresh --seed
```

All user acocunts will have the default password of "password".

App was deployed to Heroku. In order to store images, I had implemented AWS bucket to store images so the image can be displayed after deplyed to Heroku.


