<?php 

class Movie{
  public $name;
  public $release;
  public $genre_1;
  public $genre_2;

  function __construct($_name, $_release, $_genre_1, $_genre_2){
    $this->name = $_name;
    $this->release = $_release;
    $this->genre_1 = $_genre_1;
    $this->genre_2 = $_genre_2;
  }

  public function getFullGenre(){
    return $this->genre_1 . '/' . $this->genre_2;
  }
}

$Annihilation = new Movie('Annihilation', '2018', 'Sci-fi', 'Horror');

$Matrix = new Movie('Matrix', '1999', 'Azione', 'Sci-fi');

var_dump($Annihilation);
var_dump($Matrix);
var_dump($Annihilation->getFullGenre());
var_dump($Matrix->getFullGenre());

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
  <div class="container my-5 text-center">
    <h1>Movie</h1>
    <div class="row row-cols-3">
      <div class="col">
        <div class="card text-start" style="width: 18rem;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h3 class="card-title">name</h3>
            <span>release</span>
            <span>genre</span>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
</body>
</html>