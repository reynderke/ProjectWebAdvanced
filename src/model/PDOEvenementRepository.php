<?php
/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 30/03/2017
 * Time: 14:05
 */

namespace model;


class PDOEvenementRepository implements EvenementRepository
{
    private $conn = null;

    public function __construct(\PDO $conn)
    {
        $this->connection = $conn;
    }

    public function findEvenementById($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM evenementen WHERE id=?');
            $statement = $this->bindParam(1, $id, \pdo::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                return new Evenement($results[0]['id'], $results[0]['naam'], $results[0]['locatie']);
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return null;
        }
    }
}