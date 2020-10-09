<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class Program_Studi_Model {

    private $table = 'prodi';

    public function __construct() {
        $this->db =& $db;
    }

    Public function get() {
        $db = \Config\Database::connect();
        return $this->db->table($this->table)->get();
    
    }
}