# ⚡ Maba Quiz – Battle Royale Elimination System

[![PHP](https://img.shields.io/badge/PHP-%3E%3D%207.4-777BB4?style=flat&logo=php&logoColor=white)](#)
[![MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?style=flat&logo=mysql&logoColor=white)](#)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#)

Platform kuis interaktif berbasis web untuk kegiatan orientasi mahasiswa baru (MABA) dengan mekanisme **sistem eliminasi (survival mode)**. Peserta yang salah menjawab soal akan langsung tereliminasi dari permainan hingga tersisa sang juara bertahan.

---

## 🎮 Mekanisme Permainan (Elimination Rules)

1. **Lobby Masuk**: Peserta mendaftar dengan identitas/NIM dan menunggu sesi kuis dibuka dari panel admin.
2. **Hitung Mundur Serentak**: Setiap babak soal memiliki batas waktu pengerjaan real-time.
3. **Mekanisme Eliminasi**: 
   * ✅ **Jawaban Benar**: Lolos ke putaran/soal berikutnya.
   * ❌ **Jawaban Salah / Waktu Habis**: Status langsung berubah menjadi *ELIMINATED* (hanya bisa menonton/spectator mode).
4. **Leaderboard & Pemenang**: Menampilkan daftar peserta yang bertahan sampai babak akhir beserta perolehan skor kecepatan menjawab.

---

## ✨ Fitur Utama

* **Panel Admin Kontrol**:
  * Kontrol mulai/jeda soal secara serentak.
  * Manajemen bank soal, opsi jawaban, dan kunci jawaban.
  * Reset sesi permainan dan rekap data peserta.
* **Ruang Tunggu (Lobby)**: Sinkronisasi status kesiapan peserta sebelum kuis dimulai.
* **Sistem Penilaian Cepat**: Perhitungan skor dinamis berdasarkan kebenaran jawaban dan sisa waktu menjawab.
* **Tampilan Interaktif**: Antarmuka responsif dan ramah perangkat mobile untuk memudahkan peserta mengakses lewat smartphone.

---

## 🛠️ Tech Stack

* **Backend**: PHP Native / Modular API
* **Database**: MySQL / MariaDB
* **Frontend**: HTML5, CSS3, JavaScript (AJAX Polling / Fetch API)
* **Web Server**: AMPPS / XAMPP / Laragon

---

## 📂 Struktur File

```text
maba-quiz/
├── admin/          # Panel kontrol admin, kelola soal, dan monitoring kuis
├── assets/         # Resource CSS, JavaScript, suara (SFX), dan gambar
├── config/         # Pengaturan koneksi database dan konstanta sesi
├── process/        # Endpoint logika backend (cek jawaban, eliminasi, polling)
├── index.php       # Halaman login/registrasi peserta
├── lobby.php       # Ruang tunggu peserta sebelum kuis dimulai
├── quiz.php        # Halaman pengerjaan soal kuis eliminasi
├── result.php      # Halaman leaderboard akhir dan status pemenang
└── README.md
