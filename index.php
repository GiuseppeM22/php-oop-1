<?php 

class Movie{
    public $nome;
    public $genere;
    public $lingua;
    public $durata;
    public $cast;
    public $regista;

    function __construct($nome, $lingua)
    {
        $this -> nome = $nome;
        $this -> lingua = $lingua;
        if($lingua == 'italiano'){
            $this -> lingua .= ' = lingua di defoult';
        }else{
            $this -> lingua .= ' = lingua non originale';
        }
    }

}

$titanic = new Movie('Titanic', 'italiano');
echo $titanic -> nome . "<br/>", $titanic -> lingua ;
// $titanic -> regista = "Spilberg";

?>