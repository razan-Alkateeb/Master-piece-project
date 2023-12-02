<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $data=Admin::all();
        return view('dashbord_views.tables.admin')->with('data', $data);
    }


    public function create()
    {
        return view('dashbord_views.add_forms.add_admin');
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        //     'email' => 'required|email',
        //     'password' => [
        //         'required',
        //         'min:8',
        //         'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
        //     ]
        // ]);



        // Check if an admin with the same email already exists
        if (Admin::where('admin_email', $request->email)->exists()) {
            return redirect('admin')->with('flash_message', 'Admin with this email already exists.')->with('flash_status', 'deleted');;
        }


        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/public/images/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/public/images/'), $filename);
        }


        Admin::create([
            'admin_name' => $request->name,
            'admin_email' => $request->email,
            'admin_password' => bcrypt($request->password), // Hash the password
            'admin_image' => $filename,
        ]);

        return redirect('admin')->with('flash_message', 'Admin Added!');
    }


    public function show(Admin $admin)
    {
        //
    }


    public function edit(Admin $admin)
    {
        //
    }


    public function update(Request $request, Admin $admin)
    {
        //
    }


    public function destroy($id)
    {
        Admin::find($id)->delete();
        Admin::destroy($id);
        return redirect('admin')->with('flash_message','Admin deleted!')->with('flash_status', 'deleted');
    }
}
