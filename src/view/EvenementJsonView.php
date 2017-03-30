<?php
/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 30/03/2017
 * Time: 14:19
 */

namespace view;


class EvenementJsonView implements View
{
    public function show(array $data)
    {
        // TODO: Implement show() method.
        header('Content-Type: application/json');

        if (isset($data['evenement'])) {
            $evenement = $data['evenement'];
            echo json_encode(['id' => $evenement->getId(), 'naam' => $evenement->getNaam(), 'locatie' => $evenement->getLocatie()]);
        } else {
            echo '{}';
        }
    }
}