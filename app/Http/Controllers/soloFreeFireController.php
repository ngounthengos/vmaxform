<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solo;

class soloFreeFireController extends Controller
{
    function addData(Request $req)
    {
        $solo = new Solo;
        $solo -> name = $req->name;
        $solo -> phone = $req->phone;
        $solo -> gamename = $req->gamename;
        $solo -> id = $req->id;
        $solo -> save();
        return redirect('https://t.me/vmaxesports');
    }
}
