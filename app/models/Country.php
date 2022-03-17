<?php

class Country
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCountries()
    {
        $stmt = $this->db->query('SELECT * FROM country');
        $result = $this->db->resultSet();
        return $result;
    }

    
   
}
