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
   contoh: 
   ini akan masuk ke folder htdocs
   ```bash
   cd \xampp\htdocs

5. **Buat direktori baru**  
   ```bash
   mkdir nama_directory

6. **Masuk ke direktori yang sudah dibuat**
   ```bash
   cd nama_directory

7. **Buat Project Laravel dengan mengetikan kode berikut**
   ```bash
   composer create-project --prefer-dist laravel/laravel:^12.0 nama-proyek

8. **Buka Visual Studio Code di direktori tersebut** 
   ```bash
   code .

9. **Buka terminal di Visual Studio Code** 
   Tekan `CTRL + `` (tanda backtick)

10. **Jalankan servernya**
    ```bash
    php artisan serve
 
 ---

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

---  

## 3. Project CRUD

1. **Membuat model buku**
   ```bash
   php artisan make:model Buku -m

2. **Membuat Controller**
   ```bash
   php artisan make:controller BukuController --resource

3. **Edit Migration File database/migrations/xxxx_xx_xx_create_bukus_table.php**
   ```bash
   public function up(): void
{
    Schema::create('bukus', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('penulis');
        $table->year('tahun_terbit');
        $table->timestamps();
    });
}

4. **Migrasi ke Database**
   ```bash
   php artisan serve

5. **Routing: Edit routes/web.php**
   ```bash
   use App\Http\Controllers\BukuController;

   Route::resource('buku', BukuController::class);

6. **Controller: app/Http/Controllers/BukuController.php**
   ```bash
   namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required|digits:4|integer',
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required|digits:4|integer',
        ]);

        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}

7. **Buat Blade Templates**
- resources/views/buku/index.blade.php
   ```bash
   <!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <ul>
        @foreach($bukus as $buku)
            <li>
                <strong>{{ $buku->judul }}</strong> - {{ $buku->penulis }} ({{ $buku->tahun_terbit }})
                <a href="{{ route('buku.edit', $buku) }}">Edit</a>
                <form action="{{ route('buku.destroy', $buku) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

- resources/views/buku/create.blade.php
  ```bash
  <!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        Judul: <input type="text" name="judul"><br>
        Penulis: <input type="text" name="penulis"><br>
        Tahun Terbit: <input type="number" name="tahun_terbit"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

- resources/views/buku/create.blade.php
  ```bash
  <!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        Judul: <input type="text" name="judul"><br>
        Penulis: <input type="text" name="penulis"><br>
        Tahun Terbit: <input type="number" name="tahun_terbit"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

- resources/views/buku/edit.blade.php
  ```bash
  <!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="{{ route('buku.update', $buku) }}" method="POST">
        @csrf
        @method('PUT')
        Judul: <input type="text" name="judul" value="{{ $buku->judul }}"><br>
        Penulis: <input type="text" name="penulis" value="{{ $buku->penulis }}"><br>
        Tahun Terbit: <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

8. **Model Fillable: app/Models/Buku.php**
   ```bash
   namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'penulis', 'tahun_terbit'];
}

9. **Project selesain sekarang coba lihat**

