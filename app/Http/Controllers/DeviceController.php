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
    function add(Request $req)
    {
        $bank = new Bank;
        $bank ->name =$req->name;
        $bank ->code =$req->code;
        $result = $bank ->save();
        if($result)
        {
            return ["RESULT" => "Data has been saved"];
        }
        else
        {
            return ["RESULT" => "Operation failed"];
        }


    }

    function update(Request $req)
    {
        $bank = Bank::find($req->id);
        $bank ->name =$req->name;
        $bank ->code =$req->code;
        $result = $bank ->save();
        if($result)
        {
            return ["RESULT" => "Data has been Updated"];
        }
        else
        {
            return ["RESULT" => "Update Operation failed"];
        }

    }
}
