<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product_model;

class Product extends BaseController{

    protected $model;

    public function quantity() {
        if(session()->get('user_id') != NULL){
            $product_data['data']=$this->request->getGet(['product_id']);
            //print_r($product_data);
                return view('quantity',$product_data);
        }else{
            return redirect()->to('sign_in');
        }
    }

    public function product_data(){
        $this->model= model(Product_model::class);

        $rules = [
           'quantity' => 'required|numeric|greater_than[0]',
           'product_id' => 'required',
           'user_id' => 'required',
          ];
        $product_data=$this->request->getPost(array_keys($rules));

        if (! $this->validateData($product_data, $rules)) {
            return redirect()->back()->withInput();
        }else if($this->model->get_quantity($product_data) < $product_data['quantity']){
            $this->session->setFlashdata('Out_of_stock','Quantity Exceeds available stock');
            return redirect()->back()->withInput();
        }

        if($this->model->add_product($product_data)){
            return redirect()->to('cart');
        }else{
            $this->session->setFlashdata('Error','Something Went Wrong !!! Please try again later');
            return redirect()->back()->withInput();
        }
    }

    public function Delete(){
        $this->model= model(Product_model::class);

        $product_id=$this->request->getGet(['product_id']);
        //print_r($product_id);

        $user_id=session()->get('user_id');
        if($this->model->Delete_product($product_id,$user_id)){
            return redirect()->to('cart');
        }else{
            $this->session->setFlashdata('Delete',"Can't Delete now!!! Please try again later ......");
            return redirect()->to('cart');
        }
    }

    public function Search(){
        $this->model= model(Product_model::class);

        $query=$this->request->getGet();

       foreach($query as $q){
        $search=explode(" ",$q);
       }
    //    print_r($search);
       
       foreach($search as $key){

        if(strtolower($key) === 'rings' or strtolower($key) === 'ring'){
            return redirect()->to('rings');
        }
        else if(strtolower($key) === 'necklaces' or strtolower($key) === 'necklace'){
            return redirect()->to('necklaces');
        }
        else if(strtolower($key) === 'Jewelry set' or strtolower($key) === 'Jewelry' or strtolower($key) === 'set'){
            return redirect()->to('jewelry');
        }
        else{
            return view('page_not_found');
        }
       }
    }
}