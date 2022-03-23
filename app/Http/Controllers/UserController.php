<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Models\UserT;

class UserController extends Controller
{
    public function view()
    {
        $data = UserT::all();
        return view('user.pages.list_user', compact('data'));
    }
    public function index()
    {
        return view('user.pages.add_user');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['age'] = date('Y', strtotime(now())) - date('Y', strtotime($data['birthday']));
        UserT::create($data);
        return redirect(route('user.list.view'));
    }
}
