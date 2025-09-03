<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

use function Termwind\render;

class UserController extends Controller
{
    public function show(): View
    {
        $user = Auth::user();
        return view('/', ['user' => $user]);
    }

    public function register(Request $request)
    {
        // Validate and create user
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create($validated);
        if (!$user) {
            return response()->json(['error' => 'User creation failed'], 500);
        }
        return redirect('/login');
    }

    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect('/')->with('user', $user);
        }
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function update(Request $request)
    {
        // Validate and update user
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $request->user()->id,
            'password' => 'sometimes|required|string|min:8|confirmed',
        ]);

        $user = $request->user();
        $user->update($validated);
        return response()->json($user);
    }

    public function destroy(Request $request)
    {
        $user = $request->user();
        $user->delete();
        return response()->json(null, 204);
    }
}
