<?php

namespace App\Http\Controllers\Panel\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('panel.admin.index');
    }
}
