<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Users_model extends Model{

    protected $db;
    protected $users;
    protected $admin;

    public function __construct(){
        $this->db = Database::connect();
        $this->users = $this->db->table('users');
        $this->admin = $this->db->table('admin');
        $this->db->connect();

    }

    public function hello(){
        echo "IN the model class";
        $query   = $this->users->get();
        foreach($query->getresult('array') as $row){
            echo $row['name'];//gives name from database user table
        }
        
    }

    public function user_login($email,$password){
         $query= $this->users->select('id')
                ->where(['email'=>$email,'password'=>$password])
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

    public function admin_login($email,$password){
         $query= $this->admin->select('id')
                ->where(['email'=>$email,'password'=>$password])
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