<?php

require_once __DIR__ . '/Model/Movie.php';

$movies = [
  $Annihilation = new Movie('Annihilation', '2018', 'Sci-fi', 'Horror'),

  $Matrix = new Movie('Matrix', '1999', 'Azione', 'Sci-fi'),

  $Interstellar = new Movie('Interstellar', '2014', 'Sci-fi', 'Drammatico'),

  $Alien = new Movie('Alien', '1979', 'Horror', 'Sci-fi'),

  $BladeRunner = new Movie('Blade Runner', '1982', 'Sci-fi', 'Neo-noir'),

  $Inception = new Movie('Inception', '2010', 'Azione', 'Sci-fi'),

  $Arrival = new Movie('Arrival', '2016', 'Drammatico', 'Sci-fi'),

  $District9 = new Movie('District 9', '2009', 'Azione', 'Sci-fi'),
  
  $TheMartian = new Movie('The Martian', '2015', 'Azione', 'Avventura')

];