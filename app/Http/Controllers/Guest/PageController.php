<?php

namespace App\Http\Controllers\Guest;
use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $comics = Comic::all();
        // return view('home', compact('comics'))->name('home');
        return redirect()->route('comics.index');
    }
}
