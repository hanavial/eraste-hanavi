<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use DataTables; 

class UserController extends Controller
{
    public function index(){
        $user = User::get();
        return view('users.index',compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        DB::transaction(function () use ($request) {
            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt(($request->get('password')))
            ]);
        });
        return redirect()->route('user.index')->with('status','Success Add User!!!');

    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        DB::transaction(function () use($request, $id){
            User::find($id)->update([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt(($request->get('password')))
            ]);
        });

        return redirect()->route('user.index')->with('status','Success Update User!!!');
    }

    public function delete($id){

        DB::transaction(function () use($id) {
            User::find($id)->delete();
        });

        return redirect()->route('user.index')->with('status','Success Delete User!!!');
    }
}
