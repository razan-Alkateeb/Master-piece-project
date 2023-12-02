<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Time;
use App\Models\Type;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CouponController extends Controller
{

    public function index()
    {
        $data = Coupon::all();
        return view('dashbord_views.tables.coupon')->with('data', $data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Coupon $coupon)
    {
        //
    }


    public function edit(Coupon $coupon)
    {
        //
    }


    public function update(Request $request, Coupon $coupon)
    {
        //
    }


    public function destroy($id)
    {
        Coupon::find($id)->delete();
        Coupon::destroy($id);
        return redirect('coupon')->with('flash_message', 'Coupon deleted!')->with('flash_status', 'deleted');
    }


    public function usecoupon(Request $request)
    {

        $subscription = Subscription::find($request->subscription_id);
        $time = Time::find($subscription->subscription_time_id);
        $type = Type::find($subscription->subscription_type_id);

        $coupon_data = Coupon::where('coupon_code', $request->coupon_code)->first();


        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);

            if (!$coupon_data) {
                // Coupon code not found
                $error_message = "Coupon code not found";
                return view('user_views.pages.checkout', [
                    'coupon_data' => "",
                    'error_message' => $error_message,
                    'user' => $user,
                    'subscription' => $subscription,
                    'time' => $time,
                    'id' => $request->subscription_id,
                ]);
            }

            // Coupon code found
            $error_message = 'The subscription price has been discounted by ' . $coupon_data->coupon_discount_percentage . '%.';
            return view('user_views.pages.checkout', [
                'coupon_data' => $coupon_data,
                'error_message' => $error_message,
                'user' => $user,
                'subscription' => $subscription,
                'time' => $time,
                'id' => $request->subscription_id,
            ]);

        }

        return redirect()->route('login');




    }
}



