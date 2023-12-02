<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Subscriber;
use App\Models\Subscription;
use App\Models\Time;
use App\Models\Type;
use App\Models\UsedCoupon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Payment $payment)
    {
        //
    }
    public function edit(Payment $payment)
    {
        //
    }


    public function update(Request $request, Payment $payment)
    {
        //
    }


    public function destroy(Payment $payment)
    {
        //
    }



    public function displayCheck($id)
    {

        $subscription = Subscription::find($id);
        $time = Time::find($subscription->subscription_time_id);
        $type = Type::find($subscription->subscription_type_id);

        $coupon_data = "";
        $error_message = "";

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);
            return view('user_views.pages.checkout', compact('user', 'subscription', 'time', 'coupon_data', 'id' , 'error_message'));
        }
        return redirect()->route('login');


    }

    public function addSubscriber(Request $request)
    {


        $start = $request->startDate;
        $carbonStart = Carbon::createFromFormat('d/F/Y', $start);
        $formattedStart = $carbonStart->format('Y-m-d');

        $end = $request->endDate;
        $carbonEnd = Carbon::createFromFormat('d/F/Y', $end);
        $formattedEnd = $carbonEnd->format('Y-m-d');


        $total = preg_replace("/[^0-9]/", "", $request->total);



        // $validatedData = $request->validate(
        //     [
        //         'volunteerName' => 'required',
        //         'volunteerEmail' => ['required', 'email', 'ends_with:.com'],
        //         'volunteerPhone' => ['required', 'regex:/^07[789]\d{7}$/'],
        //         'volunteerAddress' => 'required',
        //         'description' => 'required',
        //         'status' => 'required',
        //         'image' => ['required', 'max:2048'],
        //     ],
        //     [
        //         'volunteerPhone.regex' => 'The phone  must start with 07 and to be 10number.', 'image.regex' => 'The image  extention must  be jpg or jpeg or png or gif .'
        //     ]
        // );




        if (Auth::check()) {
            $userId = Auth::id();
        }


        Subscriber::create([
            'subscriber_start' => $formattedStart,
            'subscriber_end' => $formattedEnd,
            'subscriber_number_visits' => $request->visits,
            'subscriber_user_id' => $userId,
            'subscriber_subscription_id' => $request->subscriptionId,
        ]);
        Payment::create([
            'payment_amount' => $total,
            'payment_date' => $formattedStart,
            'payment_method' => 'paypal',
            'user_id' => $userId,
        ]);


        if ($request->couponId) {
            UsedCoupon::create([
                'used_date' => $formattedStart,
                'used_coupon_id' => $request->couponId,
                'user_id' => $userId,
            ]);
        }





        return redirect()->route('paypal', ['total' => $total]);

    }
}
