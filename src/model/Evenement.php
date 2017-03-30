<?php

namespace model;
/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 30/03/2017
 * Time: 13:48
 */
class Evenement
{
    private $id;
    private $naam;
    private $locatie;

    public function __construct($id, $naam, $locatie)
    {
        $this->id = $id;
        $this->naam = $naam;
        $this->locatie = $locatie;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;
    }

    public function getLocatie()
    {
        return $this->locatie;
    }
}