<?php  


class Movie
{
    public $nome;
    public $durata;
    public $genere;
    public $poster;

    function __construct($nome, $durata, Genre $genere, $poster)
    {
        $this->nome = $nome;
        $this->durata = $durata;
        $this->genere = $genere;
        $this->poster = $poster;
    }
}










?>