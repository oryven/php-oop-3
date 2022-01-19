<!-- /**
     *      
     *      Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo -->
<?php

class Computer {

private $codiceUnivoco;
private $modello;
private $prezzo;
private $marca;

public function __construct($codiceUnivoco, $prezzo)
{
    $this->setCodice($codiceUnivoco);
    $this->setPrezzo($prezzo);
    
}
public function getCodice()
{
    return $this->codiceUnivoco;
}
public function setCodice($codiceUnivoco)
{
    if(strlen($codiceUnivoco) != 6  )
        throw new Exception("codice Univoco non valido");

    $this->codiceUnivoco = $codiceUnivoco;
}
public function getModello()
{
    return $this->modello;
}
public function setModello($modello)
{
    if(strlen($modello) < 3 || strlen($modello) > 20  )
        throw new Exception("modello non valido");
    $this->modello = $modello;
}
public function getMarca()
{
    return $this->marca;
}
public function setMarca($marca)
{
    $this->marca = $marca;
}
public function getPrezzo()
{
    return $this->prezzo;
}
public function setPrezzo($prezzo)
{
    $this->prezzo = $prezzo;
}
public function printMe() {

    echo $this;
}

public function __toString() {

    return "Computer" . ": " . $this -> marca . " " . " " . "Modello: " . $this -> modello . " " .  "Prezzo: " . $this -> prezzo . " " . "Codice Univoco " . " [" . $this -> codiceUnivoco . "]";

}

}
try {
$computer1 = new Computer("365915", "500 €");
    
$computer1 -> setModello("hgddfx");

$computer1 -> setMarca("asus");
    
$computer1 -> printMe();
}catch (Exception $e) {
    echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
}

?>