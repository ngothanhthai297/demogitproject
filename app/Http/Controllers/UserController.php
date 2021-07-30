<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

class UserController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Logout()
    {
       Auth::logout();
       return redirect('/');
    }
    public function getRegister()
    {
        return view('login.register');
    }
    public function getlogin()
    {
        return view('login.login');
    }
    public function index()
    {
        //
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return view('backend.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(
            $request,
            [
                'name' => 'string|required|max:30',
                'email' => 'string|required|unique:users',
                'password' => 'string|required',
                'phone' => 'string|required',
                'status' => 'required|in:active,inactive',
                'photo' => 'string|nullable',
            ]
        );
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        // dd($data);
        $status = User::create($data);
        // dd($status);
        if ($status) {
            request()->session()->flash('success', 'Successfully added user');
        } else {
            request()->session()->flash('error', 'Error occurred while adding user');
        }
        return redirect()->route('users.index');
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
        //
        $user = User::findOrFail($id);
        return view('backend.users.edit')->with('user', $user);
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
        $user = User::findOrFail($id);
        $this->validate(
            $request,
            [
                'name' => 'string|required|max:30',
                'email' => 'string|required',
                'status' => 'required|in:active,inactive',
                'photo' => 'string|required',
            ]
        );
        // dd($request->all());
        $data = $request->all();
        // dd($data);
        $status = $user->fill($data)->save();
        // dd($status);
        if ($status) {
            request()->session()->flash('success', 'Successfully updated user');
        } else {
            request()->session()->flash('error', 'Error occurred while updating user');
        }
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findorFail($id);
        $status = $user->delete();
        if ($status) {
            request()->session()->flash('success', 'User Successfully deleted');
        } else {
            request()->session()->flash('error', 'There is an error while deleting users');
        }
        return redirect()->route('users.index');
    }
    public function demo()
    {
        return view('backend.index');
    }
    public function Register(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|min:3|unique:Users,Email',
                'password' => 'required|min:6|same:password_confirmation',
                'password_confirmation' => 'required',
                'phone' => 'required',
            ]
        );
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $status = User::create($data);
        if ($status) {
            request()->session()->flash('success', 'Banner successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding banner');
        }
        return redirect('/login');
    }

    public function Login(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|min:3',
                'password' => 'required|min:6',
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/login')->with('error','Email or Password Wrong');
        }
    }
}