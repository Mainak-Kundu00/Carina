<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Product extends BaseController{

    public function quantity() {
        if(session()->get('user_id') != NULL){
            $product_data['data']=$this->request->getGet(['product_id']);
            //print_r($product_data);
                return view('quantity',$product_data);
        }else{
            return redirect()->to('');
        }
    }

    public function product_data(){
        echo "hi";
    }
}