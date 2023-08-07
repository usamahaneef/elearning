<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create_service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $service = time() . $request->image->getClientOriginalName();
            $request->image->move('images/service/', $service);
            $img = $service;
        }


        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->image =  $img;
        $service->save();

        return redirect('admin/services')->with('message', 'Service Added Successfully');
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

        $service = Service::where('id', $id)->first();
        return view('admin.service.edit', compact('service'));
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
        if ($request->hasFile('image')) {
            $service = time() . $request->image->getClientOriginalName();
            $request->image->move('images/service/', $service);
            $img = $service;
        }

        $service = Service::where('id', $id)->first();
        $service->update(
            [
                'title' => $request->title,
                'image' => $img,
                'description' => $request->description,
            ]
        );

        return redirect('admin/services')->with('message', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id', $id)->delete();

        return redirect()->back()->with('message', 'Service deleted Successfully');
    }
    public function team()
    {

        $members = Team::all();
        return view('admin.team.index', compact('members'));
    }


    public function teamCreate()
    {

        return view('admin.team.create_team');
    }
    public function addTeam(Request $request){

        if ($request->hasFile('image')) {
            $team = time() . $request->image->getClientOriginalName();
            $request->image->move('images/team/', $team);
            $img = $team;
        }


        $service = new Team();
        $service->name = $request->name;
        $service->designation = $request->designation;
        $service->image =  $img;
        $service->save();

        return redirect('admin/team')->with('message', 'Team Member Added Successfully');

    }

    public function teamDelete($id)
    {
        Team::where('id', $id)->delete();

        return redirect()->back()->with('message', 'Team Member deleted Successfully');
    }

    public function teamEdit($id)
    {

        $team = Team::where('id', $id)->first();
        return view('admin.team.edit', compact('team'));
    }
    public function teamUpdate(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $team = time() . $request->image->getClientOriginalName();
            $request->image->move('images/team/', $team);
            $img = $team;
        }


        $team = Team::where('id', $id)->first();
        $team->update(
            [
                'name' => $request->name,
                'image' => $img,
                'designation' => $request->designation,
            ]
        );

        return redirect('admin/team')->with('message', 'Team Member Updated Successfully');
    }

    
}
