# UAS-Pemrograman-Web

*Bagian 1: Client-side Programming (Bobot: 30%)
- ___

*Bagian 2 - Server side programing 30%
- Penggunanaan metode POST, pada file index.php (20%)
- Pembuatan sebuah objek PHP berbasis OOP yang memiliki 4 metode, pada file process.php (10%)

*Bagian 3 - Database management 20%
- Buatlah sebuah tabel pada database MySQL (5%)
Jawaban:
1. Masuk ke direktori dimana databasei disimpan
2. Masukan perintah "mysql -u username -p"
3. Masukan QUERY
   
CREATE TABLE akun (
    name VARCHAR(100),
    email VARCHAR(100),
    sex VARCHAR(10)
);

- Buatlah konfigurasi koneksi ke database MySQL pada file PHP, pada file process.php (5%)
- Lakukan manipulasi data pada tabel database dengan menggunakan query SQL, pada file process.php (10%)

*Bagian 4: State Management (Bobot: 20%)
- ___

*Bagian Bonus: Hosting Aplikasi Website (Bobot: 20%)
Berikut adalah jawaban dari pertanyaan yang ada.

- (5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
Jawaban:
1. Buka situs web 000webhost, kemudian buat akun baru atau masuk jika Anda sudah memiliki akun.
2. Setelah masuk, tambahkan situs web baru melalui dasbor pengguna.
3. Pilih jenis hosting yang Gratis.
4. Atur nama subdomain yang disediakan oleh 000webhost.
5. Upload file aplikasi web Anda menggunakan File Manager atau melalui FTP.
6. Konfigurasi database menggunakan alat yang disediakan.
- (5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
Jawaban:
000webhost.com, karena menyediakan database untuk website yang mana diperlukan pada tugas besar ini dan juga mudah untuk melakukan konfigurasi.
- (5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
Jawaban:
Salah satunya dengan menggunakan "mysqli_real_escape_string" ketika ingin memasukan isi dari form kedalam variabel yang akan dikirim ke database, sehingga dapat menghindari SQL injection dalam isi form.
- (5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
Jawaban:
_____
  
