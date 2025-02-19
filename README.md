# 🎛️ Laravel Filament Admin Panel

Proyek ini menggunakan **Laravel + Filament** untuk membangun sistem manajemen **stok, pelanggan, dan pemasok**.  
Dilengkapi dengan fitur CRUD melalui **Filament Admin Panel**.

---

## 🚀 Fitur

✅ **Manajemen Stok** 📦  
✅ **Manajemen Pelanggan** 🧑‍💼  
✅ **Manajemen Pemasok** 🏢  
✅ **Filament Admin Panel** 🖥️  
✅ **Autentikasi & Hak Akses** 🔑  
✅ **Dashboard Statistik** 📊  
✅ **CRUD Mudah dengan Filament**  

---

## 🔧 Instalasi & Konfigurasi

### 1️⃣ **Clone Repository**
```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
2️⃣ Install Dependencies
composer install
npm install

3️⃣ Copy & Konfigurasi .env
cp .env.example .env
Edit .env untuk konfigurasi database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_database
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Generate Key
php artisan key:generate

5️⃣ Migrasi Database & Seeder
Edit
php artisan migrate --seed

6️⃣ Install & Konfigurasi Filament
composer require filament/filament
php artisan make:filament-user
Saat diminta, buat user admin dengan:
Email: admin@example.com
Password: password

7️⃣ Jalankan Server
php artisan serve
Akses aplikasi di browser:
🔗 Aplikasi utama → http://127.0.0.1:8000
🔗 Filament Admin → http://127.0.0.1:8000/admin

🛠️ Cara Penggunaan
🔹 Login ke Filament
Buka Filament Admin di http://127.0.0.1:8000/admin.
Masukkan Email dan Password dari make:filament-user.
Setelah login, Anda bisa mengelola data stok, pelanggan, dan pemasok.
🔹 Menambahkan Data
Pilih menu Stock Transactions, Customers, atau Suppliers.
Klik Create untuk menambah data baru.
🔹 Mengedit & Menghapus Data
Klik pada data yang ingin diubah.
Gunakan tombol Edit atau Delete sesuai kebutuhan.
