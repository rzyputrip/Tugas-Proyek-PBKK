<!DOCTYPE html> <!-- Deklarasi tipe dokumen HTML5 -->
<html lang="en"> <!-- Mulai elemen HTML dengan bahasa Inggris -->
<head> <!-- Mulai kepala dokumen HTML -->
    <meta charset="UTF-8"> <!-- Penetapan karakter set UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Pengaturan tampilan responsif -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Penetapan mode kompatibilitas untuk Internet Explorer -->
    <title>Register</title> <!-- Judul halaman web yang akan ditampilkan di tab peramban -->
</head> <!-- Akhir kepala dokumen HTML -->
<body> <!-- Mulai tubuh dokumen HTML -->
    <h1>
        Halaman Biodata <!-- Teks judul level 1 -->
    </h1>
    <form action="/submit" method="POST"> <!-- Mulai elemen formulir -->
        @csrf <!-- Penambahan token CSRF (Cross-Site Request Forgery) -->
        <label>Nama Depan</label> <br> <!-- Label input nama depan -->
        <input type="text" name="fname" > <br> <!-- Input teks untuk nama depan -->
        <label>Nama Belakang</label> <br> <!-- Label input nama belakang -->
        <input type="text" name="lname" > <br><br> <!-- Input teks untuk nama belakang -->

        <input type="submit" value="Sign Up"> <!-- Tombol Submit untuk mengirimkan formulir -->
    </form> <!-- Akhir elemen formulir -->
</body> <!-- Akhir tubuh dokumen HTML -->
</html> <!-- Akhir elemen HTML -->
