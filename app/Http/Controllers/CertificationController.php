<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function certification()
    {
        return view('pages.certification');
    }
}
