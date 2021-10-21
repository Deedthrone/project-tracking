<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;


class InboxController extends Controller
{
    //
    public function index() 
    {
        return view('inbox', {
            "title" => "inbox"
        });
    }

    // public function show()
    // {

    // }
}
