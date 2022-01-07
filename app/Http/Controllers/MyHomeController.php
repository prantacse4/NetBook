<?php

namespace App\Http\Controllers;

use App\Models\NetBook;
use Illuminate\Http\Request;

class MyHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $articles = NetBook::all();
        return view('pages.index', compact('articles'));
    }

    public function createnote(){

        return view('pages.createnote');
    }

    public function store(Request $request){

        $request ->validate([
            'article' => 'required|max:255',
            'source' => 'required|max:255',
            'description' => 'required'
        ]);

        NetBook::create($request ->all());
        return redirect(route('index'))->with('message', 'Article created successfully.');
    }

    public function contacts(){

        return view('pages.contacts');
    }

    public function updatenote($id){
        $articles = NetBook::where('id',$id)->get();
        return view('pages.update', compact('articles'));
    }

    public function update(Request $request, NetBook $netBook){
        $request ->validate([
            'article' => 'required|max:255',
            'source' => 'required|max:255',
            'description' => 'required'
        ]);
        $netBook->update($request ->all());
        return redirect(route('index'))->with('message', 'Article updated successfully.');
    }

    public function delete(NetBook $netBook){
        $netBook->delete();
        return redirect(route('index'))->with('message', 'Article deleted successfully.');
    }



    
}
