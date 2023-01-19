# CodeIgniter 4 Application Starter

## Cara Konfigurasi Database

Buka di folder app/Config/Database.php. Sesuaikan username, password dan nama database masing - masing.

## Notes

Perhatikan Code Berikut :
'$routes->setDefaultNamespace('App\Controllers');'
'$routes->setDefaultController('User');'
'$routes->setDefaultMethod('index');'
'$routes->setTranslateURIDashes(false);'
'$routes->set404Override();'
Keterangan :
Baris code diatas adalah fungsi untuk membuka halaman utama saat localhost:8080 dibuka. Artinya, dari baris kode diatas, membaca folder App, kemudian folder Controllers, lalu membaca file controller yang di definisikan ('User'), kemudian method yang dibaca adalah index.