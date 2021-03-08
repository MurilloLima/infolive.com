<?php

namespace App\Http\Controllers\Panel\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransmissaoController extends Controller
{
    public function index()
    {
        return view('panel.user.pages.transmissao.index');
    }
}
