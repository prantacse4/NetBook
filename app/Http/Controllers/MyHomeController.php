<?php

namespace App\Http\Controllers;

use App\Models\NetBook;
use Illuminate\Http\Request;

class MyHomeController extends Controller
{
    public function index(){

        $articles = NetBook::all();
        return view('pages.index', compact('articles'));
    }

    public function createnote(){

        return view('pages.createnote');
    }

    public function contacts(){

        return view('pages.contacts');
    }

    public function profile(){

        return view('pages.profile');
    }



    
}
