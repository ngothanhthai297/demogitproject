<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::orderBy('id', 'DESC')->paginate(10);
        return view('backend.categories.index')->with('categories', $categories);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'string|required',
            ]
        );
        $data = $request->all();
       
        $status = Categories::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Categories');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Categories');
        }
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
        $categories = Categories::findOrFail($id);
        return view('backend.categories.edit')->with('categories', $categories);
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
        $categories = Categories::findOrFail($id);
        //Kiểm tra request -> trả về error
        $this->validate($request, [
            'title' => 'string|required'
        ]);
        $data = $request->all();
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $categories->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Categories successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
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
        $categories = Categories::findOrFail($id);
        // return $child_cat_id;
        $status = $categories->delete();

        if ($status) {
            request()->session()->flash('success', 'Categories successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Categories');
        }
        return redirect()->route('category.index');
    }
}
