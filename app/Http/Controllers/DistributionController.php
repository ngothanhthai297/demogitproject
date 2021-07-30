<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Distribution;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributions = Distribution::orderBy('id', 'DESC')->paginate(10);
        return view('backend.distributions.index')->with('distributions', $distributions);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.distributions.create');
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

        $status = Distribution::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Whitepapers');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Whitepapers');
        }
        return redirect()->route('distributions.index');
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
        $distribution = Distribution::findOrFail($id);
        return view('backend.distributions.edit')->with('distribution', $distribution);
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
        $distribution = Distribution::findOrFail($id);
        $this->validate(
            $request,
            [
                'title' => 'string|required',
                
            ]
        );
        $data = $request->all();
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $distribution->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'whitepapers successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('distributions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distribution = Distribution::findOrFail($id);
        // return $child_cat_id;
        $status = $distribution->delete();

        if ($status) {
            request()->session()->flash('success', 'whitepapers successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting whitepapers');
        }
        return redirect()->route('distributions.index');
    }
}
