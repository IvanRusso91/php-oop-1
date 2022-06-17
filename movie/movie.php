<?php

/*
create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)

*/


class Movie{
  public $titolo;
  public $regista;
  private $genere;

  public function __construct($_titolo, $_regista){

    $this->titolo = $_titolo;
    $this->regista = $_regista;

  }

  public function setGenere($_genere){
    $this->genere = $_genere;
  }

  public function getGenere(){
    return $this->genere;
  }
}

?>