<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'cats' => Cat::all(),
            'users' => User::all()
        ]);
    }


    public function addCat(Request $request)
    {
        $cat = Cat::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return redirect()->back();
    }
}
