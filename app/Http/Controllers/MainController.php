<?php

namespace App\Http\Controllers;

use App\Models\Author;
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

    public function dropdown(){

        $data = DB::table('authors')->get();
        return view('dropdown')->with('authors',$data);
    }

    public function findbook(Request $req)
    {
       
        $data = DB::table('books')->select('name','id')->where('author_id', $req->id)->take(100)->get();
        return response()->json($data);
    }
    public function findyear(Request $request)
    {

        //it will get price if its id match with product id
        $data= Author::select('published_on')->where('id', $request->id)->first();
        dd($data);
        return response()->json($data);
    }

}
