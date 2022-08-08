# Laravel CMS using Vanilla PHP Views

This repository is copy of the simple [PHP CMS](https://github.com/codeadamca/php-cms) except the CMS has been converted to Laravel.

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

## Tutorial Requirements:

-   [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
-   [Laravel](https://laravel.com/)

Full tutorial URL: https://codeadam.ca/learning/php-cms-laravel.html

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>

-   CMS dashboard login 1: TaraLai@test.com, password (which is $2y$10$j9etSLvqjcAabmUATLQOr.zv4FD6YoanEoyFYAu.lqSlwXoPBBgPu on the database table 'users')
-   CMS dashboard login 2: sean.k.trudel@gmail.com, password (which is $2y$10$j9etSLvqjcAabmUATLQOr.zv4FD6YoanEoyFYAu.lqSlwXoPBBgPu on the database table 'users')
-   GitHub repo: https://github.com/Taralai0626/Tara-Sean-lavarelAssign2.git

Project responsibilites:
- Tara Lai:
  - GitHub repo setup
  - CMS projects CRUD
  - CMS skills CRUD
  - CMS about CRUD
- Sean Trudel:
  - CMS profile links CRUD
  - CMS education CRUD
  - portfolio page profile links display feature