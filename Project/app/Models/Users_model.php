<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Users_model extends Model{

    protected $db;
    protected $users;
    protected $admin;
    protected $array;

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
            // $array=[
            //     "id" => $query[0]['id'],
            // ];
            // //print_r($array);
            // return True;
            // $this->session->set($array);
            // $user_id = $this->session->get('id');          
            // print_r($user_id);  
            return $query[0]['id'];
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
        
        //print_r($query);
         //print_r($query[0]['id']);
          //echo count($query);
        if(count($query)){
            return $query[0]['id'];
        }
        else{
            return False;
        }
    }    
}






?>