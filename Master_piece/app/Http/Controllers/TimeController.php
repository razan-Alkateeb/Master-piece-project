<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{

    public function index()
    {
        $data=Time::all();
        return view('dashbord_views.tables.time')->with('data', $data);
    }



    public function create()
    {
        return view('dashbord_views.add_forms.add_time');
    }



    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        //     'email' => 'required|email|unique:users',
        //     'password' => [
        //         'required',
        //         'min:8',
        //         'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
        //     ],
        //     'phone' => [
        //         'required',

        //     ]]
        // );

        if (Time::where('time_duration', $request->num)->exists()) {
            return redirect('time')->with('flash_message', 'Time already exists.');
        }


        Time::create([
            'time_name' => $request->name,
            'time_duration' => $request->num,
        ]);

        return redirect('time')->with('flash_message', 'Time Added!');
    }




    public function show(Time $time)
    {
        //
    }


    public function edit($id)
    {
        $data = Time::find($id);
        return view('dashbord_views.edit_forms.edit_time')->with('data', $data);
    }


    public function update(Request $request,$id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        // ]);


        $data['time_name'] = $request->name;
        $data['time_duration'] = $request->num;


        Time::where(['id' => $id])->update($data);
        return redirect('time')->with('flash_message', 'Time Update!');
    }



    public function destroy($id)
    {
        Time::find($id)->delete();
        Time::destroy($id);
        return redirect('time')->with('flash_message','Time deleted!')->with('flash_status', 'deleted');
    }
}
