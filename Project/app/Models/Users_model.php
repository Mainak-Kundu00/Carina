<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Users_model extends Model{

    protected $db;
    protected $users;

    public function __construct(){
        $this->db = Database::connect();
        $this->users = $this->db->table('users');
        $this->db->connect();

    }

    public function hello(){
        echo "IN the model class";
        $query   = $this->users->get();
        foreach($query->getresult('array') as $row){
            echo $row['name'];//gives name from database user table
        }
        
    }

    public function user_login($name,$password){
         $query= $this->users->select('id')
                ->where(['name'=>$name,'password'=>$password])
                ->get()
                ->getresult('array');
        
        //  print_r($query);
        //   echo count($query);
        if(count($query)){
            return True;
        }
        else{
            return False;
        }
    }

}






?>