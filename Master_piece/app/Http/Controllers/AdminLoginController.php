<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\Gym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function adminLogin()
    {
        return view('dashbord_views.admin_login');
    }


    public function adminLoginPost(Request $request)
    {
        $credetails = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        $admin = DB::table('admins')
            ->where('admin_email', $credetails['email'])
            ->first();



        if ($admin) {

            // if (Hash::check($credetails['password'], $admin->admin_password)) {
            if ($credetails['password'] === $admin->admin_password) {

                session()->put('loginname', $admin->admin_name);
                session()->put('loginimage', $admin->admin_image);


                // $name = session('loginname');

                //  return redirect()->route('admin_home')->with('success', 'Login Successfully');
                return redirect()->route('admin_home')->with('success', 'Login Successfully');
                // return view('dashbord_views.admin_home')->with('success', 'Login Successfully');
            } else {
                return back()->with('error', 'Email or Password is invalid');
            }
        } else {
            return back()->with('error', 'Email or Password is invalid');
        }
    }


    public function adminLogout()
    {

        if (session()->has('loginname')) {
            session()->pull('loginname');
            return redirect('adminLogin');
        }
    }


    public function admin_home()
    {
        $numberOfSubscriptions = Subscription::count();
        $numberOfSubscribers = Subscriber::count();
        $numberOfUsers = User::count();
        $numberOfGyms = Gym::count();

        return view('dashbord_views.admin_home', [
            'numberOfSubscriptions' => $numberOfSubscriptions,
             'numberOfSubscribers' => $numberOfSubscribers,
              'numberOfUsers' => $numberOfUsers,
              'numberOfGyms' => $numberOfGyms
            ]);


    }
}
