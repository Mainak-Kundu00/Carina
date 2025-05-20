<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;
use CodeIgniter\Database\RawSql;

class Product_model extends Model{

    protected $db;
    protected $product;

    public function __construct(){
        $this->db = Database::connect();
        $this->product = $this->db->table('product');
        $this->db->connect();
    }
    public function hello(){
        echo "category page";
    }
}
