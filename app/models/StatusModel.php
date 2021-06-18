<?php


class StatusModel {

    private $table = 'statuspenerimaan';
    private $db;


    public function __construct() {

        $this->db = new Database;

    }

    public function getData()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

}