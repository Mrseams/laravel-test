<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function listClients()
    {
        $client = client::all();
        return view('clients.index',['clients'=>$client]);
    }
    public function addClients()
    {
        request()->validate(['nom'=>'required']);
        request()->validate(['email'=>'required']);
        $name = request('nom');
        $mail = request('mail');
        $client = new client();
        $client->name = $name;
        $client->email = $mail;
        $client->save();
        return back();
    }
}
