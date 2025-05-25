<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;
use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\BaseBuilder;


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

    public function get_rings(){
        $query= $this->product
                ->where(['product_category'=> 'Ring'])
                ->get()
                ->getresult('array');

        return $query;        
    }

    public function get_jewelry(){
        $query= $this->product
                ->where(['product_category'=> 'Jewelry Set'])
                ->get()
                ->getresult('array');

        return $query;        
    }

    public function get_necklaces(){
        $query= $this->product
                ->where(['product_category'=> 'Necklace'])
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

        $check=$this->cart
                ->where('product_id',$product_data['product_id'])
                ->where('user_id',$product_data['user_id'])
                ->get()
                ->getresult('array'); 
              
        $remaining_quantity=$query[0]['quantity'] - $product_data['quantity'];

        //print_r($check);
        if($check){
            $new_quantity=$check[0]['quantity'] + $product_data['quantity'];

            $this->cart->set('quantity',$new_quantity)
                        ->where('product_id',$product_data['product_id'])
                        ->update();

            $this->product->set('quantity',$remaining_quantity)
                        ->where('id',$product_data['product_id'])
                        ->update();
            
            return True;
        }else if($this->cart->insert($data)){

            $this->product->set('quantity',$remaining_quantity)
                        ->where('id',$product_data['product_id'])
                        ->update();

            return True;
        }
        
        return False;
        
    }

    public function get_cart_items($user_id){
        $query = $this->cart
                        ->select('cart.product_id,cart.quantity, product.product_name, product.product_price, product.product_img')
                        ->join('product', 'cart.product_id = product.id')
                        ->where('cart.user_id', $user_id)
                        ->get()
                        ->getResultArray();

        return $query;
    }

    public function Delete_product($id,$user_id){
        //print_r($id);
        $quantity = $this->cart->select('quantity')
                               ->where('product_id',$id['product_id'])
                               ->where('user_id',$user_id)
                               ->get()
                               ->getResult('array');

        $product_quantity=$this->product->select('quantity')
                ->where('id',$id['product_id'])
                ->get()
                ->getresult('array');

        $new_quantity = $quantity[0]['quantity']+$product_quantity[0]['quantity'];

        $query=$this->cart
                    ->where('product_id', $id['product_id'])
                    ->where('user_id',$user_id)
                    ->delete();
        if($query){
            $this->product->set('quantity',$new_quantity)
                        ->where('id',$id['product_id'])
                        ->update();
            
            return True;
        }else{
            return False;
        }
    }

}
