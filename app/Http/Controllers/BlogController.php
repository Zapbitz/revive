<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        // dd($blogs[3]->WrittenBy);
        return view('blog.view',compact('blogs'));
    }
    public function blog_table($id)
    {
        if(auth()->user()->hasrole('doctor'))
        {
            $blogs = Blog::where('filled_by',$id)->get();
        }
        else
        {
            $blogs = Blog::all();
        }
        // dd($blogs);
        return view('blog.blog-table',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->title || !$request->body){

            return back()->withInput();
        }
       
        if($request->hasfile('image'))
         {   
                $image=$request->file('image');
                $extention= $image->getClientOriginalExtension();;
                $name=Str::slug($request->title).'.'.$extention;
                $image->move(public_path().'/blogimages/', $name);  
                $data[] = $name;  
         }

        $blog = new Blog;

        $blog->title=$request->title;

        $blog->article=$request->body;

        $blog->filled_by=Auth::User()->id;

        $blog->image=$name;

        $blog->save();

        return redirect('blogs');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $blog = Blog::findOrFail($id);
       return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        if(Auth::User()->id != $blog->filled_by){

            return back();
        }
        $blog->title=$request->title;

        $blog->article=$request->body;

        $blog->filled_by=Auth::User()->id;

        $blog->save();
        
        return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        // if(Auth::User()->id != $blog->filled_by){

        //     return back();
        // }
        $blog->delete();

        return redirect('blogs');
    }
}
