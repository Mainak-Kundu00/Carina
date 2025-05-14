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

    public function add_user(){
       // echo "sign up";
        $this->model=model(Users_model::class);

        $rules = [
            'name' => 'required|alpha_space|max_length[40]',
            'gender' => 'required',
            'dob' => ['label' => 'Date of Birth','rules' => 'required'],
            'address' => 'required|max_length[255]',
            'email' => 'required|valid_email',
            'ph_no' => ['label' => 'Phone number','rules' => 'required|numeric|exact_length[10]'],
            'password' => 'required|max_length[12]|min_length[6]',
            'Confirm_password' => ['label' => 'Confirm password','rules' => 'required|matches[password]'],
        ];
        $user_data=$this->request->getPost(array_keys($rules));
        if (! $this->validateData($user_data, $rules)) {
            return redirect()->back()->withInput();
        }
        //print_r($user_data);
        
        if($this->model->add_user($user_data)){
            //echo "Data added";
            $this->session->setFlashdata('account_create','Account Created Succesfully');            
        }else{
           // echo "Not added";
           $this->session->setFlashdata('account_create_failed','Email Already Exists!!! Please Use Different Email...');
           return redirect()->back()->withInput();
        }
        return view('sign_up');

    }

    public function login(){
        //echo "login";
        $this->model=model(Users_model::class);

        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|max_length[12]|min_length[6]',
        ];
        $logged_user=$this->request->getPost(array_keys($rules));

        if (! $this->validateData($logged_user, $rules)) {
            return redirect()->back()->withInput();
        }

        //print_r($logged_user);

        $email=$logged_user['email'];
        $password=$logged_user['password'];
        $admin_id=$this->model->admin_login($email,$password);
        $user_id=$this->model->user_login($email,$password);
        
        if($admin_id){
            //echo "Admin logged in";
             if(session()->get('admin_id') !== NULL){
                return redirect()->to('Admin_panel');
            }  
            $this->session->set('admin_id',$admin_id);
            return view('Admin_panel');
        }
        else if($user_id){
            //echo "admin not logged in but user is";
            if(session()->get('user_id') !== NULL){
                return redirect()->to('');
            }             
            $this->session->set('user_id',$user_id);
            return view('index');
        }
        else{
            //echo "nobody logged in";
            $this->session->setFlashdata('no_user','No record found. Please sign up first!!');
            return redirect()->back()->withInput();
        }
    }

    public function logout(){
        //echo"logout";
        $this->session->destroy();
        return redirect()->to('');
    }

}

?>