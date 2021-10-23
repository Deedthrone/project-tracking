<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;


class InboxController extends Controller
{
    //
    public function index()
    {
        return view('page/inboxs', [
            "title" => "inbox",
            "inboxs" => Inbox::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('inbox', [
            "title" => "Single Post",
            "inbox" => $inbox
        ]);
    }
}
