<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Type;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function index()
    {
        $data=Subscriber::all();
        $subscriptions=Subscription::all();
        $users=User::all();
        $types=Type::all();
        return view('dashbord_views.tables.subscriber')->with(['data' => $data, 'subscriptions' => $subscriptions, 'users' => $users, 'types' => $types]);
    }


    public function create()
    {
       // Create a new subscriber
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Subscriber $subscriber)
    {
        //
    }


    public function edit(Subscriber $subscriber)
    {
        //
    }


    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }


    public function destroy( $id)
    {
        Subscriber::find($id)->delete();
        Subscriber::destroy($id);
        return redirect('subscriber')->with('flash_message', 'Subscriber deleted!')->with('flash_status', 'deleted');
    }
}
