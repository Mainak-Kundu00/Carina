<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;
use PhpParser\Node\Stmt\TryCatch;

class DbTest extends BaseController
{

    protected $db;
    protected $builder;

    public function __construct()
    {
        try {
            $this->db = Database::connect();
            $this->builder = $this->db->table('users');
            $this->db->connect();
             echo "✅ Database connected!";


            //code...
        } catch (\Throwable $th) {
            //throw $th;
            die("❌ Database connection failed!");
        }

    }

    public function index()
    {
        // normal query
        $result = $this->db->query("SELECT * FROM users")->getResultArray();
        echo"Using Normal Query >>>>>>>>> ";
        print_r($result);
        echo "<br>";

        
        // using query builder
        $result1 = $this->builder->get()->getResultArray();
        echo"Using Builder >>>>>>>>> ";
        print_r($result1);


    }
}