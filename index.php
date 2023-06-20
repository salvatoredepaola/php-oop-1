<?php  

class Movie
{
    public $nome;
    public $durata;
    public $genere;

    function __construct($nome, $durata, Genere $genere)
    {
        $this->nome = $nome;
        $this->durata = $durata;
        $this->genere = $genere;
    }
}

class Genere 
{
    public $horror;
    public $animazione;
    public $famiglia;
    
    public function __construct($horror, $animazione, $famiglia) 
    {
        $this->horror = $horror;
        $this->animazione = $animazione;
        $this->famiglia = $famiglia;
    }
}




$movie = new Movie("nome film", 2, new Genere("horror", "animazione", "famiglia"));

var_dump($movie);



?>