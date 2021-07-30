<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisors;
use Illuminate\Support\Str;
class AdvisorsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisors = Advisors::orderBy('id', 'DESC')->paginate(10);
        return view('backend.advisors.index')->with('advisors', $advisors);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.advisors.create');
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
            'tilte' => 'string|required',
            'photo' => 'string|required',
        ]);
        $data = $request->all();
        $status = Advisors::create($data);
        if ($status) {
            request()->session()->flash('success', 'Advisor successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Advisor');
        }
        return redirect()->route('advisors.index');
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
        $advisors = Advisors::findOrFail($id);
        return view('backend.advisors.edit')->with('advisors', $advisors);
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
        $advisors = Advisors::findOrFail($id);

        $this->validate($request, [
            'tilte' => 'string|required',
        ]);
        $data = $request->all();
        if ($request->photo == null) {
            $data['photo'] = "";
        }
        $status = $advisors->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Advisor successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating advisor');
        }
        return redirect()->route('advisors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advisor = Advisors::findOrFail($id);
        $status = $advisor->delete();
        if ($status) {
            request()->session()->flash('success', 'Advisor successfully deleted');
        } else {
            request()->session()->flash('error', 'Error occurred while deleting advisor');
        }
        return redirect()->route('advisors.index');
    }
}
