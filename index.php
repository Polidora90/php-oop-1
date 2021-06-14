<?php

class Movie {
    public $id;
    public $title;
    public $genre;
    public $relase_date;
    public $overview;

    public function howOldIs($relase_date)
    {
        $today = new DateTime();
        $diff = $today->diff(new DateTime($relase_date));
    
        if ($diff->y)
        {
            return 'Età: ' . $diff->y . ' anni, ' . $diff->m . ' mesi';
        }
        elseif ($diff->m)
        {
            return 'Età: ' . $diff->m . ' mesi, ' . $diff->d . ' giorni';
        }
        else
        {
            return 'Età: ' . $diff->d . ' giorni.';
        }
    }

    public function __construct($id, $title, $genre, $relase_date) {
        if (!is_int($id)) exit("L'id deve essere un numero");

        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->relase_date = $relase_date;
    }

    public function renderMovie() {
        echo "<h1>" . $this->title . "</h1>";
        echo "<h2>" . $this->genre . "</h2>";
        echo "<p>" . $this->overview . "</p>";
        echo "<h3>" . $this->howOldIs($this->relase_date) . "</h3>";
        echo "<p> Data di uscita:" . $this->relase_date . "</p>";

    }
    


};


$movie_001 = new Movie(001, "Ritorno al futuro", "Fantascienza", "1985-07-03");
$movie_001->overview = "Marty McFly è stato catapultato per errore nel 1955, grazie alla macchina del tempo ideata dal suo amico scienziato Doc. Non avendo più carburante per poter tornare nel futuro si rivolge alla versione più giovane di Doc, che nonostante l'incredulità iniziale si farà in quattro per aiutarlo. Ma nel 1955 non è solo Doc ad essere più giovane, Marty infatti si imbatte casualmente nei suoi genitori, all'epoca teenager, ma l'incontro aggiungerà altri problemi.";

$movie_002 = new Movie(002, "Ciao Brother", "Commedia", "2016-06-09");
$movie_002->overview = "Angelo, un quarantenne simpatico e un po' truffaldino, si ritrova a dover fuggire a Los Angeles dopo aver venduto dei quadri falsi. Giunto in California senza un soldo e con le carte di credito bloccate, si arrangia come può, dormendo anche per strada. Un giorno, scopre che un ricco imprenditore italoamericano è morto, lasciando un'enorme eredità al figlio George, e nota che il caro estinto gli somiglia moltissimo. Così, Angelo si presenta a casa di George, sostenendo (senza fornire alcuna prova) di essere suo fratello. Tra gag, colpi di scena e situazioni folli, i due fratelli acquisiti finiranno per diventare amici per la pelle.";

$movie_007 = new Movie(007, "The Secrets of 007", "Azione", "1997-12-04");

$movie_001->renderMovie();
$movie_002->renderMovie();
$movie_007->renderMovie();


?>
