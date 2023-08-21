<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Blog\BlogPostRequest;
use App\Http\Requests\Admin\Blog\BlogPostUpdateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::orderByDesc('id')->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('photo')){
        	$folder = date('Y-m-d');
        	$photo = $request->file('photo')->store("images/blog/{$folder}");
        }else{
            return redirect()->back()->with('errors', 'Помилка при добавленні фото');   
		}

        $blogCreate = Blog::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'photo' => $photo ?? null,
        ]);

        if(!$blogCreate){
            return redirect()->back()->with('errors', 'Error to store product');   
        }

        return redirect()->back()->with('success', 'Новина була успішно добавлена');   

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blog::findOrfail($id);
        return view('admin.blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogPostUpdateRequest $request, $id)
    {
        $data = $request->all();
        $post = Blog::findOrFail($id);

        if($request->hasFile('photo')){
        	$folder = date('Y-m-d');
        	$data['photo'] = $request->file('photo')->store("images/products/{$folder}");
            Storage::delete("{$post['photo']}");
        }

        $post->update($data);
        return redirect()->back()->with('success', 'Новина була оновлена оновлений');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::findOrFail($id);
        if($post['photo']){
            Storage::delete("{$post['photo']}");
        }

        Blog::destroy($id);
        return redirect()->back()->with('success', 'Новина була видалена');  
    }
}
