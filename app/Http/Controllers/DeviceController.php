<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class DeviceController extends Controller
{
    //
    function list()
    {
        return Bank::all();
    }
}
