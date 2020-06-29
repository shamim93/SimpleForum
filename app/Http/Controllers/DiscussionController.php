<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('discussions.create');
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   =>'required',
            'content' =>'required'
        ]);
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
