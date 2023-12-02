<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Type::all();
        return view('dashbord_views.tables.type')->with('data', $data);
    }


    public function create()
    {
        return view('dashbord_views.add_forms.add_type');
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

        if (Type::where('type_name', $request->name)->exists()) {
            return redirect('type')->with('flash_message', 'Type already exists.');
        }


        Type::create([
            'type_name' => $request->name,
        ]);

        return redirect('type')->with('flash_message', 'Type Added!');
    }



    public function show(Type $type)
    {
        //
    }


    public function edit($id)
    {
        $data = Type::find($id);
        return view('dashbord_views.edit_forms.edit_type')->with('data', $data);
    }


    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        // ]);


        $data['type_name'] = $request->name;



        Type::where(['id' => $id])->update($data);
        return redirect('type')->with('flash_message', 'Type Update!');
    }


    public function destroy($id)
    {
        Type::find($id)->delete();
        Type::destroy($id);
        return redirect('type')->with('flash_message', 'Type deleted!')->with('flash_status', 'deleted');
    }
}
