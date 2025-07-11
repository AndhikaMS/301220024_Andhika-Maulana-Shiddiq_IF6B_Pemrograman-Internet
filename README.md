# Tumbuh Lestari Web Application

Aplikasi web Tumbuh Lestari adalah sistem informasi berbasis PHP untuk pengelolaan produk kopi, blog, dan profil perusahaan. Aplikasi ini memiliki halaman landing page publik, halaman produk, blog, about, contact, serta dashboard admin untuk manajemen data.

## Fitur Utama
- **Landing Page**: Halaman utama dengan informasi singkat, hero section, statistik, dan navigasi ke halaman lain.
- **Produk**: Daftar produk kopi, detail, dan harga.
- **Blog**: Daftar artikel/blog, detail artikel.
- **About**: Profil perusahaan, sejarah, tim, dan kebun kopi.
- **Contact**: Informasi kontak, alamat, dan media sosial.
- **Dashboard Admin**: Login admin, manajemen produk dan blog (tambah, edit, hapus), statistik produk & blog.

## Struktur File Utama
- `index.php` : Landing page publik
- `home.php` : Dashboard admin (login required)
- `produk.php`, `produk_tambah.php`, `produk_edit.php`, dll : Manajemen produk (admin)
- `blog.php`, `blog_tambah.php`, `blog_edit.php`, dll : Manajemen blog (admin)
- `productspage.php` : Halaman publik daftar produk
- `blogpage.php` : Halaman publik daftar blog
- `about.php` : Halaman profil perusahaan
- `contact.php` : Halaman kontak
- `koneksi.php` : Koneksi database MySQL
- `uploads/` : Folder upload gambar produk
- `Anggota tim/` : Foto anggota tim

## Cara Menjalankan Aplikasi

### 1. **Persiapan Lingkungan**
- Install [XAMPP](https://www.apachefriends.org/) atau software serupa (pastikan Apache & MySQL aktif)
- Clone/copy seluruh folder aplikasi ke dalam folder `htdocs` XAMPP, misal: `C:/xampp/htdocs/TumbuhLestari/`

### 2. **Setup Database**
- Buka `phpmyadmin` (http://localhost/phpmyadmin)
- Buat database baru, misal: `tumbuhlestari`
- Import file `tumbuh_lestari.sql` yang ada di folder import_database
- Pastikan tabel `produk`, `blog`, dan tabel user/admin sudah ada
- Cek/ubah konfigurasi koneksi di file `koneksi.php` jika perlu

### 3. **Menjalankan Aplikasi**
- Ubah folder proyek menjadi TumbuhLestari.
- Buka browser dan akses: `http://localhost/TumbuhLestari/index.php`
- Untuk dashboard admin, akses: `http://localhost/TumbuhLestari/home.php` (akan redirect ke login jika belum login)
- Login menggunakan akun admin yang sudah terdaftar di database yakni Username: admin, Password: admin123

### 4. **Fitur Admin**
- Setelah login, admin dapat menambah, mengedit, dan menghapus produk & blog
- Upload gambar produk ke folder `uploads/`
- Upload foto anggota tim ke folder `Anggota tim/`
- Kembali ke `http://localhost/TumbuhLestari/index.php` untuk melihat fitur-fitur seperti sejarah perusahaan, dan sebagainya.
