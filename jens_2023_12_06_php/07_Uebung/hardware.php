<?php
/*
Hersteller : Samsung
Größe: 22 Zoll
Farbe: schwarz
Preis: 150,-
Auflösung: 1920 x 1080
*/
class Hardware
{
      
   // Attribute
   public $groesse = "22 Zoll";
   public $farbe = "schwarz";
   public $preis = "150 Euro";
   public $hersteller = "Samsung";

   // Methoden / Funktionen
   function zeigeDatenAn() {
      //echo 'In Methode der Klasse Hardware: $this anschauen\n';
      //print_r($this);
      echo $this->groesse."-".$this->preis;
   }




}
