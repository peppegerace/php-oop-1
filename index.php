<?php

// definisco la classe Movie
class Movie {
  // dichiarazione delle variabili d'istanza
  public $title;
  public $directory;
  public $genre;
  public $releaseYear;

  // costruttore della classe
  public function __construct(string $_title, string $_directory, string $_genre, int $_releaseYear) {
    $this->title = $_title;
    $this->directory = $_directory;
    $this->genre = $_genre;
    $this->releaseYear = $_releaseYear;
  }

  // metodo per stampare le informazioni sul film
  public function printInfoFilm() {
    return "Titolo: " . $this->title."; Regista: ". $this->directory."; Genere: ". $this->genre."; Anno d'uscita: ". $this->releaseYear.".";
  }
}

// Istanza di nuovi oggetti Movie
$movie1 = new Movie("Matrix", "Lana e Lilly Wachowski", "Fantascienza", 1999);
$movie2 = new Movie("Interstellar", "Christopher Nolan", "Fantascienza", 2014);
$movie3 = new Movie("The Departed", "Martin Scorsese", "Gangster/Thriller", 2006);

// stampo a schermo i valori dei film
echo $movie1->printInfoFilm();
echo "<br>";
echo $movie2->printInfoFilm();
echo "<br>";
echo $movie3->printInfoFilm();

?>