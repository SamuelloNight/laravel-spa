<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VueController extends Controller
{
    public function view()
    {
        return view('vue');
    }
}
