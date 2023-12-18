<?php

namespace App\Controllers;

class AboutController extends BaseController {
    public function index() {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }

        return view('about');
    }
}