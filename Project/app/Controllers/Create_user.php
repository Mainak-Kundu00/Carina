<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Create_user extends BaseController{
    public function index(){
        $user_data=$this->request->getPost();
        print_r($user_data);
        echo"<pre>" . "Form Submitted";
    }

}

?>