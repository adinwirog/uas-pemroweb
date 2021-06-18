<?php


class AdminModel {

    private $table = 'admincamat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getByNik($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();

    }

    public function getByUsername($username)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();

    }

    public function updateData($id, $data)
    {
        $query = "UPDATE admincamat SET
                    id = :nik,
                    nama = :nama,
                    jabatan = :jabatan,
                    username = :username,
                    password = :password
                WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }



}