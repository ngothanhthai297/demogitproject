<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Banners;
use App\Models\Outs;
use App\Models\Solutions;
use App\Models\Token_sale;
use App\Models\Teams;
use App\Models\Distribution;
use App\Models\TokenDistributions;

class PageController extends Controller
{
    //
    // Banner:
    public function home()
    {
        $banners = Banners::where('status', 'active')->first();
        $about = Solutions::first();
        $outs = Outs::all();
        $token_sale = Token_sale::first();
        $teams = Teams::orderBy('id', 'ASC')->limit(6)->get();
        $distributions = Distribution::first();
        $token_distributions = TokenDistributions::all();
        return view('home')->with('banners', $banners)
        ->with('about', $about)
        ->with('outs', $outs)
        ->with('token_sale', $token_sale)
        ->with('teams', $teams)
        ->with('distribution',$distributions)
        ->with('token_distributions',$token_distributions);
    }
    //contact home
    public function contact()
    {
        return view('page.contact');
    }
    //Save contact
    public function saveContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'email' => 'string|required',
            'message' => 'string|nullable',
        ]);
        $data = $request->all();
        // Thêm cái thời gian:
        $status = Contact::create($data);
        if ($status) {
            request()->session()->flash('success', 'Saved contact successfully');
        } else {
            request()->session()->flash('error', 'Save contact unsuccessfully');
        }
        return redirect()->route('index');
    }
}
