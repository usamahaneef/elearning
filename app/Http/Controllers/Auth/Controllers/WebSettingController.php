<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $aboutus = Setting::where('slug', 'about_paragraph')->first();
        $address = Setting::where('slug', 'address')->first();
        $phone = Setting::where('slug', 'phone')->first();
        $whatsapp = Setting::where('slug', 'whatsapp')->first();
        $email = Setting::where('slug', 'email')->first();
        $company = Setting::where('slug', 'footer')->first();
        $gmail = Setting::where('slug', 'gmail')->first();
        $facebook = Setting::where('slug', 'facebook')->first();
        $instagram = Setting::where('slug', 'instagram')->first();
        $linkedIn = Setting::where('slug', 'linkedIn')->first();
        return view('admin.websetting.setting', compact('aboutus', 'company', 'email', 'whatsapp', 'phone', 'address', 'gmail', 'facebook', 'instagram', 'linkedIn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->type == 'banner') {

            if ($request->image1) {
                $banner_image = time() . $request->image1->getClientOriginalName();
                $request->image1->move('images/banner/', $banner_image);
                $img = $banner_image;

                $banner = Setting::where('slug', 'image1')->update(['image' => $img]);
            }
            if ($request->image2) {
                $banner_image = time() . $request->image2->getClientOriginalName();
                $request->image2->move('images/banner/', $banner_image);
                $img = $banner_image;

                $banner = Setting::where('slug', 'image2')->update(['image' => $img]);
            }
            if ($request->image3) {
                $banner_image = time() . $request->image1->getClientOriginalName();
                $request->image3->move('images/banner/', $banner_image);
                $img = $banner_image;

                $banner = Setting::where('slug', 'image3')->update(['image' => $img]);
            }
        }


        if ($request->type == 'logo') {
            if ($request->logo) {
                $logo_image = time() . $request->logo->getClientOriginalName();
                $request->logo->move('images/logo/', $logo_image);
                $img = $logo_image;

                $logo = Setting::where('type', 'logo')->update(['image' => $img]);
            }
        }


        if ($request->type == 'about') {
            $logo = Setting::where('slug', 'about_paragraph')->update(['description' => $request->about]);
        }


        if ($request->type == 'contact') {

            if ($request->address) {
                Setting::where('slug', 'address')->update(['description' => $request->address]);
            }
            if ($request->phone) {
                Setting::where('slug', 'phone')->update(['description' => $request->phone]);
            }
            if ($request->address) {
                Setting::where('slug', 'whatsapp')->update(['description' => $request->whatsapp]);
            }
            if ($request->email) {
                Setting::where('slug', 'email')->update(['description' => $request->email]);
            }
        }


        if ($request->type == 'social_link') {

            if ($request->facebook) {
                Setting::where('slug', 'facebook')->update(['description' => $request->facebook]);
            }
            if ($request->instagram) {
                Setting::where('slug', 'instagram')->update(['description' => $request->instagram]);
            }
            if ($request->linkedin) {
                Setting::where('slug', 'linkedIn')->update(['description' => $request->linkedin]);
            }
            if ($request->gamil) {
                Setting::where('slug', 'gamil')->update(['description' => $request->gamil]);
            }
        }


        if ($request->type == 'footer') {
            $logo = Setting::where('type', 'footer')->update(['description' => $request->company_name]);
        }

        return redirect()->back()->with('message', 'Setting Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
