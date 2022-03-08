<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Image::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (request()->file) {
            $file_name = time() . '.' . request()->file->getClientOriginalName();
            request()->file->storeAs('public', $file_name);

            $image = new Image();
            $image->path = 'storage/' . $file_name;
            $image->title = $request->title;
            $image->save();

            return [
                'success' => '登録しました!',
                'image_path' => $image->path,
                'title' => $request->title
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
