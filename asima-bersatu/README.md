# Tema WordPress ASIMA Bersatu

Tema portal resmi **ASIMA Bersatu — Aliansi Simalungun Bersatu**.

## Fitur

- Beranda lengkap: ticker berita, slider berita utama, akses cepat, pilar organisasi, layanan, berita, struktur (DPD/DPC/PAC), dewan pakar & pengurus, kanal video, dan CTA.
- Berita diambil otomatis dari RSS `https://nusantaranews-today.com/feed/` (cache 15 menit) dengan fallback ke postingan WordPress lokal.
- Tampilan responsif dengan navigasi mobile dan app bar.
- Pengaturan melalui **Appearance → Customize**: identitas, kontak & pengurus, beranda, warna utama, serta toggle bagian beranda.
- Template halaman dalam: `index.php`, `single.php`, `page.php`, `archive.php`, `search.php`, `404.php`, dan `comments.php` (komentar bertema dengan *threaded comments*).
- Ukuran gambar tambahan `asima-card` (800×500, crop) untuk kartu berita.
- Screenshot tema (`screenshot.png`) dan berkas terjemahan awal (`languages/asima-bersatu.pot`).
- Siap terjemahan (text domain `asima-bersatu`).

## Instalasi

1. Zip folder `asima-bersatu/` (pastikan `style.css` ada di dalamnya).
2. Di WordPress, buka **Appearance → Themes → Add New → Upload Theme**, unggah zip, lalu klik **Install Now** dan **Activate**.
3. Buka **Appearance → Customize** untuk mengisi:
   - **Site Identity**: logo dan nama situs.
   - **Identitas ASIMA**: tagline & logo cadangan.
   - **Kontak & Pengurus**: email, telepon, nomor WhatsApp, alamat.
   - **Beranda ASIMA**: judul/deskripsi hero, URL RSS, label sumber, URL TV, dan bagian yang ditampilkan.
   - **Warna Tema**: warna utama.
4. Buat menu di **Appearance → Menus** dan centang lokasi **Menu Utama**. Bila belum dibuat, tema memakai menu cadangan (Beranda, Berita, Pendaftaran, Pengaduan, LBH, Lacak, Login).
5. Buat halaman dengan slug berikut agar tautan di tema berfungsi:
   `berita`, `pendaftaran-anggota`, `pengaduan`, `lbh`, `lacak-pengaduan`, `lacak-lbh`, `login-anggota`, `dashboard-anggota`, `verifikasi-kta`, `kta`, `surat-tugas`, `sk-anggota`.

## Catatan

- URL RSS, TV, dan kontak dapat diubah dari Customizer tanpa menyunting kode.
- Bila RSS tidak dapat dijangka, tema otomatis menampilkan postingan lokal sebagai pengganti.
- Warna utama yang diubah di Customizer akan mewarnai tombol, badge, dan aksen secara konsisten.
- Ukuran `asima-card` otomatis dipakai untuk gambar baru. Untuk gambar lama, WordPress memakai berkas asli; ukuran ulang bisa dilakukan lewat plugin *Regenerate Thumbnails* bila diperlukan.

## Struktur

```
asima-bersatu/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── index.php
├── page.php
├── single.php
├── archive.php
├── search.php
├── searchform.php
├── comments.php
├── 404.php
├── screenshot.png
├── languages/asima-bersatu.pot
├── assets/js/main.js
├── inc/
│   ├── customizer.php
│   ├── feed.php
│   └── template-tags.php
└── template-parts/
    ├── about.php
    ├── cta.php
    ├── hero.php
    ├── news.php
    ├── page-hero.php
    ├── people.php
    ├── services.php
    ├── structure.php
    ├── content-list.php
    └── tv.php
```
