# ASIMA Bersatu — Tema WordPress

Tema WordPress klasik untuk **ASIMA Bersatu (Aliansi Simalungun Bersatu)**, lengkap dengan pratinjau statis yang bisa dibuka langsung di HP tanpa WordPress.

## 🔗 Alamat permanen

Situs utama: **https://asimabersatu.surge.sh/** (Surge, gratis). Halaman depan mengikuti pola asli `asima.kabsml.my.id` (ticker berita, hero slider, layanan, berita RSS, struktur DPD/DPC/PAC, dewan pakar, TV, footer 3 kolom). Halaman bergaya APMOI tersedia sebagai halaman tambahan, mulai dari `/tentang.html`.

Cadangan permanen: **https://fernandoalbert.github.io/asima-bersatu/** (GitHub Pages, gratis, aktif selama repo ada).

Repo: https://github.com/fernandoalbert/asima-bersatu — Pages disajikan dari folder `docs/` pada branch `main`.

Halaman tambahan: Tentang, Program, Berita (versi asosiasi), Daftar Anggota, Persyaratan, Kontak, Pendaftaran, Artikel, Detail Anggota, dan Kebijakan Privasi. Portofolio tema lama tetap ada di `/preview/`, portal anggota di `/portal/`.

**Portal Anggota** (model portal asosiasi, gratis tanpa backend): https://fernandoalbert.github.io/asima-bersatu/portal/ — berisi kartu anggota digital demo, sertifikat, pengaduan, LBH, berita, pengurus, dan FAQ.

## 📦 Isi repo

| Path | Keterangan |
|---|---|
| `asima-bersatu/` | Sumber tema WordPress (30 file) |
| `asima-bersatu.zip` | Paket tema siap unggah ke WordPress |
| `docs/` | Situs statis GitHub Pages (11 halaman), tanpa tombol unduh WordPress |
| `docs/preview/` | Pratinjau tema versi sebelumnya |
| `preview/` | Sumber pratinjau statis (dipakai lokal/tunnel) |
| `PANDUAN-HP.txt` | Panduan singkat pemasangan dari HP |

## 🚀 Cara pakai

### 1. Lihat situs di HP
Buka alamat GitHub Pages di atas di browser HP. Tidak ada tombol unduh WordPress di situs. Halaman pendaftaran memakai WhatsApp, jadi tidak perlu server/backend.

### 2. Pasang di WordPress
1. Login ke dashboard WordPress → **Tampilan → Tema → Tambah Baru → Unggah Tema**.
2. Unggah `asima-bersatu.zip`, lalu **Pasang** dan **Aktifkan**.
3. Atur identitas, warna, logo, dan kontak lewat **Tampilan → Sesuaikan (Customizer)**.
4. Buat halaman baru berjudul **Home** dan jadikan sebagai halaman depan (**Pengaturan → Membaca**).

### 3. Berita otomatis
Tema mengambil berita dari RSS `https://nusantaranews-today.com/feed/`. Jika RSS tidak tersedia, tema memakai konten bawaan (fallback).

## 🛠 Pengembangan lokal

```bash
python3 -m http.server 8899 --bind 127.0.0.1
# buka http://127.0.0.1:8899/preview/
```

Validasi:
```bash
find asima-bersatu -name '*.php' -exec php -l {} \;
node --check asima-bersatu/assets/js/main.js
```

## 📄 Lisensi

Dibuat khusus untuk ASIMA Bersatu. Silakan dipakai dan dimodifikasi untuk keperluan organisasi.
