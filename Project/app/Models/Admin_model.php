<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;
use CodeIgniter\Database\RawSql;

class Admin_model extends Model{

    protected $db;
    protected $product;

    public function __construct(){
        $this->db = Database::connect();
        $this->product = $this->db->table('product');
        $this->db->connect();

    }

    public function add_product($product_data){
        //print_r($product_data);
        $data = [
            'id' => new RawSql('DEFAULT'),
            'product_name' => $product_data['product_name'],
            'product_price' => $product_data['product_price'],
            'product_img' => $product_data['product_img'],
            'product_category' => $product_data['product_category'],
            'quantity' => $product_data['quantity'],
        ];
        //print_r($data);
        if($this->product->insert($data)){
            return True;
        }
    } 

    public function get_product(){
        $query=$this->product->get()
                ->getresult('array');

        return $query;
    }

    public function delete_product($id){
        $check=$this->product->select('id')
                ->where('id',$id['id'])
                ->get()
                ->getresult('array');
       

        if(count($check)){
             $query=$this->product->where('id', $id['id'])->delete();
             return True;
        }else{
            return False;
        }
    }
    public function update_product($product_data){
        $check=$this->product->select('id')
                ->where('id',$product_data['id'])
                ->get()
                ->getresult('array');
       

        if(count($check)){
            $data = [
                        'product_price' => $product_data['product_price'],
                        'quantity'  => $product_data['quantity'],
                    ];
             $query=$this->product
                        ->where('id',$product_data['id'])
                        ->update($data);
             return True;
        }else{
            return False;
        }
    }
    

}






?>