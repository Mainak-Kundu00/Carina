<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;
use CodeIgniter\Database\RawSql;

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

    public function user_login($email,$password){
         $query= $this->users->select('id')
                ->where(['email'=>$email,'password'=>$password])
                ->get()
                ->getresult('array');
        
        //  print_r($query);
        //   echo count($query);
        if(count($query)){
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
    
    public function add_user($user_data){
        //print_r($user_data);
        $data = [
            'id' => new RawSql('DEFAULT'),
            'name' => $user_data['name'],
            'gender' => $user_data['gender'],
            'dob' => $user_data['dob'],
            'address' => $user_data['address'],
            'email' => $user_data['email'],
            'ph_no' => $user_data['ph_no'],
            'password' => $user_data['password'],
        ];
        //print_r($data);
        //checks if the email already exists
        $query= $this->users->select('id')
                ->where(['email'=>$user_data['email']])
                ->get()
                ->getresult('array');

        if(count($query)){
            return False;
        }else if($this->users->insert($data)){
            return True;
        }

    }
}






?>