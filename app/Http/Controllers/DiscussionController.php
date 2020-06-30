<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\StoreDiscussion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
class DiscussionController extends Controller
{
    
    public function index()
    {
        $discussions =Discussion::with('user')->latest()->paginate(5);
        return view('discussions.index',['discussions' =>$discussions]);
    }

   
    public function create()
    {
        return view('discussions.create');
    }

   
    public function store(StoreDiscussion $request)
    {
        /*
        $validatedData = $request->validated();
        $validatedData['channel_id'] = $request->channel;
        Discussion::create($validatedData);
        */
        auth()->user()->discussions()->create([
            'title'    =>$request->title,
            'slug'  =>Str::slug($request->title),
            'content'    =>$request->content,
            'channel_id'    =>$request->channel,
        ]);
        return redirect()->route('home')->with('success',"Discussion added");
    }

  
    public function show(Discussion $discussion)
    {
        //$discussion = Discussion::findOrFail($discussion);
        return view('discussions.show',['discussion'=>$discussion]);
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
