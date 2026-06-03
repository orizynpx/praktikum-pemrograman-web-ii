<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Profile;

class Pages extends BaseController
{
    protected Profile $profileModel;

    public function __construct()
    {
        $this->profileModel = new Profile();
    }
    
    public function index() {
        $data['profile'] = $this->profileModel->getProfileInfo();
        return view('home', $data);
    }
    
    public function profile(): string
    {
        $data['profile'] = $this->profileModel->getProfileInfo();
        return view('profile', $data);
    }
}