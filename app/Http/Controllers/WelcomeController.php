<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class WelcomeController extends Controller
{



    public function index() 
    {

             $data  = Post::orderBy('created_at', 'desc')->paginate(6);
             $categories = Category::all() ;
              return response()->json($data);
 
     }
    public function show($id) {

             $posts  = Post::all(); 
             $postChoosen = Post::find($id) ; ;
             $post = array() ;
             $x = 0 ;
             foreach($posts as $item)
             {
                 $post[$x] = $item ;
                 $x++ ;
             }

                
            
             $i = count($post) ;

         return view('posts.show', [ 'postChoosen' => $postChoosen,'posts' => $post,'i'=> $i ]) ;
        }


        public function home() 
        {

            $posts  = Post::orderBy('id')->paginate(6);
            $categories = Category::all() ;
    
            return view('home', ['posts' => $posts, 'categories' => $categories ]) ;
     
         }
         
        public function welcome2() 
        {

            $posts  = Post::all();
            $categories = Category::all() ;
    
            return view('welcome2', ['posts' => $posts, 'categories' => $categories ]) ;
     
         }
    
}
