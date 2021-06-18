<?php

class PendudukModel
{

    private $table = 'datapenduduk';
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

    public function getData()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function insertData($data,$keberhakan)
    {
        $query = "INSERT INTO datapenduduk
                    VALUES 
                    (:id, :nama, :alamat, :pekerjaan, :penghasilan, :idpenerimaan, :idkeberhakan)";

        $this->db->query($query);

        $this->db->bind('id', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('penghasilan', $data['penghasilan']);
        $this->db->bind('idpenerimaan', $data['penerimaan']);
        $this->db->bind('idkeberhakan', $keberhakan);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteData($id)
    {
        $query = "DELETE FROM datapenduduk WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateData($id, $data, $keberhakan)
    {
        $query = "UPDATE datapenduduk SET
                    id = :nik,
                    nama = :nama,
                    alamat = :alamat,
                    pekerjaan = :pekerjaan,
                    penghasilan = :penghasilan,
                    idpenerimaan = :idpenerimaan,
                    idkeberhakan = :idkeberhakan
                WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('penghasilan', $data['penghasilan']);
        $this->db->bind('idpenerimaan', $data['penerimaan']);
        $this->db->bind('idkeberhakan', $keberhakan);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}