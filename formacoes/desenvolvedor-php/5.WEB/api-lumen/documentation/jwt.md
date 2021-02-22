# Authentication with JWT

Install `$ composer require firebase/php-jwt`  

Enable  

```php
$app->routeMiddleware([
    '' => App\Http\Middleware\Authenticate::class,
]);

$app->register(App\Providers\AuthServiceProvider::class);

in bootstrap/app.php and add  

```php
$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {}
```

in the routes.  
