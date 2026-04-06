<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class Postcontroller extends Controller
{
    //
    public function index(){
      $posts=Post::paginate(10);

  
        return view('details',compact('posts')) ;
    }
    public function show($id){
         
        $post=Post::find($id);
    
    return view('posts',compact("post")) ;
    }
    public function create(){
        $user=User::all();
        return view("create_post",compact("user"));
    }
    public function store(request $request){
            //dd( $request->all());
            $request->validate([
                "name"=> ["required","min:3","unique:posts"],
                "post"=>["required","max:255"],
            ]);
            $post=new Post();
            $post->title=$request->name;
            $post->post= $request->post;
            $post->user_id=$request->u_id;
             $post->save();
            return redirect('/posts');
        }
        public function edit($id){
           $post=Post::find($id);
            return view("update_post",compact("post"));
        }
        public function update(Request $request){
                $post=Post::find($request->id);
                $post->title=$request->name;
                $post->post= $request->post;
                $post->save();
                return redirect("/posts");
            }
            public function destroy($id){
                $post=Post::find($id);
                $post->delete();
                return redirect("/posts");
            }
            

}
