<?php 

require_once __DIR__ . '/db.php';

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
      <?php foreach($movies as $movie) : ?>
        <div class="col text-center">
          <div class="card mb-3">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
              <h3 class="card-title"><?php echo $movie->name ?></h3>
              <span><?php echo $movie->release ?></span>
              <span><?php echo $movie->getFullGenre() ?></span>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    
  </div>
  
</body>
</html>