<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.modulArticel.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modulArticel.category.create');
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
            'name' => 'required|min:3'
        ]);

        $category = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Category::create($category);
        toast('Data berhasil di tambah', 'success');
        return redirect()->route('category.index');
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
        $category = Category::findOrFail($id);
        return view('admin.modulArticel.category.edit', compact('category'));
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
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $category = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Category::findOrFail($id)->update($category);
        toast('Data berhasil di update', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        toast('Data berhasil di delete', 'success');
        return redirect()->back();
    }

    public function getTrash()
    {
        $categories = Category::onlyTrashed()->get();

        return view('admin.modulArticel.category.trash', compact('categories'));
    }

    public function restore($id)
    {
        Category::onlyTrashed()->findOrFail($id)->restore();
        toast('Data berhasil di restore', 'success');
        return redirect()->back();
    }

    public function kill($id)
    {
        Category::onlyTrashed()->findOrFail($id)->forceDelete();
        toast('Data berhasil di delete permanen', 'success');
        return redirect()->back();
    }
}
