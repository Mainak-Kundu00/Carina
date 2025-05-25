<?php

namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Users_model;
use App\Models\Product_model;


class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function rings()
    {
        $this->model=model(Product_model::class);
        $data['rings']=$this->model->get_rings();
        return view('rings',$data);
    }

    public function necklaces()
    {
        $this->model=model(Product_model::class);
        $data['necklaces']=$this->model->get_necklaces();
        return view('necklaces',$data);
    }

    public function jewelry()
    {
        $this->model=model(Product_model::class);
        $data['jewelry']=$this->model->get_jewelry();
        //print_r($data);
        return view('jewelry',$data);
    }

    public function sign_up()
    {
        if(session()->get('user_id') == NULL){
                return view('sign_up');
        }else{
            return redirect()->to('');
        }
    }

    public function sign_in()
    {
        if(session()->get('user_id') == NULL){
                return view('sign_in');
        }else{
            return redirect()->to('');
        }
    }

    public function cart()
    {
        $user_id=session()->get('user_id');
       if( $user_id == NULL ){
            return redirect()->to('sign_in');
       }
       $this->cart=model(Product_model::class);
       $data = ['cart_items' => $this->cart->get_cart_items($user_id),
       ];
       return view('cart',$data);
    }

    public function shop_now()
    {
        return view('shop_now');
    }

    public function policy() {
        return view('our_policy');
    }

    public function terms() {
        return view('terms');
    }

    public function Admin_panel() {
        if(session()->get('admin_id') !== NULL){
            $this->model= model(Admin_model::class);
            $products['products']=$this->model->get_product();
            return view('Admin_panel',$products);
        }else{
            return redirect()->to('');
        }
    }

    public function add_product() {
        return view('add_product');
    }

    public function delete_product() {
        return view('delete_product');
    }

    public function ordered_product() {
        return view('ordered_product');
    }

    public function update_product() {
        return view('update_product');
    }

    public function profile() {
        if(session()->get('user_id') !== NULL){
            $this->model=model(Users_model::class);
            
            $user_id=session()->get('user_id');
            $user_data['user_data']=$this->model->get_user($user_id);

            return view('profile',$user_data);
        }else{
            return redirect()->to('');
        }
    }

    public function profile_edit() {
        return view('profile_edit');
    }
}
