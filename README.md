# Belajar Laravel  
Tutorial Laravel untuk Pemula

---

## 1. Instalasi Laravel

1. **Download Visual Studio Code**  
   [https://code.visualstudio.com/download](https://code.visualstudio.com/download)

2. **Download Composer**  
   [https://getcomposer.org/download/](https://getcomposer.org/download/)

3. **Download XAMPP atau Laragon**  
   - XAMPP: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)  
   - Laragon: [https://laragon.org/download/](https://laragon.org/download/)

4. **Buka Command Line Interface (CLI)**  
   Pilih direktori tempat Anda ingin menyimpan proyek Laravel.

5. **Buat direktori baru**  
   ```bash
   mkdir nama_directory
6. **Masuk ke direktori yang sudah dibuat**
   ```bash
   cd nama_directory
7. **Buka Visual Studio Code di direktori tersebut** 
   ```bash
   code .
8. **Buka terminal di Visual Studio Code** 
   Tekan `CTRL + `` (tanda backtick)
9. **Install Laravel menggunakan Composer** 
   ```bash
   composer create-project laravel/laravel="12.*"
10. **Jalankan server development Laravel** 
   ```bash
   php artisan serve

**---------------------------------------------------------------------------**
## 2. Struktur Folder

<h2>Berikut penjelasan singkat beberapa folder penting di Laravel:</h2>

- app/
  Tempat menyimpan kode aplikasi seperti Models, Controllers, dan logika bisnis.

- bootstrap/
  Berisi file bootstrap untuk memulai framework Laravel.

- config/
  Berisi konfigurasi aplikasi seperti database, mail, cache, dll.

- database/
  Folder untuk migrasi database, model factory, dan seeding data.

- public/
  Root folder yang diakses publik, berisi index.php dan aset frontend.

- resources/
  Tempat untuk view (Blade templates), file bahasa (localization), dan aset frontend yang belum di-compile.

- routes/
  Tempat mendefinisikan semua route aplikasi (web.php, api.php, dll).

- storage/
  Tempat penyimpanan file seperti cache, logs, dan file upload.

- tests/
  Folder untuk menulis unit dan feature testing aplikasi.

- vendor/
  Folder yang berisi semua dependency Composer (tidak perlu diubah).

