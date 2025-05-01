<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class DbTest extends BaseController {
    public function __construct(){
        parent::__construct();
        $db = \Config\Database::connect();
        if (!$db->connID) {
            die("❌ Database connection failed!");
        } else {
            echo "✅ Database connected!";
        }
    
    }
    public function index() {
        echo "abc";
    }
}