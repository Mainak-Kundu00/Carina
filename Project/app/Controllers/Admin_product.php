<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Admin_model;


class Admin_product extends BaseController{
    protected $model;

 
    public function index(){

       // echo "hello";
        $this->model= model(Admin_model::class);
        // //checking function to know model is connected or not
        //  $this->model->hello();
        //  echo"<br>";    
       
        $rules = [
            'product_name' => ['label' => 'Product name','rules' => 'required|alpha_numeric_space|max_length[80]'],
            'product_price' => ['label' => 'Product price','rules' => 'required|numeric|greater_than[0]'],
            'product_img' => ['label' => 'Image File','rules' => 'uploaded[product_img]|max_size[product_img,40960]|is_image[product_img]|mime_in[product_img,image/jpeg,image/png]'],
            'product_category' => ['label' => 'Product Category','rules' => 'required'],
            'quantity' => 'required|numeric|greater_than[0]',
          ];
        $product_data=$this->request->getPost(array_keys($rules));

        if (! $this->validateData($product_data, $rules)) {
            return redirect()->back()->withInput();
        }
       
        //$product_data=$this->request->getPost();
        $img = $this->request->getFile('product_img');

         print_r($product_data);
         print_r($img);
    }

}

?>