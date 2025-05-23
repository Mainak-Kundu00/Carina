<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;
use CodeIgniter\Database\RawSql;

class Product_model extends Model{

    protected $db;
    protected $product;
    protected $cart;

    public function __construct(){
        $this->db = Database::connect();
        $this->product = $this->db->table('product');
        $this->cart = $this->db->table('cart');
        $this->db->connect();
    }

    public function hello(){
        echo "category page";
    }

    public function get_rings(){
        $query= $this->product
                ->where(['product_category'=> 'Ring'])
                ->get()
                ->getresult('array');

        return $query;        
    }

    public function get_quantity($product_data){
        $query= $this->product->select('quantity')
                    ->where('id',$product_data['product_id'])
                    ->get()
                    ->getresult('array');

        return $query[0]['quantity'];
    }

    public function add_product($product_data){
        // echo "product";
        // print_r($product_data);
       $data = [
            'id' => new RawSql('DEFAULT'),
            'user_id' => $product_data['user_id'],
            'quantity' => $product_data['quantity'],
            'product_id' => $product_data['product_id'],
        ];
        $query=$this->product->select('quantity')
                ->where('id',$product_data['product_id'])
                ->get()
                ->getresult('array');
        $check=$this->cart->select('id')
                ->where('product_id',$product_data['product_id'])
                ->get()
                ->getresult('array'); 
        // if($this->cart->insert($data)){

        //     $remaining_quantity=$query[0]['quantity'] - $product_data['quantity'];

        //     $update_quantity=$this->product->set('quantity',$remaining_quantity)
        //                 ->where('id',$product_data['product_id'])
        //                 ->update();

        //     return True;
        // }
        print_r(count($check));
    }
}
