<?php

/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 29/03/2017
 * Time: 15:35
 */
class Klant
{
 private $voornaam;
 private $achternaam;

    /**
     * Klant constructor.
     * @param $voornaam
     * @param $achternaam
     */
    public function __construct($voornaam, $achternaam)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
    }

    /**
     * @return mixed
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * @param mixed $voornaam
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return mixed
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * @param mixed $achternaam
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
    }


}