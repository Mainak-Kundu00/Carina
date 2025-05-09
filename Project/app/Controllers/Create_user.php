<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Users_model;


class Create_user extends BaseController{
    protected $model;

    protected $array;
 
    public function index(){

        // $array= [
        //     "name"=>'mainak',
        // ];
        // $this->session->set($array);
        // $name = $this->session->get('name');
        
        $this->model= model(Users_model::class);
        //checking function to know model is connected or not
        //$this->model->hello();
        echo"<br>";

        $user_data=$this->request->getPost();
        //checking to know wherther data is flowing or not 
        print_r($user_data);
        echo"<pre>" . "Form Submitted";
        //. $name;

        $name=$user_data['name'];
        $password=$user_data['password'];
        //echo $name ." and ". $password;
        if($this->model->user_login($name,$password)){
            return view('index');
        }
        else{
            return redirect()->back()->with('invalid email or password', 'message');
        }
        
    }

}

?>