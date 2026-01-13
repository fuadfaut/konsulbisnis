# KonsulBisnis v2 - WordPress Theme

![Version](https://img.shields.io/badge/version-1.0-blue)
![License](https://img.shields.io/badge/license-GPL--2.0+-green)
![WordPress](https://img.shields.io/badge/WordPress-6.0+-blueviolet)

**KonsulBisnis v2** adalah tema WordPress profesional yang dikembangkan untuk PT Kami Bantu Konsultan. Tema ini dikonversi dari proyek Next.js dan dioptimalkan untuk website jasa konsultasi bisnis, akuntansi, perpajakan, dan IT.

---

## 📋 Daftar Isi

- [Fitur Utama](#-fitur-utama)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Konfigurasi Tema](#-konfigurasi-tema)
- [Custom Post Types](#-custom-post-types)
- [Struktur File](#-struktur-file)
- [Customizer Options](#-customizer-options)
- [Template Halaman](#-template-halaman)
- [Block Patterns](#-block-patterns)
- [Pengembangan](#-pengembangan)
- [Lisensi](#-lisensi)

---

## ✨ Fitur Utama

### Desain Modern
- 🎨 Desain profesional dengan Tailwind CSS
- 📱 Fully responsive (mobile-first design)
- ⚡ Animasi scroll yang halus
- 🌙 Efek visual modern (gradient, blur, shadow)

### Fungsionalitas
- 📝 3 Custom Post Types (Layanan, Tim, Klien)
- 🎯 Halaman depan dinamis
- 📞 Integrasi WhatsApp untuk form kontak
- 🧭 Navigasi dengan dropdown submenu
- 🔧 Pengaturan lengkap via WordPress Customizer

### Performa
- 🚀 Optimized untuk kecepatan loading
- 🎭 Lazy loading untuk animasi
- 📦 CSS yang sudah dikompilasi (tidak perlu build process)

---

## 💻 Persyaratan Sistem

- WordPress 6.0 atau lebih baru
- PHP 7.4 atau lebih baru
- MySQL 5.7 atau lebih baru

---

## 📥 Instalasi

### Metode 1: Via WordPress Admin

1. Download file tema dalam format `.zip`
2. Login ke WordPress Admin
3. Navigasi ke **Appearance → Themes**
4. Klik **Add New → Upload Theme**
5. Pilih file `.zip` dan klik **Install Now**
6. Setelah instalasi selesai, klik **Activate**

### Metode 2: Via FTP

1. Extract file tema
2. Upload folder `wel` (atau nama folder tema) ke `/wp-content/themes/`
3. Login ke WordPress Admin
4. Navigasi ke **Appearance → Themes**
5. Aktifkan tema **KonsulBisnis v2**

---

## ⚙️ Konfigurasi Tema

### Langkah Awal Setelah Aktivasi

#### 1. Upload Logo
- Navigasi ke **Appearance → Customize → Site Identity**
- Upload logo perusahaan Anda
- Sesuaikan ukuran jika diperlukan

#### 2. Setup Menu Navigasi
- Navigasi ke **Appearance → Menus**
- Buat menu baru dengan nama "Primary Menu"
- Tambahkan halaman/link yang diinginkan
- Pilih lokasi **Primary Menu** dan simpan

#### 3. Buat Halaman Utama
- Buat halaman baru (Pages → Add New)
- Navigasi ke **Settings → Reading**
- Pilih **A static page** untuk "Your homepage displays"
- Pilih halaman yang sudah dibuat sebagai "Homepage"

#### 4. Buat Halaman Sistemasi Bisnis
- Buat halaman baru dengan judul "Sistemasi Bisnis"
- Pada bagian **Page Attributes**, pilih Template: **Sistemasi Bisnis**
- Publish halaman

---

## 📦 Custom Post Types

Tema ini menyediakan 3 Custom Post Types untuk mengelola konten dinamis:

### 1. Layanan (Services)

Untuk menampilkan daftar layanan perusahaan.

**Lokasi di Admin:** Dashboard → Layanan

**Cara Menambah:**
1. Klik **Layanan → Tambah Baru**
2. Isi judul layanan (contoh: "Jasa Perpajakan")
3. Isi deskripsi layanan di editor
4. Publish

**Tips:** Layanan dengan kata "IT" atau "Sistem" di judulnya akan tampil sebagai kartu spesial di halaman depan.

### 2. Tim (Team)

Untuk menampilkan profil anggota tim.

**Lokasi di Admin:** Dashboard → Tim

**Cara Menambah:**
1. Klik **Tim → Tambah Baru**
2. Isi nama anggota tim sebagai judul
3. Isi bio/deskripsi di editor
4. Upload foto di Featured Image
5. Isi detail tambahan:
   - **Jabatan/Posisi** (contoh: "CEO", "Tax Consultant")
   - **Kredensial** (contoh: "CPA", "BKP")
6. Publish

### 3. Klien (Clients)

Untuk menampilkan daftar klien dan proyek.

**Lokasi di Admin:** Dashboard → Klien

**Cara Menambah:**
1. Klik **Klien → Tambah Baru**
2. Isi nama perusahaan/instansi sebagai judul
3. Isi deskripsi kerjasama di editor
4. Upload logo klien di Featured Image
5. Isi detail tambahan:
   - **Deskripsi Proyek**
   - **Kategori** (contoh: "BUMN", "Pemerintah", "Swasta")
6. Publish

---

## 📁 Struktur File

```
konsulbisnis-theme/
├── assets/
│   ├── css/
│   │   └── main.css          # CSS tambahan
│   └── images/               # Folder gambar
├── inc/
│   └── patterns.php          # Block Patterns
├── footer.php                # Template footer
├── front-page.php            # Template halaman depan
├── functions.php             # Fungsi tema & CPT
├── header.php                # Template header
├── home.php                  # Template blog home
├── index.php                 # Template fallback
├── page.php                  # Template halaman
├── page-sistemasi-bisnis.php # Template Sistemasi Bisnis
├── single.php                # Template single post
├── style.css                 # Stylesheet utama + info tema
├── theme-header.css          # CSS header khusus
└── README.md                 # Dokumentasi ini
```

---

## 🎛️ Customizer Options

Akses via **Appearance → Customize**

### Header Top Bar
| Pengaturan | Deskripsi |
|------------|-----------|
| Nomor Telepon | Nomor telepon di top bar |
| Email | Alamat email di top bar |
| Link Instagram | URL profil Instagram |
| Nomor WhatsApp | Nomor WA untuk form kontak (format: 6281xxx) |

### Homepage Hero
| Pengaturan | Deskripsi |
|------------|-----------|
| Label Badge | Tagline di badge hero |
| Judul Utama | Teks judul baris 1 |
| Judul Highlight | Teks judul baris 2 (gradient) |
| Deskripsi Hero | Paragraf deskripsi |
| Gambar Hero | Upload gambar hero |
| Tombol Utama | Teks, URL, dan tampilkan/sembunyikan |
| Tombol Kedua | Teks, URL, dan tampilkan/sembunyikan |

### Homepage Texts
| Pengaturan | Deskripsi |
|------------|-----------|
| Judul Bagian Layanan | Heading untuk section layanan |
| Deskripsi Bagian Layanan | Paragraf deskripsi layanan |

### About Section
| Pengaturan | Deskripsi |
|------------|-----------|
| Judul | Heading "Tentang Kami" |
| Deskripsi Paragraf 1 | Paragraf pertama |
| Deskripsi Paragraf 2 | Paragraf kedua |
| Tampilkan Section | Toggle tampil/sembunyikan |
| Statistik | Jumlah klien, proyek, pengalaman, tim |

### Contact Section Texts
| Pengaturan | Deskripsi |
|------------|-----------|
| Judul Kontak | Heading section kontak |
| Deskripsi Kontak | Paragraf deskripsi |

### Footer Settings
| Pengaturan | Deskripsi |
|------------|-----------|
| Deskripsi Perusahaan | Paragraf tentang perusahaan |
| Alamat Lengkap | Alamat kantor |
| No. Telepon 1 & 2 | Nomor telepon |
| Email Footer | Alamat email |
| Teks Copyright | Teks hak cipta |

### Sistemasi Bisnis Page
| Pengaturan | Deskripsi |
|------------|-----------|
| Hero Badge | Label badge di hero |
| Hero Description | Deskripsi di hero |
| Problem Section Title | Judul section masalah |
| Problem 1-3 | Judul dan deskripsi tiap problem |
| Services Section | Judul dan deskripsi layanan IT |
| Projects Section | Judul dan deskripsi proyek |
| Contact Title & Desc | Teks section kontak |

---

## 📄 Template Halaman

### 1. Default Template (page.php)
Template standar untuk halaman biasa.

### 2. Sistemasi Bisnis (page-sistemasi-bisnis.php)
Template khusus untuk halaman layanan IT dengan:
- Hero section gelap
- Section problem/masalah bisnis
- Grid layanan IT
- Daftar proyek klien
- Form kontak WhatsApp

**Cara Menggunakan:**
1. Buat halaman baru dengan judul "Sistemasi Bisnis"
2. Atau pilih template "Sistemasi Bisnis" di Page Attributes

### 3. Front Page (front-page.php)
Template halaman depan dengan:
- Hero section dengan animasi
- Marquee logo partner
- Grid layanan
- Section tentang kami dengan statistik
- Daftar klien
- Form kontak WhatsApp

---

## 🧩 Block Patterns

Tema ini menyertakan Block Patterns siap pakai:

### Mengakses Block Patterns
1. Edit halaman/post
2. Klik tombol "+" untuk menambah block
3. Pilih tab "Patterns"
4. Pilih kategori "KonsulBisnis"

### Patterns Tersedia
1. **Hero Section** - Section hero dengan judul dan tombol CTA
2. **Services Section** - Grid layanan dengan 3 kolom
3. **Call to Action** - Section CTA dengan background gelap

---

## 🔧 Pengembangan

### CSS (Tailwind)
Tema menggunakan Tailwind CSS yang sudah dikompilasi di `style.css`. Tidak diperlukan build process untuk penggunaan normal.

### JavaScript
Script JavaScript untuk interaktivitas (mobile menu, animasi scroll, form WhatsApp) terletak di `footer.php`.

### Menambah Animasi Scroll
Tambahkan class berikut pada elemen:
```html
<!-- Fade in dari bawah -->
<div class="animate-on-scroll">...</div>

<!-- Fade in dari kiri -->
<div class="animate-fade-in-left">...</div>

<!-- Fade in dari kanan -->
<div class="animate-fade-in-right">...</div>

<!-- Scale in -->
<div class="animate-scale-in">...</div>
```

### Delay Animasi
Tambahkan class delay:
```html
<div class="animate-on-scroll delay-100">...</div>
<div class="animate-on-scroll delay-200">...</div>
<!-- delay-100 sampai delay-800 tersedia -->
```

### Integrasi WhatsApp
Form kontak otomatis mengirim pesan ke WhatsApp. Nomor WhatsApp dikonfigurasi via Customizer.

Format nomor: `6281346242556` (tanpa + atau spasi)

---

## 🛠️ Troubleshooting

### Menu Tidak Muncul
1. Pastikan sudah membuat menu di **Appearance → Menus**
2. Pastikan sudah memilih lokasi "Primary Menu"
3. Simpan perubahan

### Logo Tidak Muncul
1. Navigasi ke **Appearance → Customize → Site Identity**
2. Upload logo
3. Klik "Publish"

### Animasi Tidak Berjalan
Pastikan JavaScript tidak diblokir. Periksa console browser untuk error.

### Form WhatsApp Tidak Berfungsi
1. Periksa nomor WhatsApp di Customizer
2. Format yang benar: `6281346242556`
3. Tidak menggunakan tanda + atau spasi

---

## 📞 Dukungan

Untuk pertanyaan atau dukungan teknis:
- **Email:** KonsultanKamiBantu@gmail.com
- **Website:** https://konsulbisnis.com

---

## 📜 Lisensi

Tema ini dilisensikan di bawah [GNU General Public License v2.0 or later](http://www.gnu.org/licenses/gpl-2.0.html).

---

## 🙏 Kredit

- **Pengembang:** Kami Bantu Konsultan
- **Framework CSS:** Tailwind CSS
- **Font:** Inter (Google Fonts)
- **Icons:** Lucide Icons (SVG inline)

---

**© 2024 PT. Kami Bantu Konsultan. Hak Cipta Dilindungi Undang-Undang.**