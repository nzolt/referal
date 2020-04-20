<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Model\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Client as ClientRequest;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        return redirect('client/refer');
    }

    public function referGet()
    {
        return view('addclient', ['minDate' => DateHelper::getMinDate()]);
    }

    public function create(ClientRequest $request)
    {
        try {
            $request->validate();
            $client = new Client($request->all());
            $client->save();
            return redirect('clients/refered');
        } catch (\Exception $e){
            $validator = $e->validator;
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
        }
    }

    public function accept($id)
    {
        $client = Client::find($id);
        $client->approved = true;
        $client->save();
        return redirect()->back();
    }

    public function reject($id)
    {
        $client = Client::find($id);
        $client->approved = false;
        $client->save();
        return redirect()->back();
    }
}
