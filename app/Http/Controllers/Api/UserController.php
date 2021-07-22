<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);

        return $users->toJson();
    }


    /**
     * Created user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);   
        
        $data = $request->all();

        $data["password"] = 'password';


        User::create($data);

        return redirect()->route('users')
            ->with('success', 'User created successfully.');
    }

    
    /**
     * Update user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    
        User::Where('id', $request->id)->update($request->all());

        return redirect()->route('user.index')
            ->with('success', 'User update successfully.');
    }


}
