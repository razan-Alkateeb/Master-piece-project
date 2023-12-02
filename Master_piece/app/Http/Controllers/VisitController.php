<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Gym;
use App\Models\User;
use App\Models\Subscriber;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VisitController extends Controller
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
    public function show(Visit $visit)
    {
        //
    }
    public function edit(Visit $visit)
    {
        //
    }

    public function update(Request $request, Visit $visit)
    {
        //
    }

    public function destroy(Visit $visit)
    {
        //
    }


    public function savecode(Request $request)
    {
        //dd($request);
        $gym = Gym::find($request->gymId);
        $subscriberId = session('subscriber_id');
        if ($subscriberId) {
            $visit = Visit::where('visit_subscriber_id', $subscriberId)
                ->where('is_visited', 0)
                ->first();
            if ($visit) {
                $code = $visit->visit_code; //retreve the code in message

                $message = "You have an activated code " . $code . " .";
                return view('user_views.pages.gym_details', [
                    'add' => 'no',
                    'message' => $message,
                    'gym' => $gym
                ]);
            } else {

                $currentDate = now()->format('Y-m-d');

                Visit::create([
                    'visit_code' => $request->code,
                    'visit_date' => $currentDate,
                    'is_visited' => 0,
                    'visit_gym_id' => $request->gymId,
                    'visit_subscriber_id' => $subscriberId,
                ]);


                $message = "The activation of your visiting code " . $request->code . "\nhas been successfully processed. \nNow you can visit any gym within your subscription category by using this code.";

                return view('user_views.pages.gym_details', [
                    'add' => 'yes',
                    'message' => $message,
                    'gym' => $gym

                ]);
            }
        }
    }

    public function gyminterface()
    {

        return view('user_views.pages.gym_interface');
    }

    public function visitGym(Request $request)
    {

        // dd($request);




        $userdetails = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        $user = DB::table('users')
            ->where('email', $userdetails['email'])
            ->first();

        $gymAccept = false;

        if ($user) {

            if (Hash::check($userdetails['password'], $user->password)) {


                $subscriber = Subscriber::where('subscriber_user_id', $user->id)->first();
                if ($subscriber) {

                    $currentDate = now()->format('Y-m-d');
                    if ($subscriber->subscriber_number_visits > 0 && $subscriber->subscriber_end > $currentDate) {


                        $subscription_data = Subscription::where('id', $subscriber->subscriber_subscription_id)->first();

                        //have all gym can user is visited
                        $gyms = Gym::where('gym_type_id', $subscription_data->subscription_type_id)->get();

                        foreach ($gyms as $gym) {
                            if ($gym->id == $request->gymid) {
                                $gymAccept = true;
                            }
                        }


                        if ($gymAccept) {


                            $visit = Visit::where('visit_subscriber_id', $subscriber->id)
                                ->where('is_visited', 0)->where('visit_code', $request->code)
                                ->first();

                            if ($visit) {

                                DB::table('subscribers')
                                    ->where('id', $subscriber->id)
                                    ->decrement('subscriber_number_visits');

                                DB::table('visits')
                                    ->where('id', $visit->id)
                                    ->update(['is_visited' => 1 , 'visit_gym_id' => $request->gymid]);

                                return back()->with('success', 'visit Successfully');
                            } else {
                                return back()->with('error', 'dont have active visit code ');
                            }
                        } else {
                            return back()->with('error', 'gym not accepted in your subscription ');
                        }
                    } else {
                        return back()->with('error', 'your subscription has expired');
                    }
                } else {
                    return back()->with('error', 'not have supscription');
                }
            } else {
                return back()->with('error', 'Email or Password is invalid');
            }
        } else {
            return back()->with('error', 'Email or Password is invalid');
        }







        // return view('user_views.pages.gym_interface');
    }
}
