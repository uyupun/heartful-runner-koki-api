# heartful-runner-koki-api

<img src="images/logo1.png" width="200px">

<img src="images/logo2.png" width="500px">

### システム要件

- PHP 8.2 - 8.3
- Composer
- 参考: https://laravel.com/docs/11.x/releases

### セットアップ

```bash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ touch database/database.sqlite
$ php artisan migrate
$ php artisan db:seed
$ php artisan serve
```

### ドキュメント

[API設計](api.md)
