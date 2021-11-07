<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;


class InboxController extends Controller
{
    // INBOXS
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
            "inbox" => $inbox,
            "isi" => $inbox->message,
            "inboxs" => Inbox::all()
        ]);
    }

    public function else(Inbox $inbox)
    {
        return view('page/inbox', [
            "title" => "Single Post",
            "subinbox" => $inbox,
            "subinboxs" => Inbox::all()
        ]);
    }

    public function sewahitung(Request $xx, $id)
    {
        $price=$xx->input('price');
        $durasi=$xx->input('durasi');
    	$quantity=$xx->input('quantity');
        $charge=$xx->input('charge');
        
        $datatotal = new Katalog();
        $printtotal = $datatotal->sewasubtotal($price, $quantity, $durasi, $charge);
        
        return view('page/sewa', [
            "title" => "Detail",
            "katalog" => Katalog::find($id),
            "subtotal" => 0,
            "total" => $printtotal
        ]);
    }

    // public function show(Inbox $inbox)
    // {
    //     return view('page/inbox', [
    //         "title" => "Single Post",
    //         "inbox" => $inbox,
    //         "inboxs" => Inbox::all()
    //     ]);
    // }

    // INBOX

    // public function subindex()
    // {
    //     return view('page/inbox', [
    //         "title" => "inbox",
    //         "subinboxs" => Inbox::all()
    //     ]);
    // }

    // OUTBOXS


    // OUTBOX
}
