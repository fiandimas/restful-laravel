<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'job' => 'required',
            'age' => 'required|numeric',
            'address' => 'required'
        ]);

        User::create($req->all());

        return response()->json([
            'message' => 'Success create user'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'job' => 'required',
            'age' => 'required|numeric',
            'address' => 'required'
        ]);

        $user = User::findOrFail($id);

        $user->id = $user->id;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->job = $req->job;
        $user->age = $req->age;
        $user->address = $req->address;
        $user->save();

        return response()->json([
            'message' => 'Success update user'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Success delete user'
        ]);
    }
}
