
# Simple REST app with LPD
### Laravel Package Development

---

### Instructions for package development:

- Run these commands:
```
composer create-project laravel/laravel larapage
cd larapage/
mkdir boolfalse
cd boolfalse
git clone git@github.com:boolfalse/lpd-simple-rest-app.git larapage
cd larapage/
```

- Create MySQL database and set appropriate data in '.env'.

- Add this in "config/app.php@providers":
```
Boolfalse\Larapage\PaginationServiceProvider::class,
```

- Add this in "composer.json@autoload-dev.psr-4":
```
"Boolfalse\\Larapage\\": "boolfalse/larapage/src/"
```

- Run these commands:
```
php artisan config:cache
php artisan optimize
php artisan migrate
```

**Resources:**

- Service Provider
- Config (with publishing)
- Migration
- Model
- View
- Controller
- Routes

### Author:
- [BoolFalse](https://boolfalse.com)
