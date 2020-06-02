<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use App\Post;

use App\Category;

use auth;

use App\Http\Requests\postRequest;



class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

        
       // if(auth::user()->is_admin)
       // {
            $listposts  = Post::all();

      //  }else
       // {
       //     $listposts  = auth::user()->posts ;
       // }
     return view('posts.index', ['posts' => $listposts->reverse() ]) ;

    }


   public function store(postRequest $request) {

      $post = new Post() ;
      $post->title = $request->input('title') ;
      $post->category = $request->input('category') ;
      $post->content = $request->input('content') ;
      $post->user_id = Auth::user()->id ;
      if($request->hasFile('photo'))
      {
          $post->photo = $request->photo->store('image');
      }

      $post->save() ;

      return redirect('posts/category/'.$post->category);
       
    }
    public function create() {

        return view('posts.create');
    }

    public function edit($id) {

        $post = Post::find($id) ;

       // $this->authorize('update',$post);

     return view('posts.edit', ['post' => $post]);

    }



    public function update(postRequest $request,$id) {

        $post = Post::find($id) ;
     //   $this->authorize('update',$post);
        $post->title = $request->input('title') ;
        $post->category = $request->input('category') ;
        $post->content = $request->input('content') ;
        if($request->hasFile('photo'))
        {
            $post->photo = $request->photo->store('image');
        }
        $post->save() ;

        return redirect('dashboard');

    }

    public function destroy(Request $request,$id) {
        
        
        $post = Post::find($id) ;
     //   $this->authorize('delete',$post);
        $post->delete() ;
       
        return redirect('dashboard');


    }
}
