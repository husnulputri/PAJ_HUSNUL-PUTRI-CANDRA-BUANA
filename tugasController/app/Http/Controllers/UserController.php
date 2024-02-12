<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUserAdmin()
    {
        return view('useradmin');
    }

    public function viewUserStudent()
    {
        return view('userstudent');
    }

    public function viewUserTeacher()
    {
        return view('userteacher');
    }
}
