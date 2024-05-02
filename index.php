<?php 

class Movie{
  public $name;
  public $release;
  public $genre;
}

$Annihilation = new Movie();
$Annihilation->name = 'Annihilation';
$Annihilation->release = '2018';
$Annihilation->genre = 'Sci-fi/Horror';

$Matrix = new Movie();
$Matrix->name = 'Matrix';
$Matrix->release = '1999';
$Matrix->genre = 'Azione/Sci-fi';

var_dump($Annihilation);
var_dump($Matrix);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="css/style.css">
  <title>php-oop-1</title>
</head>
<body>
  <div class="container my-5">
    <h1>Movie</h1>
    
  </div>
  
</body>
</html>