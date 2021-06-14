<?php

class Movie {
    public $title;
    public $genre;
    public $relase_date;
    public $overview;
    public $id;
    public $original_language;
    public $vote;
    public $poster_path;

    public function howOldIs($relase_date)
    {
        $today = new DateTime();
        $diff = $today->diff(new DateTime($relase_date));
    
        if ($diff->y)
        {
            return 'Age: ' . $diff->y . ' years, ' . $diff->m . ' months';
        }
        elseif ($diff->m)
        {
            return 'Age: ' . $diff->m . ' months, ' . $diff->d . ' days';
        }
        else
        {
            return 'Age: ' . $diff->d . ' days old!';
        }
    }

    public function __construct($id) {
        if (!is_int($id)) exit("L'id deve essere un numero");

        $this->id = $id;
        
    }
    


};


$film_001 = new Movie(001);
$film_002 = new Movie(002);
$film_007 = new Movie(007);

?>