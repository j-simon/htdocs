<?php

class Hardware
{

   // Attribute / properties
   protected $preis;
   protected $groesse;
   protected $farbe;
   protected $hersteller;


   /**
    * Get the value of preis
    */
   public function getPreis()
   {
      return $this->preis;
   }

   /**
    * Set the value of preis
    *
    * @return  self
    */
   public function setPreis($preis) // 0
   {
      if ($preis === 0) {
         echo "Lieber Kollege, meinst Du das ernst? Der Preis soll 0 Euro sein?";
         return; // Der Preis wird nicht geändert!
      } else
         $this->preis = $preis; // 0

      return $this;
   }

   /**
    * Get the value of groesse
    */
   public function getGroesse()
   {
      return $this->groesse;
   }

   /**
    * Set the value of groesse
    *
    * @return  self
    */
   public function setGroesse($groesse)
   {
      $this->groesse = $groesse;

      return $this;
   }

   /**
    * Get the value of farbe
    */
   public function getFarbe()
   {
      return $this->farbe;
   }

   /**
    * Set the value of farbe
    *
    * @return  self
    */
   public function setFarbe($farbe)
   {
      $this->farbe = $farbe;

      return $this;
   }


   /**
    * Get the value of hersteller
    */
   public function getHersteller()
   {
      return $this->hersteller;
   }

   /**
    * Set the value of hersteller
    *
    * @return  self
    */
   public function setHersteller($hersteller)
   {
      $this->hersteller = $hersteller;

      return $this;
   }
}
