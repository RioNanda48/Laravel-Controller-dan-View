<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <center>
            <div class="card" style="width: 30rem;">
            <img src="IMG/User.jpg" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Perkenalkan nama saya {{ $name }}</h5>
            <p class="card-text">Hobi saya seperti berikut : {{$hobi}}</p>
            <a href="{{ route('index') }}" class="btn btn-outline-primary">home</a>
            <a href="{{ route('uni') }}" class="btn btn-outline-primary">univ</a>
            </div>
            </div>
        </center>
        </div>
    </div>
</body>
</html>