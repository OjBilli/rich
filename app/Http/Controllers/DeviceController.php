<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Card;

class DeviceController extends Controller
{
    //
    function list()
    {
        $bank = Bank::all();
        $card = Card::all();

        return $bank. $card;
    }
}
