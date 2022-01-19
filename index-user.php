<!-- /**
     * 
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
     */ -->

     <?php

class User {

    private $userName;
    private $password;
    private $age;

    public function __construct($userName, $password, $age)
    {
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setAge($age);
    }
    public function getUserName()
    {
        return $this->userName;
    }
    public function setUserName($userName)
    {
        if(strlen($userName)< 3 || strlen($userName)> 16)
            throw new Exception("username non valido");

        $this->userName = $userName;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        if (ctype_alnum($password)) {
            throw new Exception("password non valida, perché non ha neanche un carattere speciale");
        }

        $this->password = $password;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        if (!is_numeric($age))
                throw new Exception("L'età deve essere un valore numerico");

        $this->age = $age;
    }
    public function printMe() {

        echo $this;
    }

    public function __toString() {

        return $this -> getUserName() . ": " . $this -> getPassword() . " " . $this-> getAge();

    }

}

try {
    $u = new User("paolo", "aha5h?fd", 35);
    $u -> printMe();
} catch (Exception $e) {
    echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
}

?>