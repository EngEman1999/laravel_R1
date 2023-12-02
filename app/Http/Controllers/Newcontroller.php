<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;

class Newcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $News = News::get();
        return view("shownews" , compact("News"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("news");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $News =  new News();
        $News ->newstitle = $request->newstitle;
        $News ->content = $request->content;
        $News ->author = $request->author;
        if(isset($request->Published)){
            $News ->Published = true;
        }else{
            $News ->Published = false;
        }
        $News -> save();
        return 'Added Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $News = News::findOrFail($id);
        return view('newsdetails', compact('News'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $News = News::findOrFail($id);
        return view('editNews', compact('News'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::where('id', $id)->delete();
        return 'deleted';

    }
    public function trashed(){
        $News = News::onlyTrashed()->get();
        return view('trashed', compact('News'));
    }

    public function restore(string $id): RedirectResponse
    {
        News::where('id', $id)->restore();
        return redirect('News');
    }
}
