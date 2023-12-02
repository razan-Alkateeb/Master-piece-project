<?php

namespace App\Http\Controllers;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\Visit;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $userId = Auth::id();
        $subscriber = Subscriber::where('subscriber_user_id', $userId)->first();
        $visitcode = "";
        $visit = Visit::where('visit_subscriber_id', $subscriber->id)
                ->where('is_visited', 'no')
                ->first();

                if ($visit) {
                    $visitcode = $visit->visit_code;
                }

        return view('profile.edit', [
            'user' => $request->user(),
            'subscriber'=> $subscriber,
            'visitcode'=> $visitcode,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
