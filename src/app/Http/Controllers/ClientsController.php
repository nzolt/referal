<?php

namespace App\Http\Controllers;

use App\Model\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function refered()
    {
        $clients = Client::whereNull('approved')->paginate(50);

        return view('refered', ['clients' => $clients]);
    }

    public function accepted()
    {
        $clients = Client::where('approved', '=', 1)->paginate(50);

        return view('accepted', ['clients' => $clients]);
    }

    public function rejected()
    {
        $clients = Client::where('approved', '=', 0)->paginate(50);

        return view('rejected', ['clients' => $clients]);
    }
}
