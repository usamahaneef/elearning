<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Recomendation;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $banners = Setting::where('type','banner')->orderby('created_at', 'desc')->get();
        $logo = Setting::where('type','logo')->first();
        $about = Setting::where('slug','about_paragraph')->first();
        $address = Setting::where('slug','address')->first();
        $phone = Setting::where('slug','phone')->first();
        $whatsapp = Setting::where('slug','whatsapp')->first();
        $email = Setting::where('slug','email')->first();
        $company_name = Setting::where('type','footer')->first();
        $gmail = Setting::where('slug','gmail')->first();
        $facebook = Setting::where('slug','facebook')->first();
        $instagram = Setting::where('slug','instagram')->first();
        $linkedIn = Setting::where('slug','linkedIn')->first();
        $services = Service::all();
        $members = Team::all();
        
        return view('home',compact('banners','logo','about','address','phone','whatsapp','email','company_name','services','members','gmail','facebook','instagram','linkedIn'));   
    }
   
}
