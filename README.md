# Tugas Besar IMPAL
## Anggota Kelompok Gacorr
| NIM       | Nama Lengkap             |     Job Desk       |
|-----------|--------------------------|---------------------------|
|     -      |    Yesika               |     Project Manager     |
| 2311102180 | Arnanda Setya Nosa P.   |        Backend          |
| -          |  Adit                   |        Desain           |
| -          | Afif                    |        Frontend         |
| -          |     Fajar               |        Tester                 |

# Chupatu - Layanan Cuci Sepatu

Chupatu adalah layanan cuci sepatu dengan berbagai pilihan layanan, seperti cuci reguler, deep clean, dan repaint. Aplikasi ini dibangun menggunakan **Laravel 11** dan menggunakan **MySQL** untuk database.

---

## 🚀 Langkah-langkah untuk Menjalankan Proyek Ini

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer Ente:

### 1. **Clone Repositori**

Jika Ente belum meng-clone repositori ini, jalankan perintah berikut untuk menyalin proyek ke komputer lokal elu:

```bash
git clone https://github.com/arnadd72/Chupatu.git
```
### 2. **Masuk ke Folder Proyek**

Setelah repositori berhasil di-clone, buka folder proyek menggunakan perintah berikut di terminal VS Code:
```bash
cd Chupatu
```
### 3. **Instalasi Dependencies**

Untuk instalasi semua dependency yang diperlukan oleh Laravel, jalankan perintah berikut di terminal VS Code:
```bash
composer install
```
Kemudian, install dependencies untuk frontend (npm atau yarn harus sudah terinstal):
```bash
npm install
```
### 4. **Konfigurasi File .env**

Salin file .env.example ke .env dengan perintah:
```bash
cp .env.example .env
```
### 5. **Generate Key Laravel**

Jalankan perintah berikut untuk menghasilkan APP_KEY yang dibutuhkan oleh Laravel:
```bash
php artisan key:generate
```
### SKIP LANGKAH 6 DULU AJA LANGSUNG KE LANGKAH 7 
### 6. **Konfigurasi Databasel**
Pastikan telah mengatur konfigurasi database di file .env dengan benar.
Jika menggunakan MySQL, sesuaikan bagian berikut sesuai dengan pengaturan lu:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= (NAMA DATABASE)
DB_USERNAME=root
DB_PASSWORD= (BISA KOSONG DULU AJA)
```
### 7. **Jalankan Migrasi Database**

Jika tabel-tabel di database belum ada, Ente bisa menjalankan migrasi untuk membuatnya:
```bash
php artisan migrate
```
jika muncul 
```sh
Would you like to create it? (yes/no)
```
Ketik "Yes"
### 6. **Konfigurasi Database**
### 8. **jalankan Aplikasi**

Untuk menjalankan aplikasi Laravel di server lokal, jalankan perintah:
```bash
php artisan serve
```
Aplikasi akan berjalan di http://127.0.0.1:8000 yang muncul di terminal.

### 9. **Menjalankan Frontend atau Tampilan UI**

jalankan perintah berikut di Terminal baru ( **PASTIKAN MASUK KE FOLDER Chupatu DAHULU** ) untuk mengkompilasi asset dengan Vite:
```bash
npm run dev
```
Ini akan menjalankan server pengembangan untuk frontend dan secara otomatis mengupdate saat ada perubahan pada file frontend.

# 🤝 Kolaborasi
# PASTIKAN SELALU PULL SEBELUM MENGODING

Untuk berkolaborasi dengan tim, pastikan untuk mengikuti langkah-langkah berikut:

1. Tarik perubahan terbaru dari GitHub sebelum mulai bekerja:
```bash
git pull origin main
```

2. Buat branch baru untuk fitur baru atau perbaikan:
```bash
git checkout -b nama-branch
```

3. Setelah selesai, commit dan push perubahan:
```bash
git add .
git commit -m "Deskripsi perubahan"
git push origin nama-branch
```

4. Buat Pull Request untuk menggabungkan perubahan ke branch main.

📝 Catatan:

Jika ada pembaruan di repositori GitHub, pastikan untuk selalu melakukan pull untuk mendapatkan perubahan terbaru:
```bash
git pull origin main
```

## MATUR NUWUN 

