<?php
/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 30/03/2017
 * Time: 12:38
 */

require_once 'src/autoload.php';
use \model\PDOEvenementRepository;
use view\EvenementJsonView;
use controller\EvenementController;

$user = 'user';
$password = 'user';
$database = 'monkeybusiness';
$pdo = null;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $evenementPDORepository = new PDOEvenementRepository($pdo);
    $evenementJsonView = new EvenementJsonView();
    $evenementController = new EvenementController($evenementPDORepository, $evenementJsonView);

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $evenementController->handleFindEvenementById($id);
} catch (Exception $ex) {
    echo "Cannot connect to database";
}

