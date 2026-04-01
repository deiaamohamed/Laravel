<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class Postcontroller extends Controller
{
    //
    public function index(){
         $posts=[
            [
            'id'=>1,
            'name'=>'deiaa',
            'Major'=> 'FullStack Developer'],
            [
            'id'=>2,
            'name'=>'haneen',
            'Major'=> 'Deep learning Engineer'],
            [
            'id'=>3,
            'name'=>'Ahmed',
            'Major'=> 'BIM Manager'],
            
        ];
        return view('details',compact('posts')) ;
    }
    public function show($id){
          $posts=[
            [
            'id'=>1,
            'name'=>'deiaa',
            'Major'=> 'FullStack Developer'],
            [
            'id'=>2,
            'name'=>'haneen',
            'Major'=> 'Deep learning Engineer'],
            [
            'id'=>3,
            'name'=>'Ahmed',
            'Major'=> 'BIM Manager'],
            
        ];
        $choosen=[];
        for ($i = 0; $i < count($posts); $i++){
                if($posts[$i]['id']==$id){
                    $choosen= $posts[$i];
                    break;
                }    
        }
    
    return view('posts',compact("choosen")) ;
    }
    public function create(){
        return view("create_post");
    }
    public function store(request $request){
            return redirect('/posts');
        }
        public function edit(){
            $post=[
                "id"=> 1,
                "name"=> "deiaa",
                "post"=>"i want to sleep :("
            ];
            return view("update_post",compact("post"));
        }
        public function update(){
            echo "updated";
            }
            public function destroy($id){
                return redirect("/post/{$id}");
            }
            

}
