<?php

namespace App\Http\Controllers;

use App\Models\Articol;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ArticolController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $articols = Articol::all();

        return view('articol.index',compact('articols'));
    }

    public function create(){

        return view('articol.create');
    }

    public function store(){
        $data = request()->validate(
            ['art_nummer'=>'string',
                'art_name'=>'string',
                'plc_nummer'=>'string',
                'art_description'=>'string',
                'art_price'=>'numeric'

            ]
        );
        $articol=Articol::create($data);
        return redirect()->route('articol.index');
    }

    public function show($id){
       // $articol = Articol::find(1);
        $articol=   Articol::findOrFail($id);

        return view('articol.show', compact('articol'));

    }

    public function edit(Articol $articol){


        return view('articol.edit', compact('articol'));

    }

}
