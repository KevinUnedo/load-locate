# Database Structure

On this page we provide the lists of tables used to store the application data.

## Physical Data Model
PDM : [[https://drive.google.com/file/d/1cZ2Kd_C13sbydHZIdNRmewse9FTi667k/view?usp=sharing](https://drive.google.com/file/d/1dFiNLhDedrBKIV81orgtX9GUPGsYARiu/view?usp=sharing)](https://drive.google.com/file/d/1dFiNLhDedrBKIV81orgtX9GUPGsYARiu/view?usp=drive_link)
## Data Description
Web Load Located ini terdiri dari tiga tabel yang saling berelasi, yaitu :

1. User
-> Tabel ini menyimpan data user termasuk username, password, name, phone number dan email. Tabel ini digunakan untuk mengidentifikasi, memverifikasi, dan melacak pengguna.
- username -> primary key yang unik bagi setiap pengguna dan digunakan untuk mengidentifikasi pengguna saat mereka masuk sistem.
- password -> kata sandi pengguna untuk melindungi akun user dari akses yang tidak sah.
- name -> nama pengguna
- phone_number -> nomor telepon pengguna yang dapat digunakan untuk menghubungi pengguna.
- email -> alamat email pengguna.

2. Item_Lost
-> Tabel ini menyimpan data  tentang barang yang hilang, termasuk ID barang, jenis barang, tanggal hilang, lokasi, informasi lebih lanjut, gambar dan owner name.
Tabel ini digunakan untuk melacak barang yang hilang dan membantu pemilik barang yang hilang untuk menemukan barang mereka.
- item_id -> kunci utama, unik untuk setiap barang yang hilang.
- type_of_item -> jenis barang yang hilang, seperti ponsel, dompet, atau kunci.
- date_lost -> tanggal barang hilang.
- location -> lokasi di mana barang hilang.
- more_information - informasi tambahan tentang barang hilang, seperti deskripsi atau foto.
- image -> gambar barang yang hilang.
- username - nama pemilik barang yang hilang.

3. Item_found
-> Tabel ini menyimpan informasi tentang barang-barang yang ditemukan.
Tabel ini digunakan untuk menginformasikan barang barang yang ditemukan dan membantu pemilik barang menemukan barang mereka. Sama seperti tabel item_lost, tabel ini memiliki atribut yang sama seperti :
- item_id adalah -> primary key yang unik untuk setiap item yang ditemukan.
- type_of_item -> menyimpan jenis barang yang ditemukan.
- date -> menyimpan tanggal barang ditemukan.
- location -> menyimpan lokasi barang ditemukan.
- more_information -> kolom yang menyimpan informasi tambahan tentang barang yang ditemukan, seperti deskripsi atau gambar.
- image -> gambar barang yang hilang.
- username -> foreign key yang menyimpan nama pelapor yang menemukan barang.

Hubungan Antar Tabel :

## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)
