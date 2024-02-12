<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoterController extends Controller
{
    public function viewVoter()
    {
        return view('voters');
    }
}
