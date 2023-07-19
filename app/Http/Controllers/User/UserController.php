<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return 'this is home page from userController';
    }

    public function about()
    {
        return 'this is about page from userController';
    }

    public function service()
    {
        return 'this is service page from userController';
    }
}
