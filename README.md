## 🚀 Development

Composer and Yarn/NPM package manager are required

Via Git

-   Fork, then Clone

```bash
git clone https://github.com/alphaolomi/food.git

cd food

composer install --ignore-platform-reqs
```

-   Edit `.env` and set your database connection details

```bash
cp .env.example .env
```

-   Genrate keys and migrate tables

```bash
php artisan key:generate
php artisan migrate
php artisan db:seed
```


<br>

## Run Dev

```sh
php artisan serve
```


