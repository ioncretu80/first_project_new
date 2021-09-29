<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use const http\Client\Curl\POSTREDIR_ALL;

class PostController extends Controller
{
    //
    protected $table = 'posts';

    public function index()
    {

        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
//        $date = [
//            ['title' => 'title of post from phpstorm',
//                'content' => 'some interesting content',
//                'image' => 'imageblablabla.jpg',
//                'likes' => 20,
//                'is_published' => 1,
//            ],
//            [
//                'title' => 'title of post from phpstorm2',
//                'content' => 'some interesting content2',
//                'image' => 'imageblablabla2.jpg',
//                'likes' => 220,
//                'is_published' => 1,
//            ]];
//        foreach ($date as $item) {
//            Post::create($item);
//        }
//        dd('created');
    }



    public function store(){
        $data = request()->validate(
            ['title'=>'string',
             'content'=>'string',
              'image'=>'string',
               'category_id'=>''
            ]
        );

        Post::create($data);
        return redirect()->route('post.index');
    }
    //Varianta1
//    public function show($id){
//        //$post = Post::find($id);
//        $post = Post::findOrFail($id);
//        dd($post->title);
//
//    }

//varianta 2
    public function show(Post $post){

       return view('post.show', compact('post'));

    }

    public function edit(Post $post){

        $categories = Category::all();

        return view('post.edit', compact('post','categories'));

    }





    public function update(Post $post){
        $data = request()->validate(
            ['title'=>'string',
             'content'=>'string',
             'image'=>'string',
              'category_id'=>''
            ]
        );
        $post->update($data);
        return redirect()->route('post.show',$post->id);

    }
    public function destroy(Post $post){
       $post->delete();
       return redirect()->route('post.index');
    }
    public function delete(){
        $post = Post::find(2);
        $post->delete();
        dd("delete post");
    }

    public function firstOrCreate(){
        $post = POST::find(1);
        $anotherPost=[
            'title' => 'firstOrCreate',
            'content' => 'firstOrCreate',
            'image' => 'firstOrCreate',
            'likes' => 0,
            'is_published' => 0

        ];
        $post = Post::firstOrCreate([
            'title' => 'firstOrCreate'


        ],[
            'title' => 'firstOrCreate',
            'content' => 'firstOrCreate',
            'image' => 'firstOrCreate',
            'likes' => 0,
            'is_published' => 0

        ]);

        dd($post->content);
    }

    public function updateOrCreate(){

        $post = Post::updateOrCreate([
            'title' => 'first21'


        ],[
            'title' => 'first22',
            'content' => 'firstOrCreate',
            'image' => 'firstOrCreate',
            'likes' => 0,
            'is_published' => 0

        ]);
        dd($post->title);
    }
}
