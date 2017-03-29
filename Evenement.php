<?php

/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 29/03/2017
 * Time: 15:16
 */
class Evenement
{
    private $naam;
    private $locatie;
    private $klant;

    /**
     * Evenement constructor.
     * @param $naam
     * @param $locatie
     */
    public function __construct($naam, $locatie, $klant)
    {
        $this->naam = $naam;
        $this->locatie = $locatie;
        $this->klant = $klant;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    /**
     * @return mixed
     */
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * @param mixed $locatie
     */
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;
    }

    /**
     * @return mixed
     */
    public function getKlant()
    {
        return $this->klant;
    }

    /**
     * @param mixed $klant
     */
    public function setKlant($klant)
    {
        $this->klant = $klant;
    }


}