<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use const http\Client\Curl\POSTREDIR_ALL;

class PostController extends Controller
{
    //
    protected $table = 'posts';


    public function create()
    {
        $date = [
            ['title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblablabla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'title of post from phpstorm2',
                'content' => 'some interesting content2',
                'image' => 'imageblablabla2.jpg',
                'likes' => 220,
                'is_published' => 1,
            ]];
        foreach ($date as $item) {
            Post::create($item);
        }
        dd('created');

    }

    public function index()
    {
        $posts = Post::where('is_published', 1)->get();

        return view('posts',compact('posts'));
    }

    public function update(){
        $post= Post::find(6);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 0,
            'is_published' => 0

        ]);
        dd("updated");
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
