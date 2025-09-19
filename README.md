# Dashboard-Rental-Alat-Berat-CodeIgniter-2

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-orange.svg)
![PHP](https://img.shields.io/badge/PHP-7.x-blue.svg)
![MySQL](https://img.shields.io/badge/MySQL-5.x-green.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-purple.svg)

Aplikasi dashboard admin untuk sistem rental alat berat yang dibangun menggunakan framework CodeIgniter dengan template SB Admin 2.

## Fitur

- Dashboard dengan statistik real-time
- Grafik pendapatan dan status alat berat
- Tabel transaksi terbaru
- Tabel alat berat yang sedang disewa
- Sidebar navigasi yang terstruktur
- Topbar dengan notifikasi dan user menu
- Desain responsif untuk berbagai ukuran layar
- Modal konfirmasi logout

## Struktur Direktori
<img width="186" height="244" alt="image" src="https://github.com/user-attachments/assets/37412e93-bb1b-4b4e-be0a-569d88c1493a" />


## Struktur Database

Tabel: `admin`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id_admin | INT(11) | Primary Key, Auto Increment |
| username | VARCHAR(50) | Username untuk login |
| password | VARCHAR(255) | Password terenkripsi |
| nama_admin | VARCHAR(100) | Nama lengkap admin |
| email | VARCHAR(100) | Email admin |
| level | ENUM('admin', 'superadmin') | Level akses admin |
| status | ENUM('aktif', 'nonaktif') | Status akun admin |

Tabel: `alat_berat`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id_alat | INT(11) | Primary Key, Auto Increment |
| nama_alat | VARCHAR(100) | Nama alat berat |
| merk | VARCHAR(50) | Merek alat berat |
| jenis | VARCHAR(50) | Jenis alat berat |
| plat_nomor | VARCHAR(15) | Plat nomor alat berat |
| tahun | INT(4) | Tahun pembuatan |
| harga_sewa | DECIMAL(10,2) | Harga sewa per hari |
| status | ENUM('tersedia', 'disewa', 'perbaikan') | Status alat berat |

Tabel: `customer`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id_customer | INT(11) | Primary Key, Auto Increment |
| nama_customer | VARCHAR(100) | Nama customer |
| alamat | TEXT | Alamat customer |
| no_hp | VARCHAR(15) | Nomor HP customer |
| no_ktp | VARCHAR(20) | Nomor KTP customer |
| email | VARCHAR(100) | Email customer |

Tabel: `transaksi`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id_transaksi | INT(11) | Primary Key, Auto Increment |
| id_customer | INT(11) | Foreign Key ke customer.id_customer |
| id_alat | INT(11) | Foreign Key ke alat_berat.id_alat |
| id_admin | INT(11) | Foreign Key ke admin.id_admin |
| tanggal_sewa | DATE | Tanggal mulai sewa |
| tanggal_kembali | DATE | Tanggal selesai sewa |
| total_bayar | DECIMAL(10,2) | Total pembayaran |
| status | ENUM('proses', 'selesai', 'batal') | Status transaksi |

## Screenshot Aplikasi
- Dashboard
<img width="827" height="440" alt="image" src="https://github.com/user-attachments/assets/fbd472c0-a5ca-409d-b61b-439410d4445e" />

- Halamnan Login
<img width="827" height="440" alt="image" src="https://github.com/user-attachments/assets/098fda98-0230-440a-90f7-d82cb62c750b" />

---
**luqmanaru**

Ini adalah proyek pengembangan web lanjut untuk memenuhi tugas kuliah Pemrograman Web Lanjut
