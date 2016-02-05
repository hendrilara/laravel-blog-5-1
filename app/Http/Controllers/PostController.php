<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = App\Post::where('active','1')->orderBy('created_at','desc')->paginate(3);
        $meta = [
        'title' => $post->title,
        'description' => $post->excerpt,
        
        ];
        return view('frontend.front.index', compact('posts','meta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->user()->can_post()) {
            $category = Category::all();
           return view('frontend.post.create', compact('category'));
        }
        else
        {
            return redirect('/')->withErrors('');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = New Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->slug = str_slug($post->title);
        $post->category_id = $request->input('category_id');
        $post->author_id   = $request->user()->id;

        if ($request->has('save')) {
            $post->active = 0;
            $flash_message = 'Post berhasil disimpan';
        }
        else
        {
            $post->active = 1;
            $flash_message = 'Post Berhasil Di Publikasikan';
        }

        $post->save();

        return redirect('/')->withMessage($flash_message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tampil = Post::where('slug', $slug)->first();
       // dd($tampil->toArray());

        return view('frontend.front.show', compact('tampil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $edit = Post::where('slug', $slug)->first();

        dd($edit);
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
        //
    }

    public function search(){
   
      $search = \Request::get('search'); 
 
      $post = Post::where('title','like','%'.$search.'%')
        ->orderBy('title')->get();
       return view('frontend.post.search', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
