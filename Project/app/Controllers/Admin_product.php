<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Admin_model;


class Admin_product extends BaseController{
    protected $model;

 
    public function index(){
        $this->model= model(Admin_model::class);
    
        $rules = [
            'product_name' => ['label' => 'Product name','rules' => 'required|alpha_space|max_length[80]'],
            'product_price' => ['label' => 'Product price','rules' => 'required|numeric|greater_than[0]'],
            'product_img' => ['label' => 'Image File','rules' => 'uploaded[product_img]|max_size[product_img,40960]|is_image[product_img]|mime_in[product_img,image/jpeg,image/png]'],
            'product_category' => ['label' => 'Product Category','rules' => 'required'],
            'quantity' => 'required|numeric|greater_than[0]',
          ];
        $product_data=$this->request->getPost(array_keys($rules));

        if (! $this->validateData($product_data, $rules)) {
            return redirect()->back()->withInput();
        }
       
        $img = $this->request->getFile('product_img');

        // print_r($product_data);
         print_r($img);



////////// trying out ////////////////



if ($img->isValid() && ! $img->hasMoved()) {
    $img_name = $img->getRandomName();
    $img->move('uploads/', $img_name);
}
 $product_data['product_img']=$img_name;








/////////////////////

         //$img_path = $img->move(WRITEPATH . 'uploads');
        // $product_data['product_img']=$img_path;
        // print_r($img);
        // print_r($product_data);

     if($this->model->add_product($product_data)){
            //$products['products']=$this->model->get_product();
        // print_r($products[0]['product_img']);
            //print_r($products);
        //print_r(compact('products'));
        // echo "<pre>";
        // print_r($products['products']);
            return redirect()->to('Admin_panel');
        }


          
    }

}

?>