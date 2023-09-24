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
            <img src="IMG/logo.jpg" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">{{ $name }}</h5>
            <p class="card-text">{{ $name }} Adalah tempat saya kuliah yang sudah masuk semester ke-5 <br> di {{$name}}
            saya bertemu dengan banyak kawan-kawan saya entah itu yang berasal dari daerah saya maupun luar daerah</p>
            <a href="{{ route('profile') }}" class="btn btn-outline-primary">Profile</a>
            <a href="{{ route('index') }}" class="btn btn-outline-primary">home</a>
            </div>
            </div>
            </center>
        </div>
    </div>
</body>
</html>