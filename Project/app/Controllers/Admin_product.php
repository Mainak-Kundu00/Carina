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

        if ($img->isValid() && ! $img->hasMoved()) {
            $img_name = $img->getRandomName();
            $img->move('uploads/', $img_name);
        }
        $product_data['product_img']=$img_name;

        if($this->model->add_product($product_data)){
            return redirect()->to('Admin_panel');
        }
          
    }

    public function delete(){
        $this->model= model(Admin_model::class);

        $rules = ['id'=> 'required|integer|greater_than[0]',];
        $id=$this->request->getPost(array_keys($rules));

        if (! $this->validateData($id, $rules)) {
            return redirect()->back()->withInput();
        }
        //print_r($id['id']);
        if($this->model->delete_product($id)){
            $this->session->setFlashdata('delete_product','Product Deletion Succesfull !!!');
            return redirect()->to('Admin_panel');
        }else{
             $this->session->setFlashdata('delete_product','Invalid ID ...');
             return redirect()->back()->withInput();
        }
    }

    public function update(){
        $this->model= model(Admin_model::class);
    
        $rules = [
            'id'=> 'required|integer|greater_than[0]',
            'product_price' => ['label' => 'Product price','rules' => 'required|numeric|greater_than[0]'],
            'quantity' => 'required|numeric|greater_than[0]',
          ];
        $product_data=$this->request->getPost(array_keys($rules));

        if (! $this->validateData($product_data, $rules)) {
            return redirect()->back()->withInput();
        }

        if($this->model->update_product($product_data)){
            $this->session->setFlashdata('update_product','Product Updation Succesfull !!!');
            return redirect()->to('Admin_panel');
        }else{
             $this->session->setFlashdata('update_product','Invalid ID ...');
             return redirect()->back()->withInput();
        }
    }
}

?>