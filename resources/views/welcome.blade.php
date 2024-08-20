<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h2>Selamat Datang {{ $nama_depan }} {{ $nama_belakang }}</h2> 
    <p>Terima Kasih Telah Bergabung Bersama Garuda Cyber Institute</p>

    <p><b>Gender:</b> {{ $gender }}</p>
    <p><b>Nationality:</b> {{ $nationality }}</p>
    <p><b>Languages Spoken:</b> {{ $language }}</p>
    <p><b>Bio:</b> {{ $bio }}</p>

    <p>Kembali ke halaman sebelumnya <a href="/">disini &laquo</a></p>
</body>
</html>
