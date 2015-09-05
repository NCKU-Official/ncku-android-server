<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Http\Requests\CreatePostRequest;

use App\Post;
use App\Attachment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;
use Webpatser\Uuid\Uuid;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($category_id = null)
    {
        // if a category was passed, use that
        // if no category, get all posts

        // if ($category_id) {
        //     $posts = Post::where('category_id', $category_id);
        // }
        // else {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(15);
        // }
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($category_id)
    {
        return view('posts.create', ['category_id' => $category_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePostRequest $request
     * @return Response
     */
    public function store(CreatePostRequest $request, $category_id)
    {
        // save post
        $post = new Post;
        $post->fill($request->all());
        $post->category_id = $category_id;
        $post->save();

        // if have attachment, create the attachment record
        if($request->hasFile('attachment')) {
            // generate filename based on UUID
            $filename = Uuid::generate();
            $extension = $request->file('attachment')
                ->getClientOriginalExtension();
            $fullfilename = $filename . '.' . $extension;

            // store the file
            Image::make($request->file('attachment')->getRealPath())
                ->resize(null, 640, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save(public_path() . '/attachments/' . $fullfilename);

            // attachment record
            $attachment = new Attachment;
            $attachment->post_id = $post->id;
            $attachment->original_filename =
                $request->file('attachment')->getClientOriginalName();
            $attachment->filename = $fullfilename;
            $attachment->mime =
                $request->file('attachment')->getMimeType();
            $attachment->save();
        }

        return redirect('category/'.$category_id.'/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
