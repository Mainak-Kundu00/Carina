<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Users_model;


class Create_user extends BaseController{
    protected $model;

    public function index(){
        $this->model= model(Users_model::class);
        //checking function to know model is connected or not
        $this->model->hello();
        echo"<br>";

        $user_data=$this->request->getPost();
        //checking to know wherther data is flowing or not 
        print_r($user_data);
        echo"<pre>" . "Form Submitted";
        
    }

}

?>