<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outs;

class OurController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Outs::orderBy('id', 'DESC')->paginate(10);
        return view('backend.outs.index')->with('outs', $outs);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.outs.create');
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
                'our_name' => 'string|required',
            ]
        );
        $data = $request->all();
        $status = Outs::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Our');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Our');
        }
        return redirect()->route('out.index');
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
        $outs = Outs::findOrFail($id);
        return view('backend.outs.edit')->with('outs', $outs);
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
        $outs = Outs::findOrFail($id);
        //Kiểm tra request -> trả về error
        $this->validate($request, [
            'our_name' => 'string|required',
        ]);
        $data = $request->all();
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $outs->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Our successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('out.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $outs = Outs::findOrFail($id);
        // return $child_cat_id;
        $status = $outs->delete();

        if ($status) {
            request()->session()->flash('success', 'Our successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Our');
        }
        return redirect()->route('out.index');
    }
}
