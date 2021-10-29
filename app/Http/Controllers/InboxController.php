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

    public function show(Inbox $inbox)
    {
        return view('page/inbox', [
            "title" => "Single Post",
            "inbox" => $inbox
        ]);
    }

    public function type(Inbox $outbox)
    {
        return view('/page/outboxs', [
            "title" => "Outbox",
            "inbox" => $outbox
        ]);
    }
}
