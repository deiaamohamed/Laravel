<?php

namespace App\Http\Controllers\API;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class PostController extends Controller
{
    //
    public function index(){
      $posts=Post::all();

  
        return PostResource::collection($posts);
    }
     public function show($id){
         
        $post=Post::find($id);
    
    return $post ;
    }
     public function store(request $request){
            //dd( $request->all());
            $request->validate([
                "name"=> ["required","min:3","unique:posts,title"],
                "post"=>["required","max:255"],
            ]);
            $post=new Post();
            $post->title=$request->name;
            $post->post= $request->post;
            $post->user_id=$request->user_id;

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('posts', 'public');
                 $post->image = $path;
                }
             $post->save();
            return "done";
        }
         public function update(Request $request, $id){
                $post=Post::find($id);
                $post->title=$request->name;
                $post->post= $request->post;
                $post->save();
                return "updated";
            }
             public function destroy($id){
                $post=Post::find($id);
                $post->delete();
                return "destroyed";
             }
}
