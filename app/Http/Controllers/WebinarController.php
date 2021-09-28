<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    //
    public function store()
    {
        $data = request()->validate(
            ['text' => 'string',
             'youtube_url' => 'string'
            ]
        );

        request()->validate(
            [
                'formFile'=>'required|mimes:jpg,jpeg,png|max:2048'
            ]
        );

        if(request()->file()) {

            $fileName = request()->file('formFile')->getClientOriginalName();
            $filePath = request()->file('formFile')->getPathname();

            $resource_path = '\\public\\image\\webinars\\'.$fileName;

            $to = __DIR__.'\\..\\..\\..'.$resource_path;

            $data['image_path'] = $resource_path;

            copy($filePath, $to);


        }

        Webinar::create($data);
        return redirect()->route('webinar.index');
    }



    public function create(){
        return view('webinar.create');
    }

    public function index()
    {
        $webinars = Webinar::all();

        return view('webinar.index', compact('webinars'));
    }

}
