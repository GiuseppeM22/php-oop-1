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
$titanic -> getDetails('horror', 'Cameron');

$fight_club = new Movie('Fight Club', 'inglese', new Genere('horror','romantico'));
$fight_club -> getDetails('Thriller/Drammatico', 'Fincher');


?>
    <div class="container">
        <h1><?php echo $titanic -> nome ?></h1>
        <p>Lingua: <?php echo $titanic -> lingua ?></p>
        <p>Genere: <?php echo $titanic -> genere ?></p>
        <p>Regista: <?php echo $titanic -> regista ?></p>
    </div>

    <div class="container">
        <h1><?php echo $fight_club -> nome ?></h1>
        <p>Lingua: <?php echo $fight_club -> lingua ?></p>
        <p>Genere: <?php echo $fight_club -> genere ?></p>
        <p>Regista: <?php echo $fight_club -> regista ?></p>
    </div>
