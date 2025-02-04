<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the admin dashboard (protected by middleware)
    public function index()
    {
        return view('admin.dashboard');
    }

    // Show the login form
    public function loginForm()
    {
        return view('admin.login');
    }

    // Process login submission
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Hard-coded credentials (replace these with secure logic in production)
        $adminUsername = 'chirag@admin.com';
        $adminPassword = 'Chirag@2199';

        if ($request->username === $adminUsername && $request->password === $adminPassword) {
            // Store a flag in session to indicate the admin is logged in
            $request->session()->put('admin_logged_in', true);
            return redirect()->route('admin.dashboard');
        }

        // If credentials don't match, redirect back with an error
        return redirect()->back()->withErrors(['login' => 'Invalid credentials provided.']);
    }

    // Logout the admin
    public function logout(Request $request)
    {
        $request->session()->forget('admin_logged_in');
        return redirect()->route('admin.login.form');
    }
}
