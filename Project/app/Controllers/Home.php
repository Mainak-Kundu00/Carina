<?php

namespace App\Controllers;

use App\Models\Admin_model;

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
        return view('rings');
    }
    public function necklaces()
    {
        return view('necklaces');
    }
    public function jewelry()
    {
        return view('jewelry');
    }
    public function sign_up()
    {
        return view('sign_up');
    }
    public function sign_in()
    {
        return view('sign_in');
    }
    public function cart()
    {
       if(session()->get('user_id') == NULL){
            return redirect()->to('sign_in');
        }
       return view('cart');
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
    public function quantity() {
        return view('quantity');
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
                return view('profile');
        }else{
            return redirect()->to('');
        }
    }
    public function profile_edit() {
        return view('profile_edit');
    }
}
