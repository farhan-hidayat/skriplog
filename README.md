# Skriplog

Skriplog merupakan aplikasi E-Catalog Skripsi sederhana yang dibangun menggunakan Laravel 9.

## Installation

-   Siapkan [Composer](https://getcomposer.org/download/) bagi yang belum punya. kemudian jalankan

```bash
composer install
```

-   Load modules

```bash
npm install && npm run dev
```

-   Buat file .env dengan cara mengcopy file .env.example

```bash
cp .env.example .env
```

-   Buat Key

```bash
php artisan key:generate
```

-   Buat database dan sesuaikan nama database dengan setup pada .env lalu lakukan migrate

```bash
php artisan migrate:fresh
```

-   Jalankan program

```bash
php artisan serve
atau command di bawah agar program dapat diakses secara LAN
php artisan serve --host ip_device --port 8000
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
