<?php
/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 30/03/2017
 * Time: 14:03
 */
namespace model;

interface EvenementRepository
{
    public function findEvenementById($id);
}