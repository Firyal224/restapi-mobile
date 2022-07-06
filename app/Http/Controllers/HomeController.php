<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    //

    public function konten(Request $request){

        $data = Post::select('judul','konten','created_at','images')->get();
        // dd($data);

        return response()->json($data);
    }
}
