<?php

// definisco la classe Production
class Production {
  // attributi comuni per le classi Movie e TvSerie
  public $title;
  public $directory;
  public $genre; 

  // costruttore della classe Production
  public function __construct(string $_title, string $_directory, string $_genre) {
    $this->title = $_title;
    $this->directory = $_directory;
    $this->genre = $_genre;
  }

  // metodo per stampare le informazioni comuni
  public function printInfo() {
    return "Titolo: " . $this->title . "<br>" . "Regista: " .  $this->directory . "<br>" . "Genere: " . $this->genre;
  }
}

// definisco la classe Movie
class Movie extends Production {
  // dichiarazione delle variabili d'istanza
  public $published_year;
  public $running_time;

  // costruttore della classe Movie
  public function __construct(string $_title, string $_director, string $_genre, int $_published_year, int $_running_time) {
    parent::__construct($_title, $_director, $_genre);
    echo $commonInfo;
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
  }

  // metodo per stampare le informazioni specifiche per il film
  public function printInfo() {
    $commonInfo = parent::printInfo();
    echo $commonInfo;
    echo "<br>" . "Anno di pubblicazione: " . $this->published_year . "<br>";
    echo "Durata film: " . $this->running_time . " minuti<br>";
  }
}

// definisco la classe TvSerie
class TvSerie extends Production {
  // attributi unici per TvSerie
  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  // costruttore della classe TvSerie
  public function __construct(string $_title, string $_director, string $_genre, int $_aired_from_year, int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons) {
    parent::__construct($_title, $_director, $_genre);
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
  }

  // metodo per stampare le informazioni specifiche per la serie TV
  public function printInfo() {
    $commonInfo = parent::printInfo();
    echo $commonInfo;
    echo "<br>" . "Anno di messa in onda del primo episodio: " . $this->aired_from_year . "<br>";
    echo "Anno di messa in onda dell'ultimo episodio: " . $this->aired_to_year . "<br>";
    echo "Numero di Episodi: " . $this->number_of_episodes . "<br>";
    echo "Numero di Stagioni: " . $this->number_of_seasons . "<br>";
  }
}

// Istanza di nuovi oggetti Movie
$movie1 = new Movie("Matrix", "Lana e Lilly Wachowski", "Fantascienza", 1999, 136);
$movie2 = new Movie("Interstellar", "Christopher Nolan", "Fantascienza", 2014, 169);
$movie3 = new Movie("The Departed", "Martin Scorsese", "Gangster/Thriller", 2006, 151);

// Istanza di nuovi oggetti TvSerie
$tvSerie1 = new TvSerie("Breaking Bad", "Vince Gilligan", "Crime/Drama", 2008, 2013, 62, 5);
$tvSerie2 = new TvSerie("Mindhunter", "David Fincher", "Thriller/Drama", 2017, 2019, 19, 2);
$tvSerie3 = new TvSerie("The Office", "Greg Daniels", "Sitcom/Falso Documentario", 2005, 2013, 204, 9);

// stampo a schermo i valori di film e serie tv
echo $movie1->printInfo();
echo "<br><br>";
echo $movie2->printInfo();
echo "<br><br>";
echo $movie3->printInfo();
echo "<br><br>";
echo $tvSerie1->printInfo();
echo "<br><br>";
echo $tvSerie2->printInfo();
echo "<br><br>";
echo $tvSerie3->printInfo();

?>