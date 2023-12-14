<?php
class Model
{
    public function save()
    {

        //echo get_class($this);

        $tableName = match (get_class($this)) {
            "User" => "users",
            "Article" => "articles",
            "Invoice" => "invoices",
        };

        // Die im Objekt befindlich Attributes können ermittelt werden
        // print_r(get_object_vars($this));

        $objektVariablen = get_object_vars($this);

        $keys = "";
        $values = "";



        for ($i = 0; $i < count($objektVariablen); $i++) {
            $key = array_keys($objektVariablen)[$i];
            $value = $objektVariablen[$key];
            echo $key . " - " . $value . "\n";

            if ($i < count($objektVariablen) - 1) {
                $keys .= $key . ",";
                $values .= '"' . $value . '","';
            } else {
                $keys .= $key;
                $values .=  $value . '"';
            }
        }



        $db = new PDO("mysql:host=localhost;dbname=test", "root", "root");
        $sqlBefehl = "INSERT INTO " . $tableName . " ($keys) VALUES ($values)";
        echo $sqlBefehl . "\n";
        $stmt = $db->query($sqlBefehl);


    }
}
