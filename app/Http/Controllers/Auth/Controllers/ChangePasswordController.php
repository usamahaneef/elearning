<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Psy\Readline\Userland;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {


        if (empty($request->current_password) || empty($request->new_password)) {
            return back()->with("error", "Old Password and New Password fields are Required");
        }
        if ($request->new_password != $request->confirm_password) {
            return back()->with("error", "New Password Doesn't match with Confirm Password");
        }

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("message", "Password changed successfully!");
    }
}
