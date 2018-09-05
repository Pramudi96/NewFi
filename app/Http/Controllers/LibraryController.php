<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function Lindex(){

        $waters = Library::all();
        return view('LibraryRecords',compact('waters'));
    }
}
