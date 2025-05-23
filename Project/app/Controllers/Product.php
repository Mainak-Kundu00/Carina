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
            return redirect()->to('rings');
        }
    }
}