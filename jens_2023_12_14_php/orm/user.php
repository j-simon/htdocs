<?php

// orm
class Elternklasse
{
    public $username;
    public $email;
    public $password;

    public function insert()
    {
        // User speichern
        $db = new PDO("mysql:host=localhost;dbname=test", "root", "root");
        $sqlBefehl = "INSERT INTO users (username,email,password) VALUES('$this->username','$this->email','$this->password')";
        //echo $sqlBefehl;
        $stmt = $db->query($sqlBefehl);
    }
}

class User extends Elternklasse
{
}
