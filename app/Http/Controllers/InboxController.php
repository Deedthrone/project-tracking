<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;


class InboxController extends Controller
{
    // INBOXS
    public function index()
    {
        $x = 1;
        return view('page/inboxs', [
            "title" => "inbox",
            "inboxs" => Inbox::all(),
            "test" => ''
        ]);
    }

    public function test(Inbox $inbox)
    {
        return view('/page/inboxs', [
            "title" => "Single Post",
            "test" => $inbox,
            "inboxs" => Inbox::all()
        ]);
    }

    public function show(Inbox $inbox)
    {
        return view('/page/inbox', [
            "title" => "Single Post",
            "test" => $inbox,
            "inboxs" => Inbox::all()
        ]);
    }

    public function else(Inbox $data)
    {
        $specsubject=$data->input('specsubject');
        $specname=$data->input('specname');
    	$specmessage=$data->input('specmessage');
        $specid=$data->input('specid');
        
        $showdetail = new Inbox();
        $cetakId = $showdetail->printId($a);
        $cetakNama = $showdetail->printNama($b);
        $cetakSubject = $showdetail->printSubject($c);
        $cetakMessage = $showdetail->printMessage($d);
        return view('/page/inbox', [
            "title" => "Single Post",
            "subject" => $cetakId,
            "name" => $cetakNama,
            "subject" => $cetakSubject,
            "message" => $cetakMessage,
            "subinboxs" => Inbox::all()
        ]);
    }

    // --------------------------------------------

    public function CetakDataMhsku(Request $data) {
    	$a=$data->input('namamhs');
    	$b=$data->input('nimmhs');
    	$c=$data->input('jurmhs');
    	$d=$data->input('aktmhs');
    	$datamhs = new CekLulus(); //nama models
    	$printnama = $datamhs->cetakNama($a);
    	$printnim = $datamhs->cetakNim($b);
    	$printjur = $datamhs->cetakJur($c);
    	$printlus = $datamhs->hitungLulus($d);
    	return view ('isidatamhs', 
    		['namamhsku'=>$printnama,
    		'nimmhsku'=>$printnim,
    		'jurmhsku'=>$printjur,
    		'tahunlulus'=>$printlus
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
