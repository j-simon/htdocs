<?php
// innen
class Schuh
{
    // attribute / properties
    protected $farbe = 'schwarz'; // string
    protected $groesse = 8; // integer
    protected $material = 'Leder'; // string 
    protected $typ = 'Halbschuh'; // string

    // Getter
    public function getFarbe()
    {
        return $this->farbe;
    }

    /**
     * Get the value of groesse
     */
    public function getGroesse()
    {
        return $this->groesse;
    }

    function getMaterial()
    {
        return $this->material;
    }

    /**
     * Get the value of typ
     */
    public function getTyp()
    {
        return $this->typ;
    }

    // Setter
    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;
    }


    public function setMaterial($material)
    {
        $this->material = $material;
    }


    /**
     * Set the value of groesse
     *
     * @return  self
     */
    public function setGroesse($groesse)
    {
        $this->groesse = $groesse;

         return $this->groesse;
    }

    /**
     * Set the value of typ
     *
     * @return  self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

         return $this->typ;
    }
}
