# UPDATE Implementasi UTS Desain Web

## Sudah diterapkan

- Halaman utama menggunakan Bootstrap 5.3.3 melalui CDN.
- Template kelompok ganjil memakai `container-sm` dan dua kolom Bootstrap: sidebar navigasi serta area konten.
- Menu sekaligus galeri ditampilkan dalam satu grid berisi enam hidangan, dengan `g-3` dan kolom responsif `row-cols-2`, `row-cols-md-3`, serta `row-cols-lg-4`.
- Form pembayaran Hanif (`2513010779`, dua digit akhir 79, ganjil) sudah menampilkan foto profil. Bentuk awal kotak dan berubah bulat pada viewport maksimal 350px. Foto saat ini masih GIF sementara.
- Form pembayaran memakai class Bootstrap seperti `card`, `form-control`, `form-select`, `alert`, dan `btn`; CSS khusus melengkapi gaya visual dan aturan foto.

## Pekerjaan foto profil berikutnya

- Andre (`2413010662`, dua digit akhir 62, genap): tambahkan foto profil pada form pre-order. Bentuk awal harus bulat dan berubah menjadi kotak pada lebar viewport tepat 250px.
- Hubaib (`2513010757`, dua digit akhir 57, ganjil): tambahkan foto profil pada form booking. Bentuk awal harus kotak dan berubah menjadi bulat pada lebar viewport maksimal 350px.
- Hanif (`2513010779`, dua digit akhir 79, ganjil): ganti GIF sementara dengan foto profil asli jika sudah tersedia; pertahankan bentuk kotak dan aturan bulat pada lebar maksimal 350px.

Gunakan CSS inline di masing-masing file form untuk aturan foto profil dan uji breakpoint sesuai ketentuan NIM. Bootstrap dimuat melalui CDN sehingga memerlukan koneksi internet.