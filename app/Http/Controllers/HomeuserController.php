<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class HomeuserController extends Controller
{
    //i
    public function index()
    {
        $x = 1;
        return view('page/home', [
            "title" => "inbox",
            "projects" => Project::all()
        ]);
    }
}
