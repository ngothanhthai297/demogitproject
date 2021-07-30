<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\icos;

class IcoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icos = icos::orderBy('id', 'DESC')->paginate(10);
        return view('backend.icos.index')->with('icos', $icos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.icos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'content' => 'string|nullable',
        ]);
        $data = $request->all();
      
        $status = icos::create($data);
        if ($status) {
            request()->session()->flash('success', 'icos successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding icos');
        }
        return redirect()->route('icos.index');
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
        $icos = icos::findOrFail($id);
        return view('backend.icos.edit')->with('icos', $icos);
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
        $icos = icos::findOrFail($id);
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'content' => 'string|nullable',
            'photo' => 'string|nullable',
            'video' => 'string|nullable',
        ]);
        $data = $request->all();
        $status = $icos->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'icos successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating icos');
        }
        return redirect()->route('icos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $icos = icos::findOrFail($id);
        $status = $icos->delete();
        if ($status) {
            request()->session()->flash('success', 'icos successfully deleted');
        } else {
            request()->session()->flash('error', 'Error occurred while deleting icos');
        }
        return redirect()->route('icos.index');
    }
}
