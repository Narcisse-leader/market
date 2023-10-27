<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendreController extends Controller
{
    //
    public function vente()
    {
        return view('recycle.vendre');
    }
}
