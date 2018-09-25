<?php

namespace App\DB;

use App\Item;
use \PDO;

class ItemsDB
{
    private $pdo;

    public function __construct(DBConnect $db)
    {
        if(!empty($db))
        {
            $this->pdo = $db->getPDO();
        }
    }

    public function countItems()
    {
        $q = $this->pdo->query('SELECT COUNT(*) FROM Item');
        return $q->fetchColumn();
    }

    public function getAllItems($class)
    {
        $q = $this->pdo->prepare('SELECT * FROM Item ORDER BY name');
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        $items = [];

        foreach($data as $item)
        {
            $items[] = new $class($item);
        }

        return $items;
    }
}