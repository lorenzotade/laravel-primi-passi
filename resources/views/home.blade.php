<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css' integrity='sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==' crossorigin='anonymous'/>
  <title>laravel-primi-passi</title>
</head>
<body>
  <div class="container d-flex flex-column align-items-center">
    <nav>
      <ul class="d-flex">
        <li class="list-group-item"><a href="/">Home</a></li>
        <li class="list-group-item"><a href="/secret">Pagina Segreta</a></li>
        <li class="list-group-item"><a href="/about">About</a></li>
      </ul>
    </nav>
    <h1 class="text-center my-5">Hello World</h1>
    <h2 class="text-center mb-4">Questi sono i piaceri di {{ $nome }} {{ $cognome }}</h2>
    <ul class="text-center d-flex flex-column">
      @if (count($gioie) > 0)
        @foreach ($gioie as $gioia)
          <li class="list-group-item">{{ $gioia }}</li>
        @endforeach
      @else
        <p>Mai 'na gioia</p>
      @endif
      
    </ul>
  </div>
  
</body>
</html>