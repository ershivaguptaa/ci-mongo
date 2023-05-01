<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function sign_up() {
       return view('sign_up');
    }

    public function save_user() {
       $postData = $this->input->post();
       print_r($postData);
    }
}
