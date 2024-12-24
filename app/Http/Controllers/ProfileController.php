<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return response()->json([
            'message' => 'Profile updated'
        ]);
    }


    public function destroy(Request $request)
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();
        Auth::guard('web')->logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return 200;
    }


    public function deleteProfileImage()
    {
        $user = User::findOrFail(Auth::id());
        // Storage::disk('public')->delete($user['image']);
        $user->update(['image' => '']);

        return response()->json([
            'message' => 'Profile updated'
        ]);
    }
}
