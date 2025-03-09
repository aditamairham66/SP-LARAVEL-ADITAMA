# 🚀 Laravel & Express.js API

## 📌 Pendahuluan
Proyek ini mencakup dua API:
- **Laravel**: API CRUD untuk pelanggan dan pesanan.
- **Express.js**: API untuk perhitungan diskon dan notifikasi pesanan.

---

## ⚡ Instalasi Laravel

### **1. Clone Repository**
```sh
git clone https://github.com/username/repository.git
cd repository
```

### **2. Install Dependencies**
```sh
composer install
```

### **3. Buat File `.env`**
```sh
cp .env.example .env
```

### **4. Konfigurasi Database**
Edit `.env` dan sesuaikan dengan database yang digunakan:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### **5. Generate Key & Migrasi Database**
```sh
php artisan key:generate
php artisan migrate --seed
```

### **6. Jalankan Server Laravel**
```sh
php artisan serve
```
Akses API di: `http://127.0.0.1:8000/api`

---

## ⚡ Instalasi Express.js

### **1. Masuk ke Folder `express-server`**
```sh
cd express-server
```

### **2. Install Dependencies**
```sh
npm install
```

### **3. Jalankan Server Express.js**
```sh
node server.js
```
Akses API di: `http://127.0.0.1:3000`

---

## 📌 Endpoint API

### **Laravel API**
| Method | Endpoint             | Deskripsi               |
|--------|----------------------|-------------------------|
| GET    | `/api/customers`     | Ambil daftar pelanggan  |
| POST   | `/api/customers`     | Tambah pelanggan       |
| GET    | `/api/customers/{id}` | Ambil detail pelanggan |
| GET    | `/api/orders`        | Ambil daftar pesanan   |
| POST   | `/api/orders`        | Tambah pesanan baru    |
| GET    | `/api/orders/{id}`   | Ambil detail pesanan   |

### **Express.js API**
| Method | Endpoint              | Deskripsi                       |
|--------|-----------------------|---------------------------------|
| POST   | `/calculate-discount` | Hitung diskon berdasarkan harga |
| POST   | `/notify-order`       | Cetak log notifikasi pesanan   |

---

## 📌 Uji API dengan Curl atau Postman

### **1️⃣ Cek Daftar Pelanggan**
```sh
curl -X GET http://127.0.0.1:8000/api/customers
```

### **2️⃣ Tambah Pelanggan Baru**
```sh
curl -X POST http://127.0.0.1:8000/api/customers \
-H "Content-Type: application/json" \
-d '{"name": "John Doe", "email": "john@example.com", "phone": "08123456789"}'
```

### **3️⃣ Hitung Diskon dengan Express.js**
```sh
curl -X POST http://127.0.0.1:3000/calculate-discount \
-H "Content-Type: application/json" \
-d '{"customer_id": 1, "total_price": 500000}'
```

### **4️⃣ Kirim Notifikasi Pesanan ke Express.js**
```sh
curl -X POST http://127.0.0.1:3000/notify-order \
-H "Content-Type: application/json" \
-d '{"order_id": 1}'
```

---