<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function Invindex(){

        $waters = Inventory::all();
        return view('InventoryRecord',compact('waters'));
    }
}
