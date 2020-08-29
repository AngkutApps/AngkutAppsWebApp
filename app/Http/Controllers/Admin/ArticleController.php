<?php

namespace App\Http\Controllers\Admin;

use App\Articel;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articel::with('category', 'users')->get();

        return view('admin.modulArticel.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.modulArticel.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'id_category' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        $image = $request->image;
        $imageName = time() . $image->getClientOriginalName();
        $image->move('asset_backend/img/upload/article', $imageName);

        $article = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'id_category' => $request->id_category,
            'content' => $request->content,
            'id_user' => Auth::id(),
            'image' => 'asset_backend/img/upload/article/' . $imageName
        ];

        Articel::create($article);
        toast('Data berhasil di tambah', 'success');
        return redirect()->route('article.index');
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
        $article = Articel::findOrFail($id);
        $categories = Category::all();
        return view('admin.modulArticel.article.edit', compact('article', 'categories'));
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
        $articleData = Articel::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|min:3',
            'id_category' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        if ($request->has('image')) {
            $image = $request->image;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('asset_backend/img/upload/article', $imageName);

            $article = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'id_category' => $request->id_category,
                'content' => $request->content,
                'id_user' => Auth::id(),
                'image' => 'asset_backend/img/upload/article/' . $imageName
            ];

            $file_path = $articleData->image;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        } else {
            $article = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'id_category' => $request->id_category,
                'content' => $request->content,
                'id_user' => Auth::id()
            ];
        }

        $articleData->update($article);
        toast('Data berhasil di update', 'success');
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articel::findOrFail($id)->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->back();
    }

    public function getTrash()
    {
        $articles = Articel::onlyTrashed()->get();
        return view('admin.modulArticel.article.trash', compact('articles'));
    }

    public function restore($id)
    {
        Articel::onlyTrashed()->findOrFail($id)->restore();
        toast('Data berhasil di restore', 'success');
        return redirect()->back();
    }

    public function kill($id)
    {
        Articel::onlyTrashed()->findOrFail($id)->forceDelete();
        toast('Data berhasil di delete', 'success');
        return redirect()->back();
    }
}
