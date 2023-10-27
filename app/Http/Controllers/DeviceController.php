<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Card;

class DeviceController extends Controller
{
    //
    function list($id=null)
    {
        $bank = $id?Bank::find($id):Bank::all();
        $card = Card::all();

        return $bank. $card;
    }

    function name($name=null)
    {
        $bank = $name?Bank::where('name',$name)->first():Bank::all();
        $card = Card::all();

        return $bank. $card;
    }
}
