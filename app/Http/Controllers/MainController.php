<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\items;

class MainController extends Controller
{
    public function show($slug)
    {
        //first or fail will automatically send you to error page (404)
        $results = items::where('slug', $slug)->firstorFail();

        return view('mainpage', ['message' => $results]); 
        
    }
}
