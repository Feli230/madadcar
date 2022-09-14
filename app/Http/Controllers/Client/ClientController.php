<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function breakdown(Type $var = null)
    {
        return view('client/breakdown');
    }

    public function clientmap(Type $var = null)
    {
        return view('client/clientmap');
    }

    public function requestsent(Type $var = null)
    {
        return view('client/requestsent');
    }
}
