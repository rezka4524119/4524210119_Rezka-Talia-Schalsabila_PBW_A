# Pertemuan 6 & 7 - Laravel & Filament 3.x (AuthBook)

**Praktikum Pemrograman Berbasis Web**
Membangun Aplikasi Manajemen Buku dengan Laravel & Filament 3.x

| | |
|---|---|
| **Nama** | Rezka Talia Schalsabila |
| **NIM** | 4524210119 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Web |
| **Dosen Pengampu** |Bambang Riono Arsad, S.Kom., MMSI|


---

## Daftar Isi

1. [Deskripsi Aplikasi](#1-deskripsi-aplikasi)
2. [Teknologi](#2-teknologi)
3. [Cara Menjalankan](#3-cara-menjalankan)
4. [Akun Login](#4-akun-login)
5. [Tugas 1: Implementasi Dasar](#5-tugas-1-implementasi-dasar)
6. [Tugas 2: Kustomisasi dan Pengembangan](#6-tugas-2-kustomisasi-dan-pengembangan)
7. [Tugas 3: Analisis dan Dokumentasi](#7-tugas-3-analisis-dan-dokumentasi)
   - [3.1 Penjelasan Arsitektur](#31-penjelasan-arsitektur-7-poin)
   - [3.2 Perbandingan dengan Pendekatan Tradisional](#32-perbandingan-dengan-pendekatan-tradisional-7-poin)
   - [3.3 Refleksi Pembelajaran](#33-refleksi-pembelajaran-6-poin)

---

## 1. Deskripsi Aplikasi

AuthBook adalah sistem manajemen buku berbasis web. Aplikasi ini menyediakan CRUD data **buku**, **penulis**, dan **kategori**, dilengkapi pencarian, filter, upload cover, dashboard statistik, serta pembatasan hak akses berdasarkan **role** (admin, staff, viewer).

## 2. Teknologi

- PHP 8.1+ dan Laravel
- Filament 3.x (admin panel), Livewire, Alpine.js, Tailwind CSS
- Database SQLite / MySQL
- Composer, Git

## 3. Cara Menjalankan

Folder `vendor` dan file `.env` tidak ikut di-upload, jadi lakukan langkah berikut setelah clone:

```bash
cd "Pertemuan6&7"
composer install
copy .env.example .env        # Linux/Mac: cp .env.example .env
php artisan key:generate
```

Atur database di `.env`. Untuk SQLite:

```env
DB_CONNECTION=sqlite
```

```bash
# buat file database SQLite (Windows: type nul > database\database.sqlite)
touch database/database.sqlite

php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
```

Buka `http://127.0.0.1:8000/admin`.

## 4. Akun Login

Password semua akun: `password`

| Email | Role | Hak akses |
|---|---|---|
| admin@example.com | admin | Semua akses (lihat, tambah, ubah, hapus, bulk delete) |
| staff@example.com | staff | Lihat, tambah, ubah (tanpa hapus) |
| viewer@example.com | viewer | Hanya lihat |

---

## 5. Tugas 1: Implementasi Dasar

Fitur yang dikerjakan sesuai modul:

- Setup Laravel dan Filament, konfigurasi database
- Model dan migration `Author` dan `Book` (relasi One-to-Many)
- Factory dan seeder (10 author, 50 buku)
- `AuthorResource` dan `BookResource` (form, tabel, search, filter, upload cover, view page)
- Policy untuk `Book` dan `Author`

**Screenshot bukti:**

| Bukti | Gambar |
|---|---|
| Login admin panel | ![Login](docs/tugas1-login.png) |
| List books dengan data seeder | ![List Books](docs/tugas1-list-books.png) |
| Form create book | ![Create Book](docs/tugas1-create-book.png) |
| Hasil pencarian | ![Search](docs/tugas1-search.png) |
| Filter aktif | ![Filter](docs/tugas1-filter.png) |

---

## 6. Tugas 2: Kustomisasi dan Pengembangan

### 6.1 Field Description pada Book
- Migration `add_description_to_books_table` (kolom `description` bertipe text, nullable)
- `description` ditambahkan ke `$fillable` pada model `Book`
- Komponen `Textarea` pada form `BookResource`
- `BookFactory` menghasilkan `fake()->paragraph()`

### 6.2 Role-Based Access
- Migration `add_role_to_users_table` (kolom `role`, default `viewer`)
- `DatabaseSeeder` membuat 3 user: admin, staff, viewer
- `BookPolicy` dan `AuthorPolicy`:

| Aksi | Admin | Staff | Viewer |
|---|:---:|:---:|:---:|
| View / View any | Ya | Ya | Ya |
| Create | Ya | Ya | Tidak |
| Update | Ya | Ya | Tidak |
| Delete / Bulk delete | Ya | Tidak | Tidak |

### 6.3 Widget Dashboard
- `StatsOverview`: Total Books, Total Authors, Available, Borrowed
- `BookStatusChart`: grafik doughnut Available vs Borrowed

### 6.4 Kategori Buku (Many-to-Many)
- Model `Category`, tabel `categories`, dan tabel pivot `book_category`
- Relasi `belongsToMany` di `Book` dan `Category`
- Multi-select kategori pada form buku, kolom badge kategori dan filter pada tabel

**Screenshot bukti:**

| Bukti | Gambar |
|---|---|
| Dashboard (stat card dan chart) | ![Dashboard](docs/tugas2-dashboard.png) |
| Form book (Description dan Categories) | ![Form](docs/tugas2-form-book.png) |
| List books dengan kolom Categories | ![Categories](docs/tugas2-categories.png) |
| List books role admin | ![Admin](docs/tugas2-admin.png) |
| List books role staff | ![Staff](docs/tugas2-staff.png) |
| List books role viewer | ![Viewer](docs/tugas2-viewer.png) |

---

## 7. Tugas 3: Analisis dan Dokumentasi

### 3.1 Penjelasan Arsitektur (7 poin)

#### a. Diagram ERD

**Gambar 1. ERD AuthBook (notasi Chen).** Entitas Author dan Book berelasi One-to-Many melalui relasi *Menulis*. Entitas Book dan Category berelasi Many-to-Many melalui relasi *Memiliki*. Entitas User berdiri sendiri dan menyimpan atribut `role` untuk otorisasi.

![ERD Chen](docs/erd-chen.png)

**Gambar 2. ERD AuthBook (notasi crow's foot / struktur tabel fisik).**

![ERD Crow's Foot](docs/erd-crowsfoot.png)

#### b. Penjelasan Relasi Antar Tabel

| Tabel | Kolom penting | Keterangan |
|---|---|---|
| `users` | id, name, email, password, role | Autentikasi dan otorisasi. Tidak berelasi langsung ke tabel lain. |
| `authors` | id, name | Data penulis. |
| `books` | id, isbn (unique), title, author_id (FK), publisher, year, cover, description, status | Data buku. |
| `categories` | id, name (unique) | Kategori buku. |
| `book_category` | id, book_id (FK), category_id (FK) | Tabel pivot relasi Many-to-Many. |

| Relasi | Jenis | Penjelasan | Implementasi Eloquent |
|---|---|---|---|
| `authors` - `books` | One-to-Many | Satu penulis punya banyak buku, satu buku punya satu penulis. Jika author dihapus, bukunya ikut terhapus (`ON DELETE CASCADE`). | `Author::books()` memakai `hasMany`, `Book::author()` memakai `belongsTo` |
| `books` - `categories` | Many-to-Many | Satu buku bisa punya banyak kategori dan sebaliknya, dihubungkan tabel pivot `book_category`. | `Book::categories()` dan `Category::books()` memakai `belongsToMany` |

Pada migration pivot terdapat `unique(['book_id', 'category_id'])` supaya satu buku tidak memiliki kategori yang sama dua kali.

#### c. Flow Aplikasi (Request sampai Response)

Contoh alur saat membuka daftar buku (`GET /admin/books`):

```
Browser -> Route -> Middleware (auth) -> Halaman Livewire (ListBooks)
        -> BookPolicy::viewAny -> BookResource::table()
        -> Model Book (Eloquent) -> Database
        -> Blade/Livewire render HTML -> Response ke Browser
```

1. Browser mengirim request `GET /admin/books`.
2. Router Laravel mencocokkan URL dengan route yang didaftarkan `AdminPanelProvider` (panel Filament).
3. Middleware Filament memeriksa autentikasi. Jika belum login, user diarahkan ke `/admin/login`.
4. Halaman `ListBooks` (komponen Livewire) dijalankan.
5. `BookPolicy::viewAny` dicek berdasarkan `role` user. Policy juga menentukan tombol mana yang tampil (New, Edit, Delete, bulk delete).
6. `BookResource::table()` mendefinisikan kolom, filter, dan action. Model `Book` menjalankan query Eloquent ke database, termasuk relasi `author` dan `categories`.
7. Hasil dirender menjadi HTML dan dikirim sebagai response.
8. Interaksi berikutnya (search, filter, sort, pagination, hapus) dikirim lewat Livewire ke `/livewire/update` tanpa reload halaman penuh.

Alur Create/Update: form di `BookResource::form()` mengirim data lewat Livewire, Filament memvalidasi (`required`, `unique`, `maxLength`, dll), `BookPolicy::create/update` dicek, data disimpan oleh model (hanya kolom di `$fillable`), relasi `categories` disinkronkan ke tabel pivot, lalu notifikasi sukses ditampilkan. File cover disimpan di `storage/app/public/book-covers` dan diakses lewat symlink `public/storage`.

---

### 3.2 Perbandingan dengan Pendekatan Tradisional (7 poin)

#### a. CRUD dengan Filament vs Manual

| Aspek | Filament | Manual (Laravel + Blade) |
|---|---|---|
| File yang dibuat | 1 Resource beserta Pages (dibuat otomatis lewat artisan) | Route, Controller, FormRequest, dan banyak view Blade (index, create, edit, show) |
| Waktu pengerjaan | Menit | Jam |
| Form dan validasi | Deklaratif, pesan error otomatis | Ditulis sendiri di Blade dan FormRequest |
| Search, sort, filter, pagination | Satu method per fitur | Query dan UI dibuat sendiri |
| Upload file | Komponen `FileUpload` siap pakai (preview, editor, validasi) | Handle request, validasi, simpan, dan tampilkan manual |
| Otorisasi | Otomatis membaca Policy (tombol ikut tersembunyi) | Memasang `@can` dan middleware di setiap tempat |
| Tampilan | Modern, responsif, dark mode bawaan | Desain sendiri |
| Kustomisasi UI | Terbatas pada konvensi Filament | Bebas penuh |
| Learning curve | Perlu memahami API Filament | Cukup dasar Laravel dan Blade |
| Ketergantungan | Terikat versi Filament | Minim |

**Bukti dari praktikum ini:** `BookResource` sudah mencakup form, validasi, relasi select, upload cover, tabel dengan search, sort, filter, badge, dan bulk delete hanya dalam satu file sekitar 200 baris. Dengan cara manual, fitur yang sama membutuhkan banyak file dan jauh lebih banyak kode.

#### b. Kelebihan dan Kekurangan

| | Kelebihan | Kekurangan |
|---|---|---|
| **Filament** | Pengembangan sangat cepat. Kode ringkas dan konsisten. Fitur bawaan lengkap. Terintegrasi dengan Policy. UI modern tanpa menulis CSS. | Tampilan sulit dibuat sangat custom. Bergantung pada package dan upgrade versi (misalnya `BadgeColumn` sudah deprecated). Perlu waktu mempelajari API-nya. |
| **Manual** | Kontrol penuh atas tampilan dan alur. Tidak bergantung pada package admin. Cocok untuk desain yang unik. | Banyak boilerplate. Pengerjaan lama. Rawan tidak konsisten antar halaman. Semua fitur (search, filter, upload) dibuat dari nol. |

#### c. Kapan Menggunakan Filament

**Gunakan Filament untuk:** admin panel dan CMS, dashboard internal, aplikasi yang didominasi CRUD, backoffice, prototype dan MVP.

**Pertimbangkan alternatif untuk:** website publik dengan desain khusus (gunakan Blade, Livewire langsung, atau Inertia), aplikasi dengan UI sangat custom, dan aplikasi mobile (gunakan API ditambah framework mobile).

---

### 3.3 Refleksi Pembelajaran (6 poin)

#### a. Apa yang Dipelajari

- Alur dasar Laravel: migration, model, factory, seeder, dan hubungan antar-komponennya.
- Cara membuat relasi Eloquent One-to-Many dan Many-to-Many beserta tabel pivot.
- Cara kerja Filament Resource: satu class mengatur form, tabel, filter, action, dan halaman.
- Menggunakan Policy untuk membatasi hak akses per role, termasuk `deleteAny` untuk bulk delete.
- Membuat widget dashboard (stats overview dan chart).
- Alur kerja Git dan GitHub untuk mengumpulkan tugas.

#### b. Kesulitan dan Cara Mengatasinya

| Kesulitan | Penyebab | Solusi |
|---|---|---|
| `BookFactory` tidak ada | Factory tidak ikut terbuat saat `make:model Book -m` | Membuatnya dengan `php artisan make:factory BookFactory` dan memastikan trait `HasFactory` ada di model |
| Folder `YResource` muncul sendiri | Saat `make:filament-widget`, mengetik `y` pada pertanyaan nama resource | Menghapus folder dan memakai opsi `--panel=admin` agar tidak ditanya |
| Gagal login ("credentials do not match") | Memasukkan password yang salah, padahal seeder memakai `password` | Memakai kredensial dari seeder dan menjalankan `migrate:fresh --seed` bila perlu |
| Menu Books tidak muncul | Resource belum terbaca dan cache belum dibersihkan | `composer dump-autoload`, `php artisan optimize:clear`, membuat ulang resource, lalu login ulang |
| Kode `BookResource` tertimpa | `make:filament-resource` menimpa file yang sudah dimodifikasi | Menempel ulang kode dan lebih berhati-hati memilih opsi overwrite |
| Push ke GitHub gagal (error 403 dan token) | Windows menyimpan kredensial akun GitHub lain, dan GitHub tidak menerima password biasa | Menghapus kredensial di Credential Manager dan login memakai Personal Access Token |
| `embedded git repository` | Ada folder `.git` di dalam folder project | Menghapus `.git` di folder project, lalu `git add` ulang |
| Folder project masuk ke lokasi yang salah di repo | Root repo Git berada di folder yang berbeda dari perkiraan | Memindahkan folder dengan `git mv` ke dalam folder bersama Pertemuan 1 sampai 5 |

#### c. Rencana Pengembangan Selanjutnya

- Fitur **peminjaman buku**: tabel `members` dan `loans`, status buku berubah otomatis saat dipinjam atau dikembalikan.
- Riwayat peminjaman dan **denda keterlambatan**.
- **Laporan** dan export PDF atau Excel.
- **Notifikasi** jatuh tempo pengembalian.
- Mengganti role berbasis string dengan **PHP Enum** atau package **Spatie Laravel Permission**.
- Halaman publik untuk katalog buku (front-end terpisah dari admin panel).
- **Deploy** ke hosting dan menambahkan automated test.

---

## Referensi

- [Dokumentasi Laravel](https://laravel.com/docs)
- [Dokumentasi Filament](https://filamentphp.com/docs)
- [Dokumentasi Livewire](https://livewire.laravel.com/docs)

---

&copy; 2025 - Praktikum Pemrograman Berbasis Web
