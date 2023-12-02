<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $data=User::all();
        return view('dashbord_views.tables.user')->with('data', $data);
    }


    public function create()
    {
        return view('dashbord_views.add_forms.add_user');
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

        if (User::where('email', $request->email)->exists()) {
            return redirect('user')->with('flash_message', 'User with this email already exists.');
        }

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/public/images/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/public/images/'), $filename);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'phone'=> $request->phone,
            'password' => bcrypt($request->password), // Hash the password
            'user_image' => $filename,
        ]);

        return redirect('user')->with('flash_message', 'user Added!');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
        return redirect('user')->with('flash_message','User deleted!')->with('flash_status', 'deleted');
    }


    public function profile()
    {

        $subscriber=null;
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);
            if (Subscriber::where('subscriber_user_id', $userId)->exists()){
                $subscriber=Subscriber::where('subscriber_user_id', $userId)->find();
            }
            return view('user_views.pages.profile')->with(['user' => $user, 'subscriber' => $subscriber]);
        }
        return redirect()->route('login');
    }

    public function editprofile(Request $request)
    {
        dd($request);
    }
}
