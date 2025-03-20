<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Requests\ProfileUpdateRequest;
use App\Helpers\FruitHelper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Enums\enumPosisi;

class ProfileController extends Controller
{
    public function index(Request $request): View
    {
        
    }
    /**
     * Display the user's profile form.
     */
    public function show()
    {
        // Ambil data pengguna dari database
        $users = User::orderBy('pos', 'asc')->get();

        // Tambahkan nomor urut dan enum posisi
        $users = $users->map(function ($user, $index) {
            $user->no_urut = $index + 1; // Menambahkan nomor urut mulai dari 1
            $user->posisi = enumPosisi::posisiTampil($user->pos); 
            
            return $user;
        });

        // Kirim data ke view
        return view('profile.show', compact('users'));
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
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
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
