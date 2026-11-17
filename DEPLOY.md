# Konfigurasi Deployment (Vercel + Supabase)

Aplikasi: Sistem Perpustakaan Digital (Laravel)

## Environment variable di Vercel

Nilai rahasia TIDAK ditulis di sini (disimpan hanya di dashboard Vercel).

| Variabel | Nilai | Keterangan |
|---|---|---|
| APP_NAME | PerpusSpace | Nama aplikasi |
| APP_ENV | production | Mode production |
| APP_KEY | (rahasia) | Kunci enkripsi aplikasi |
| APP_DEBUG | false | Jejak kode error disembunyikan |
| APP_URL | https://perpustakaan-250441100151.vercel.app | Alamat aplikasi |
| LOG_CHANNEL | stderr | Log tampil di Vercel Logs |
| DB_CONNECTION | pgsql | Driver database PostgreSQL |
| DB_HOST | (host pooler Supabase) | Alamat pooler Supabase |
| DB_PORT | 6543 | Transaction pooler |
| DB_DATABASE | postgres | Nama database |
| DB_USERNAME | (postgres.<ref>) | Pengguna database |
| DB_PASSWORD | (rahasia) | Password database |
| DB_SSLMODE | require | Koneksi terenkripsi |
| SESSION_DRIVER | database | Sesi disimpan di database |