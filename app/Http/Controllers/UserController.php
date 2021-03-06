<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(10);

        return view('users.index')
            ->with('users', $users);

    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {

        $user = new User();
        $user->name = $request->campo1;
        $user->email = $request->campo2;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect(route('users.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::findOrfail($id);

        return view('users.edit')
            ->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $user->fill($request->all());
        $user->setPasswordAttribute($request->password);
        $user->update();

        return redirect(route('users.index'));

    }


    public function destroy($id)
    {
        //
    }
}
