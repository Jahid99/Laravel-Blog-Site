<?php

namespace App\Http\Controllers;

use App\BlogPost;

use Illuminate\Http\Request;

use Auth;

use Session;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $blogposts = BlogPost::paginate(3);
        return view('blog')->withBlogposts($blogposts);
    }

     public function admin_index()
    {
        $blogposts = BlogPost::All();
        return view('admin.post_list')->withBlogposts($blogposts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required']);

        $post = BlogPost::where('slug', '=', $request->slug)->first();

        if($post){
             Session::flash('error', 'Slug Already Exists!');
            return redirect()->back();
        }
        $blogpost = new BlogPost;
        $blogpost->title = $request->title;
        $blogpost->slug = $request->slug;
        $blogpost->body = $request->body;
        $blogpost->save();
        Session::flash('success', 'The blog post was successfully saved!');
        return redirect()->route('post.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show($post_slug)
    {
        // fetch from the DB based on slug
        $post = BlogPost::where('slug', '=', $post_slug)->first();
        // return the view and pass in the post object
        
        return view('single')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogpost = BlogPost::find($id);
        return view('admin.edit_post')->withBlogpost($blogpost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required']);
        
        $blogpost = BlogPost::find($id);

        $post = BlogPost::where('slug', '=', $request->slug)->first();

        if($post && ($blogpost->id!=$post->id)){
             Session::flash('error', 'Slug Already Exists!');
            return redirect()->back();
        }

       $blogpost->title = $request->title;
       $blogpost->slug = $request->slug;
       $blogpost->body = $request->body;

       $blogpost->save();
       Session::flash('success', 'Post updated successfully!');
       return redirect()->route('post.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogpost = BlogPost::find($id);
        $blogpost->delete();
        Session::flash('success', 'Post deleted successfully!');
        return redirect()->route('post.list');
    }
}
