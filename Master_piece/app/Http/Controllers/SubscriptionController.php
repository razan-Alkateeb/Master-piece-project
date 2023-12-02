<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\Subscription;
use App\Models\Type;
use App\Models\Time;
use App\Models\Subscriber;
use App\Models\User;
use Database\Seeders\SubscriberSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class SubscriptionController extends Controller
{

    public function index()
    {
        $data = Subscription::all();
        $types = Type::all();
        $times = Time::all();
        return view('dashbord_views.tables.subscription')->with(['data' => $data, 'types' => $types, 'times' => $times]);
    }


    public function create()
    {
        $types = Type::all();
        $times = Time::all();
        return view('dashbord_views.add_forms.add_subscription')->with(['types' => $types, 'times' => $times]);
    }


    public function store(Request $request)
    {
        //  $request->validate([
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


        Subscription::create([
            'subscription_visits' => $request->visits,
            'subscription_price' => $request->price,
            'subscription_type_id' => $request->type,
            'subscription_time_id' => $request->time,
        ]);



        return redirect('subscription')->with('flash_message', 'Subscription Added!');
    }


    public function show(Subscription $subscription)
    {
        //
    }


    public function edit($id)
    {
        $data = Subscription::find($id);
        $types = Type::all();
        $times = Time::all();
        return view('dashbord_views.edit_forms.edit_subscription')->with(['data' => $data, 'types' => $types, 'times' => $times]);
    }


    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        // ]);


        $data['subscription_visits'] = $request->visits;
        $data['subscription_price'] = $request->price;
        $data['subscription_type_id'] = $request->type;
        $data['subscription_time_id'] = $request->time;


        Subscription::where(['id' => $id])->update($data);
        return redirect('subscription')->with('flash_message', 'Subscription Update!');
    }


    public function destroy($id)
    {
        Subscription::find($id)->delete();
        Subscription::destroy($id);
        return redirect('subscription')->with('flash_message', 'Subscription deleted!')->with('flash_status', 'deleted');
    }




    public function inHome()
    {
        $subscriptions = Subscription::all();
        $times = Time::all();
        $types = Type::all();


        $gyms = Gym::all();

        $userId = Auth::id();
        $user = User::find($userId);


        $subscriber = Subscriber::where('subscriber_user_id', $userId)->first();


        if ($subscriber) {
            session(['subscriber_id' => $subscriber->id]);
            $subscription_data= Subscription::where('id', $subscriber->subscriber_subscription_id)->first();


        $gyms = Gym::where('gym_type_id', $subscription_data->subscription_type_id)->take(5)->get();


        }




        return view('user_views.home', [
            'subscriptions' => $subscriptions,
            'times' => $times,
            'types' => $types,
            'gyms' => $gyms,
            'user' => $user,
            'subscriber' => $subscriber,


        ]);
    }
}
