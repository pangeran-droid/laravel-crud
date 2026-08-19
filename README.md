<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1 align="center">Laravel CRUD</h1>

<p align="center">Aplikasi sederhana untuk mengelola data produk menggunakan Laravel.</p>

<p align="center">
  <img src=".github/media/preview.png" alt="Preview Aplikasi" width="800">
</p>


## Fitur

- Menampilkan data produk
- Menambah produk
- Mengedit produk
- Menghapus produk

## Teknologi

- Laravel 13
- PHP
- MySQL

## Instalasi

Clone repository dan masuk ke folder project, kemudian jalankan:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Buka aplikasi di browser:

http://127.0.0.1:8000

Halaman Produk
http://127.0.0.1:8000/produk
