<?php 

class PenggunaModel {
    private $table = 'pengguna';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengguna()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenggunaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPengguna($data)
    {
        $query = 'INSERT INTO pengguna VALUES (NULL, :username, :password)';
        
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}