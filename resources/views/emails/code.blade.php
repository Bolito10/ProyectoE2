<!DOCTYPE html>
<html>
<head>
    <title>Hola</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>Tu codigo es : {{ $details['code'] }}</p>
    <a href="http://127.0.0.1:8000/api/download?codigo={{ $details['code'] }}">Dame click para ir al código</a>
    <p>Gracias</p>
</body>
</html>