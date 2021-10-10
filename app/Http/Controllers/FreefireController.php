<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freefire;

class FreefireController extends Controller
{
    function addData(Request $req)
    {
        $filename = $req->file('logo')->getClientOriginalName();
        $req->file('logo')->storeAs('public/', $filename);

        $freefire = new Freefire;
        $freefire -> name = $req->name;
        $freefire -> phone = $req->phone;
        $freefire -> team = $req->team;
        $freefire -> logo = $filename;
        $freefire -> id1 = $req->id1;
        $freefire -> id2 = $req->id2;
        $freefire -> id3 = $req->id3;
        $freefire -> id4 = $req->id4;
        $freefire -> id5 = $req->id5;
        $freefire -> save();
        return redirect('https://t.me/vmaxesports');
    }

    function showData()
    {
        $data = Freefire::all();
        return view('freefire/application', ['freefires'=>$data]);
    }
}
