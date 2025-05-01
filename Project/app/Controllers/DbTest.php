<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class DbTest extends BaseController {
    public function index() {
      /*  //$db = db_connect();
        $db = Database::connect();
        // echo "<pre> abc";
        // print_r($db->connect());
        // exit;
        //if ($db->connID) 
        if ($db->connect()){
            echo "✅ Database connection successful!";
        } else {
            echo "❌ Database connection failed!";
        }*/
        try {
            $db = Database::connect('tests');
            
            if (!$db->connID) {
                throw new \Exception("❌ Database connection failed!");
            }

            echo "✅ Database connection successful!";
        } catch (\Throwable $e) {
            echo "❌ Error: " . $e->getMessage();
            echo "<pre>";
            print_r($e);
        }


    }
}