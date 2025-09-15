<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
	public function showSignupForm()
	{
		return view('signup');
	}

	public function showLoginForm()
	{
		return view('login');
	}

	public function signup(SignupRequest $request)
	{
		$validated = $request->validated();

		$user = User::create([
			"email" => $validated['email'],
			'password' => Hash::make($validated['password'])
		]);

		Auth::login($user);

		return redirect()->route('catalog');
	}

	public function login(LoginRequest $request)
	{
		$validated = $request->validated();

		if (Auth::attempt($validated, true)) {
			$request->session()->regenerate();
			return redirect()->route('catalog');
		}

		return back()->withErrors([
			'email' => 'Неверный email или пароль',
		]);
	}

	public function logout(Request $request)
	{
		Auth::logout();

		return redirect()->route('catalog');
	}
}
