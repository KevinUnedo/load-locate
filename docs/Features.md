# Database Structure

On this page we provide the lists of both functional and non functional requirements.

## Functional Requirements

### FR01 - User harus melakukan register dan login
User harus mendaftarkan diri dan membuat akun untuk dapat menggunakan web ini.

BPMN:
1. Register
- User -> S: Buka halaman register
- S -> User: Tampilkan halaman register
- User -> S: Input username, password, dan data user lainnya
- S -> S: Validasi input user
- S -> User: Validasi input user sukses
- User -> S: Klik tombol register
- S -> S: Simpan data user
- S -> User: Registrasi sukses

2. Login
- User -> S: Buka halaman login
- S -> User: Tampilkan halaman login
- User -> S: Input username dan password
- S -> S: Validasi username dan password
- S -> User: Validasi username dan password sukses
- User -> S: Klik tombol login
- S -> S: Validasi session user
- S -> User: Login sukses

### FR02 - User dapat melakukan reset password
User dapat melakukan reset password apabila terjadi human error, seperti lupa password.

BPMN:
- User -> S: Klik tombol forgot password
- S -> User: Tampilkan halaman forgot password

- User -> S: Input alamat email
- S -> S: Validasi alamat email
- S -> User: Validasi alamat email sukses
  
- S -> User: Kirim email link reset password
- User -> S: Buka email dan klik link reset password
- S -> User: Tampilkan halaman reset password
  
- User -> S: Input password baru
- S -> S: Validasi password baru
- S -> User: Validasi password baru sukses
   
- User -> S: Klik tombol reset password
- S -> S: Simpan password baru
- S -> User: Password berhasil direset

### FR03 - User dapat menyimpan data tentang barang yang hilang
User harus dapat menyimpan data tentang barang yang hilangn.

BPMN:
- User -> S: Buka halaman report lost item
- S -> User: Tampilkan halaman report lost item

- User -> S: Input data barang hilang
- S -> S: Validasi data barang hilang
- S -> User: Validasi data barang hilang sukses

- User -> S: Klik Publish
- S -> S: Simpan data barang hilang


### FR04 - User dapat menyimpan data tentang barang yang ditemukan
User harus dapat menyimpan data tentang barang yang ditemukan.

BPMN:
- User -> S: Buka halaman report found item
- S -> User: Tampilkan halaman report found item

- User -> S: Input data barang ditemukan
- S -> S: Validasi data barang ditemukan
- S -> User: Validasi data barang ditemukan sukses

- User -> S: Klik Publish
- S -> S: Simpan data barang ditemukan

Write the description, BPMN, etc.

### FR05 - User dapat melihat unggahan terbaru barang yang hilang dan ditemukan
User dapat melihat daftar unggahan terbaru dari barang - barang yang hilang dan ditemukan yang ditampilkan oleh sebuah tabel yang berisi nama, barang, waktu dan lokasi barang hilang dan ditemukan.

BPMN :
- User -> S: Buka halaman recent post
- S -> User: Tampilkan halaman recent post
- S -> User: Tampilkan daftar post barang hilang
- S -> User: Tampilkan daftar post barang ditemukan
- User -> S: Pilih post barang hilang atau ditemukan
- S -> User: Tampilkan detail post

### FR06 - User dapat melihat detail barang yang hilang
User dapat melihat detail barang hilang melalui fitur lost item detail yang menampilkan terkait detail seperti nama, dan juga bentuk dan jenis barang yang hilang.

BPMN:
- User -> S: Buka lost item detail page
- S -> User: Tampilkan lost item detail page
- S -> User: Tampilkan data barang hilang
- S -> User: Tampilkan informasi kontak pemilik barang hilang

## Non Functional Requirements

### NFR01 - Kinerja
Website Load Locate harus memiliki kinerja yang optimal, dengan waktu pemuatan sistem yang cepat, sehingga user dapat dengan mudah untuk mencari atau melaporkan barang yang hilang tanpa adanya keterlambatan.

### NFR02 - Keamanan
Data pribadi user dan informasi tentang barang yang hilang atau ditemukan harus dijaga dengan baik dari akses yang tidak sah atau potensi pelanggaran keamanan.

### NFR03 - Ketersediaan
Website Load Locate harus selalu tersedia 24/7, dengan waktu maintanance se minimal mungkin untuk pemeliharaan yang sudah dijadwalkan.

### NFR04 - Keoptimalan
Website Load Locate harus dapat diandalkan dan dapat beroperasi dengan baik tanpa hambatan, bahkan ketika banyak nya user menggunakan wesite dengan waktu yang bersamaan.

### NFR05 - Skalabilitas
Website Load Locate harus mampu bertumbuh seiring waktu dengan melakukan penambahan fitur.

### NFR06 - Usabilitas 
Website Load Locate harus membuat fitur yang mudah digunakan dan tidak membingungkan agar dapat membuat user tidak kesulitan ketika menggunakan website tersebut



## Mockup

Figma : https://www.figma.com/file/Rf3y6FKP3wuSUHBQV8uY7M/Load-Locate-WebPage?type=design&node-id=0%3A1&mode=design&t=Q2sIvUOeq6dSBugv-1

1. Fitur Registrasi (Register):
Pengguna dapat membuat akun baru dengan mengisi informasi seperti nama, email, dan kata sandi.
Sistem harus memvalidasi email unik untuk setiap akun pengguna.

2. Fitur Masuk (Login):
Pengguna yang sudah memiliki akun dapat masuk ke dalam sistem dengan menggunakan email dan kata sandi yang benar.
Sistem harus mengautentikasi pengguna dan memberikan akses sesuai dengan peran (user role) masing-masing.

3. Fitur Lupa Kata Sandi (Forgot Password):
Pengguna dapat mengatur ulang kata sandi mereka jika mereka lupa dengan cara memasukkan email terdaftar.
Sistem harus mengirimkan email dengan tautan reset kata sandi kepada pengguna yang meminta.

4. Fitur Laporkan Barang Hilang (Report Lost Item):
Pengguna harus dapat melaporkan barang yang hilang dengan mengisi formulir yang mencakup informasi seperti deskripsi barang, lokasi hilangnya, tanggal kehilangan, dan kontak pengguna, dan mungkin spesifik barang yang hilang.
Setelah pengguna mengirimkan laporan, sistem harus menyimpan laporan tersebut dan mengirimkan konfirmasi kepada pengguna.

5. Fitur Laporkan Barang Ditemukan (Report Found Item):
Pengguna harus dapat melaporkan barang yang ditemukan dengan mengisi formulir yang mencakup informasi seperti deskripsi barang, lokasi ditemukannya, tanggal penemuan, dan kontak pengguna.
Setelah pengguna mengirimkan laporan, sistem harus menyimpan laporan tersebut dan mengirimkan konfirmasi kepada pengguna.

6. Fitur Posting Terbaru (Recent Post):
Pengguna harus dapat melihat daftar barang yang hilang atau ditemukan secara terbaru.
Daftar ini harus mencakup informasi dasar tentang barang, seperti judul, lokasi, dan tanggal laporan.

7. Fitur Detail Barang Hilang (Lost Item Detail):
Pengguna harus dapat melihat detail lengkap dari laporan barang yang hilang, termasuk deskripsi, lokasi hilangnya, tanggal laporan, dan kontak pengguna yang melaporkan.
Pengguna juga harus dapat melihat jika barang tersebut sudah ditemukan dan diberi status "ditemukan."

## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)
