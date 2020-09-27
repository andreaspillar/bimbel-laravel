<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function signed_in(Request $request)
    {
        $input = $request->only('email', 'password');

        $this->validation($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($input)) {
            return view('dashboard');
        }
    }
}
