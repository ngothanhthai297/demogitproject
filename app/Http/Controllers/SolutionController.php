<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solutions;
class SolutionController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = Solutions::orderBy('id', 'DESC')->paginate(10);
        return view('backend.solutions.index')->with('solutions', $solutions);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.solutions.create');
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
        $status = Solutions::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Solution');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Solution');
        }
        return redirect()->route('solution.index');
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
        $solutions = Solutions::findOrFail($id);
        return view('backend.solutions.edit')->with('solutions', $solutions);
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
        $solutions = Solutions::findOrFail($id);
        //Kiểm tra request -> trả về error
        $this->validate($request, [
            'title' => 'string|required',
        ]);
        $data = $request->all();
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $solutions->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Solution successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('solution.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solutions = Solutions::findOrFail($id);
        // return $child_cat_id;
        $status = $solutions->delete();

        if ($status) {
            request()->session()->flash('success', 'Solution successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Solution');
        }
        return redirect()->route('solution.index');
    }
}
