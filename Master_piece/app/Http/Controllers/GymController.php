<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\User;
use App\Models\Type;
use App\Models\Time;
use App\Models\Subscription;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GymController extends Controller
{

    public function index()
    {
        $data = Gym::all();
        $owners = User::all();
        $types = Type::all();
        return view('dashbord_views.tables.gym')->with(['data' => $data, 'owners' => $owners, 'types' => $types]);
    }


    public function create()
    {
        $data = Type::all();
        return view('dashbord_views.add_forms.add_gym')->with('data', $data);
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


        if (User::where('email', $request->email)->exists()) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $oid = $user->id;
            } else {
                return redirect('gym')->with('flash_message', 'This email is not exists.');
            }
        } else {
            return redirect('gym')->with('flash_message', 'This email is not exists.');
        }


        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/public/images/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/public/images/'), $filename);
        }



        Gym::create([
            'gym_name' => $request->name,
            'gym_description' => $request->description,
            'gym_workingHoursFrom' => $request->timestart,
            'gym_workingHoursTo' => $request->timeend,
            'gym_address' => $request->address,
            'gym_phone' => $request->phone,
            'gym_facebook' => $request->facebook,
            'gym_instagram' => $request->instagram,
            'gym_email' => $request->gymemail,
            'gym_owner_id' => $oid,
            'gym_type_id' => $request->type,
            'gym_image' => $filename,
        ]);



        return redirect('gym')->with('flash_message', 'gym Added!');
    }


    public function show(Gym $gym)
    {
        //
    }


    public function edit(Gym $gym)
    {
        //
    }


    public function update(Request $request, Gym $gym)
    {
        //
    }


    public function destroy($id)
    {
        $gym = Gym::find($id);
        $ownerId = $gym->gym_owner_id;
        Gym::find($id)->delete();
        Gym::destroy($id);

        if (!Gym::where('gym_owner_id', $ownerId)->exists()) {
            $user = User::find($ownerId);
            $user->user_role = 'user';
            $user->save();
        }



        return redirect('gym')->with('flash_message', 'Gym deleted!')->with('flash_status', 'deleted');
    }

    public function showAllGyms()
    {
        $gyms = Gym::all();
        $userId = Auth::id();
        $subscriber = Subscriber::where('subscriber_user_id', $userId)->first();

        if ($subscriber) {
            $subscription_data = Subscription::where('id', $subscriber->subscriber_subscription_id)->first();

            $gyms = Gym::where('gym_type_id', $subscription_data->subscription_type_id)->get();
        }

        $selectedCity = "All";
        return view('user_views.pages.gyms', ['gyms' => $gyms, 'selectedCity' => $selectedCity]);
    }


    public function filterGyms(Request $request)
    {
        $selectedCity = $request->input('city');

        $userId = Auth::id();
        $subscriber = Subscriber::where('subscriber_user_id', $userId)->first();

        if ($subscriber) {
            $subscription_data = Subscription::where('id', $subscriber->subscriber_subscription_id)->first();

            $gyms = Gym::where('gym_type_id', $subscription_data->subscription_type_id)->get();
        }

        if ($selectedCity != 'All') {
            $gyms = Gym::where('gym_type_id', $subscription_data->subscription_type_id)
                ->where('gym_address', $selectedCity)
                ->get();
        }

        return view('user_views.pages.gyms', ['gyms' => $gyms, 'selectedCity' => $selectedCity]);
    }



    public function handleCitySelection(Request $request)
    {
        $selectedCity = $request->input('city');

        // Do something with the selected city, such as querying the database
        // ...

        // Return a response if needed
        return response()->json(['message' => 'City selected: ' . $selectedCity]);
    }



    public function showSingleGym($id)
    {
        $gym = Gym::find($id);

        return view('user_views.pages.gym_details', ['gym' => $gym ,'add' => '',
        'message' => '' ]);
    }



    public function registerGym()
    {

        $types = Type::all();

        if (Auth::check()) {
            $userId = Auth::id();
            $owner = User::find($userId);
            return view('user_views.pages.register_gym')->with(['owner' => $owner, 'types' => $types]);
        }
        return redirect()->route('login');
    }


    public function storeGym(Request $request)
    {

        // dd($request);
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





        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/public/images/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/public/images/'), $filename);
        }



        Gym::create([
            'gym_name' => $request->name,
            'gym_description' => $request->description,
            'gym_workingHoursFrom' => $request->timestart,
            'gym_workingHoursTo' => $request->timeend,
            'gym_address' => $request->address,
            'gym_phone' => $request->phone,
            'gym_facebook' => $request->facebook,
            'gym_instagram' => $request->instagram,
            'gym_email' => $request->gymemail,
            'gym_owner_id' => $request->ownerId,
            'gym_type_id' => $request->type,
            'gym_image' => $filename,
        ]);

        $user = User::find($request->ownerId);

        $user->user_role = 'owner';
        $user->save();

        // return redirect('gym')->with('flash_message', 'gym Added!');
        return redirect('registerGym')->with('flash_message', 'Gym Added!');
    }
}
