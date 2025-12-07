# 🚀 Aplikasi Manajemen Data Siswa & Laporan PDF (PHP Native)

Ini adalah proyek aplikasi manajemen data siswa sederhana (CRUD) yang dilengkapi dengan fitur **Generate Laporan PDF**. Aplikasi ini dibangun menggunakan **PHP Natif**, database **MySQL**, dan library **FPDF**.

Aplikasi ini mendemonstrasikan kemampuan dasar manipulasi database serta integrasi library eksternal untuk kebutuhan pelaporan dokumen digital.

Untuk mengakses web, silahkan menggunakan link berikut: [Link Website](https://tugas11.infinityfreeapp.com/index.php)

-----

## 📸 Tangkapan Layar (Screenshots)

### 1. Halaman Utama (Dashboard)
<img width="1919" height="823" alt="image" src="https://github.com/user-attachments/assets/f06dffe0-6011-446a-8580-f9e80c43ac3d" />

*Tampilan utama menampilkan tabel data siswa, tombol navigasi (Tambah, Edit, Hapus), dan tombol Cetak PDF.*

### 2. Form Input & Edit Data
<img width="1918" height="824" alt="image" src="https://github.com/user-attachments/assets/bc90565b-a114-4b54-b4fc-bf5da2299b3c" />

<img width="1919" height="817" alt="image" src="https://github.com/user-attachments/assets/711942dc-ec6f-46d0-9e00-0ddb44981c7a" />

*Menggunakan desain Bootstrap 5 untuk form yang responsif dan rapi.*

### 3. Hasil Cetak Laporan PDF
<img width="1919" height="818" alt="image" src="https://github.com/user-attachments/assets/92cdf47f-1f15-445f-9a74-93fb539090a6" />

*Output file PDF yang digenerate secara otomatis menggunakan library FPDF.*

-----

## 💻 Tentang Proyek Ini

Aplikasi ini dirancang sebagai studi kasus untuk memahami alur kerja **CRUD (Create, Read, Update, Delete)** pada PHP dan cara membuat dokumen cetak berbasis web.

### Fokus Pengembangan:

1.  **Manajemen Data:** Mengelola data siswa (NIS, Nama, Kelas, Jurusan) secara efisien.
2.  **User Interface:** Menggunakan **Bootstrap 5** untuk antarmuka yang modern dan ramah pengguna (user-friendly).
3.  **Reporting:** Mengimplementasikan library **FPDF** untuk mengkonversi data HTML/Database menjadi dokumen `.pdf` siap cetak.

## 🚀 Fitur Utama

* **Manajemen Data Siswa (CRUD):**
    * **Create:** Form tambah siswa baru dengan validasi input.
    * **Read:** Menampilkan data siswa dalam format tabel yang rapi.
    * **Update:** Edit data siswa yang sudah ada (NIS diproteksi agar tidak berubah).
    * **Delete:** Hapus data siswa dengan konfirmasi keamanan (alert JavaScript).

* **Fitur Cetak Laporan:**
    * **Export PDF:** Satu kali klik untuk mencetak seluruh data siswa ke dalam format laporan PDF ukuran A4 Landscape.
    * **Custom Header:** Header laporan resmi dengan tata letak yang presisi.

* **Antarmuka Modern:**
    * Tombol aksi berwarna (Biru, Kuning, Merah, Hijau) sesuai fungsi.
    * Tabel responsif dengan efek *hover*.

## 🛠️ Teknologi yang Digunakan

* **Backend:** PHP (Natif) v7/v8
* **Database:** MySQL (`mysqli` extension)
* **Frontend:** HTML, CSS, **Bootstrap 5 (CDN)**
* **Library:** **FPDF** (Untuk generate PDF)

## 🗂️ Struktur dan Alur File

Aplikasi ini terdiri dari beberapa modul file utama:

### Modul Inti

* **`koneksi.php`**: File konfigurasi untuk menghubungkan PHP dengan database `pdf`.
* **`index.php`**: Halaman utama yang memuat tabel data dan navigasi menu.

### Modul Manipulasi Data (CRUD)

* **`tambah.php`**: Halaman formulir untuk memasukkan data siswa baru.
* **`edit.php`**: Halaman formulir untuk mengubah data siswa berdasarkan NIS.
* **`hapus.php`**: Skrip *backend* untuk menghapus data dari database, lalu redirect kembali ke index.

### Modul Laporan

* **`cetak_pdf.php`**: Skrip khusus yang memanggil library FPDF untuk merender data tabel menjadi file PDF.
* **`fpdf.php` & `font/`**: File core dari library FPDF.

## 👤 Author

Dibuat oleh **Mandy Alphafyn Imanuel Tjandra (5025241173)**
