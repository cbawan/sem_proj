<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;

class infocontroller extends Controller
{
    //
    public function index($id)
    {
        $hall=Hall::find($id);
//    $hall=Hall::paginate(5);
        return view('info_view',compact('hall'));
    }

}
