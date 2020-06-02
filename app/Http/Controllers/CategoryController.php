<?php

namespace App\Http\Controllers;

use App\Category;

use App\Post;

class CategoryController extends Controller
{


    public function index() {

         $posts  = Post::all();
         $categories = Category::all() ;

     return view('categories.categories', ['posts' => $posts, 'categories' => $categories ]) ;
 
     }

    
    public function store($category) { 


        $categories = Category::all() ;

           foreach($categories as $categorie) {
        if ($categorie->category == $category) { 

            session()->flash('success','You successfully add new post') ;
            return redirect('dashboard')  ;
        } }
        
        $categorie = new Category() ;
        $categorie->category = $category ;
        $categorie->timestamps = false;
        $categorie->save() ;

        session()->flash('success','You successfully add new post') ;

        return redirect('dashboard') ;
        
      
           }
  
}
