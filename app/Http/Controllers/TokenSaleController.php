<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token_sale;
class TokenSaleController extends Controller
{
    //
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token_sales = Token_sale::orderBy('id', 'DESC')->paginate(10);
        return view('backend.token_sales.index')->with('token_sales', $token_sales);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.token_sales.create');
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
                'content' => 'string|required',
            ]
        );
        $data = $request->all();
        $status = Token_sale::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Solution');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Solution');
        }
        return redirect()->route('token.index');
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
        $token_sales = Token_sale::findOrFail($id);
        return view('backend.token_sales.edit')->with('token_sales', $token_sales);
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
        $token_sales = Token_sale::findOrFail($id);
        //Kiểm tra request -> trả về error
        $this->validate($request, [
            'content' => 'string|required',
        ]);
        $data = $request->all();
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $token_sales->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Token successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('token.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $token_sales = Token_sale::findOrFail($id);
        // return $child_cat_id;
        $status = $token_sales->delete();

        if ($status) {
            request()->session()->flash('success', 'Token successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Token');
        }
        return redirect()->route('token.index');
    }
}
