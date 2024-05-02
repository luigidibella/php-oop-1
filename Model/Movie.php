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