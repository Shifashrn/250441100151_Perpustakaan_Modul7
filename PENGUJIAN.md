# Hasil Pengujian di Production (Vercel)

URL aplikasi: https://ISI-ALAMAT-VERCELMU.vercel.app

| No | Role | Skenario | Hasil yang Diharapkan | Hasil Aktual |
|---|---|---|---|---|
| 1 | Belum login | Membuka URL utama aplikasi | Halaman aplikasi tampil tanpa pesan galat | |
| 2 | Belum login | Membuka /peminjaman/1 | Dialihkan ke halaman login | |
| 3 | Admin | Login dengan password baru | Berhasil masuk | |
| 4 | Admin | Login dengan password `password` | Login ditolak | |
| 5 | Admin | Menambah buku berisi NIM | Tampil di daftar dan di Table Editor Supabase | |
| 6 | Admin | Mengubah lalu menghapus buku | Perubahan dan penghapusan berhasil | |
| 7 | Siswa | Membuka daftar buku | Tombol Tambah, Ubah, Hapus tidak tampil | |
| 8 | Siswa | Membuka /buku/create | 403 Forbidden | |
| 9 | Siswa | Peminjaman milik sendiri | 200, data tampil | |
| 10 | Siswa | Peminjaman milik siswa lain | 403 Forbidden | |
| 11 | Petugas | Peminjaman siswa mana pun | 200, data tampil | |
| 12 | Semua | Membuka /.env | 404 atau 403 | |
| 13 | Semua | Membuka /halaman-tidak-ada | Halaman 404 umum tanpa jejak kode | |