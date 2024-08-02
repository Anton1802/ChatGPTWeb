<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
	public function loginView(): View
	{
		return view('login');
	}

	public function registerView(): View
	{
		return view('register');
	}
}
