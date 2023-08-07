<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $admin = User::where('role', 'admin')->first();

        return view('admin.profile', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $users = User::get();
        return view('admin.users', compact('users'));
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
    public function update(Request $request, $id)
    {

        if ($request->hasFile('img')) {

            $user_image = time() . $request->img->getClientOriginalName();
            $request->img->move('images/users/', $user_image);
            $img = $user_image;
        } else {

            $user = User::where('id', $id)->first();
            $img = $user->image;
        }
        $user = User::find($id);

        $user->update(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'image' => $img,
            ]
        );

        return redirect()->back()->with('message', 'Admin Updated Successfully');
    }

    
}
