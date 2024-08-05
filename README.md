# ISC Jetstream Logistics

Aplikasi ini adalah aplikasi web app admin dashboard untuk penggunaan di sistem aplikasi gudang barang yaang dibangun menggunakan Laravel 9.
Aplikasi ini memungkinkan pengguna dengan peran admin dan supervisor untuk mengelola barang masuk dan keluar daari gudang, melakukan berdasarkan nomor tracking, dan mengekspor laporan ke dalam format exceel.

## Fitur

- **Login**: Pengguna harus login untuk mengakses aplikasi.
- **Role-based Access**:
- **Admin**: Dapat melakukan operasi CRUD (Create, Read, Update, Delete) untuk barang masuk dan keluar, mengakses menu tertentu.
- **Supervisor**: Dapat mengakses menu tambahan.
- **Form Validation**: Validasi form termasuk nama tidak boleh mengandung angka.
- **Export Laporan ke Excel**: Kemampuan untuk mengekspor laporan dalam format Excel.
- **Pencarian**: Fungsi pencarian untuk melacak nomor tracking.

## Instalasi

1. **Clone Repository**

   ```bash
   git clone https://github.com/abdulmajid34/ISC_JetStream_Logistics
   cd project-repo
   ```

   composer install
   npm install
   npm run dev

   cp .env.example .env
   php artisan key:generate

php artisan migrate --seed

php artisan serve
