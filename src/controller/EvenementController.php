<?php

/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 30/03/2017
 * Time: 14:23
 */
namespace controller;

use model\EvenementRepository;
use view\View;

class EvenementController
{
    private $evenementRepository;
    private $view;

    public function __construct(EvenementRepository $evenementRepository, View $view)
    {
        $this->evenementRepository = $evenementRepository;
        $this->view = $view;
    }

    public function handleFindEvenementById($id = null) {
        $evenement = $this->evenementRepository->findEvenementById($id);
        $this->view->show(['evenement' => $evenement]);
    }

}