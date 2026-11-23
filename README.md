# UTS PBO - Inventaris Barang (Laravel)

Aplikasi CRUD inventaris barang menggunakan Route, Controller, dan Blade.
Data disimpan di session (tanpa database dan tanpa login).

## Cara menjalankan
1. composer install
2. Salin .env.example menjadi .env
3. php artisan key:generate
4. Pastikan SESSION_DRIVER=file di file .env
5. php artisan serve
6. Buka http://127.0.0.1:8000/example

## Cek route
php artisan route:list

## Daftar route
| Method | URI | Nama Route |
|---|---|---|
| GET | /example | example.index |
| GET | /example/create | example.create |
| POST | /example | example.store |
| GET | /example/{kode} | example.show |
| GET | /example/{kode}/edit | example.edit |
| PUT | /example/{kode} | example.update |
| DELETE | /example/{kode} | example.destroy |

## Identitas
Nama: Darma Bakti Ardiansyah
NIM: 20251020026