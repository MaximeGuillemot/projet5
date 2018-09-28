<?php

namespace App\DB;

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

    public function getItemsBoosts()
    {
        $q = $this->pdo->prepare('SELECT * FROM ItemBoost');
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        $boosts = [];

        foreach($data as $boost)
        {
            $boosts[] = $boost;
        }

        return $boosts;
    }

    public function getItemsStats()
    {
        $q = $this->pdo->prepare('SELECT * FROM ListStat');
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        $stats = [];

        foreach($data as $stat)
        {
            $stats[] = $stat;
        }

        return $stats;
    }

    public function getItemsReqs()
    {
        $q = $this->pdo->prepare('SELECT * FROM ItemReqs');
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        $reqs = [];

        foreach($data as $req)
        {
            $reqs[] = $req;
        }

        return $reqs;
    }

    public function getItemsEquipPos()
    {
        $q = $this->pdo->prepare('SELECT * FROM ListEquipPosition');
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        $equiPos = [];

        foreach($data as $pos)
        {
            $equiPos[] = $pos;
        }

        return $equiPos;
    }
}