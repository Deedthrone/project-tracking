<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;
use App\Models\Type;


class InboxController extends Controller
{
    // INBOXS
    public function index()
    {
        $x = 1;
        return view('page/inboxs', [
            "title" => "inbox",
            "inboxs" => Inbox::all(),
            "types" => Type::all()
        ]);
    }

    public function test(Inbox $inbox)
    {
        return view('/page/inboxs', [
            "title" => "Single Post",
            "test" => $inbox,
            "inboxs" => Inbox::all(),
            "types" => Type::all()
        ]);
    }

    public function outbox(Type $type)
    {
        return view('/page/outboxs', [
            'title' => $type->name,
            'inboxs' => $type->inboxs,  
            'type' => $type->type,
            "types" => Type::all()
        ]);
    }


    public function show(Inbox $inbox)
    {
        return view('/page/inbox', [
            "title" => "Single Post",
            "test" => $inbox,
            "inboxs" => Inbox::all(),
            "types" => Type::all()
        ]);
    }   

}
