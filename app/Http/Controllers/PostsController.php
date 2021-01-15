<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $post = Posts::all();
        return view('posts.index',compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'question'=>'required',
            'A'=>'required|integer',
            'B'=>'required|integer',
            'C'=>'required|integer',
            'D'=>'required|integer',
            'Answer'=>'required|integer'
        ]);
        posts::create($request->all());
        return redirect()->route('posts.index')->with('success','Post create successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'question' => 'required',
          'A' => 'required',
          'B' => 'required',
          'C' => 'required',
          'D' => 'required',
          'Answer' => 'required'
        ]);
        Posts::find($id)->update($request->all());
        return redirect()->route('posts.index')->with('success','Post update success');
    }
    public function destroy($id)
    {
        Posts::find($id)->delete();
        return redirect()->route('posts.index')->with('success','Post deleted success');
    }
}
