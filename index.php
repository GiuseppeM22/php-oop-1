<?php 

class Genere{
    public $tipo;
    public $associati;
}

class Movie{
    public $nome;
    public $genere;
    public $lingua;
    public $durata;
    public $cast;
    public $regista;

    function __construct($nome, $lingua, Genere $genere)
    {
        $this -> nome = $nome;
        $this -> lingua = $lingua;
        if($lingua == 'italiano'){
            $this -> lingua .= ' = lingua di defoult';
        }else{
            $this -> lingua .= ' = lingua non originale';
        }
    }

    public function getDetails($genere, $regista){
        $this -> genere = $genere;
        $this -> regista = $regista;
    }
}

$titanic = new Movie('Titanic', 'italiano', new Genere('horror','romantico'));
$titanic -> getDetails('horror', 'Spilberg');

$fight_club = new Movie('Fight Club', 'inglese', new Genere('horror','romantico'));

echo 'nome film: ', $titanic -> nome . "<br/>", 'lingua: ', $titanic -> lingua . "<br/>", 'genere: ',  $titanic -> genere . "<br/>", 'regista: ', $titanic -> regista . "<br/>";
echo 'nome film: ', $fight_club -> nome . "<br/>", 'lingua: ', $fight_club -> lingua . "<br/>", 'genere: ',  $fight_club -> genere . "<br/>", 'regista: ', $fight_club -> regista;


?>