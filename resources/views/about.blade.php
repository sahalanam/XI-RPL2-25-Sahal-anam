<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1> Halaman About </h1>
    <h2>
        <a href="home"><input type="button" value="home"></a>
        <a href="about"><input type="button" value="about"></a>
        <a href="gallery"><input type="button" value="gallery"></a>
    </h2>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="image/{{ $gambar }}" alt="{{ $nama }}" width="200px">
</body>
</html>