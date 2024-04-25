<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Venue;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */

    public function login(): View
    {
        return view('index');
    }

    public function create(): View
    {
        return view('login');
//        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        if(isset($request->is_admin) && $request->is_admin && $request->is_admin == true && !Auth::user()->isAdmin()){
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->back();
        }

        $request->session()->regenerate();

        if(Auth::user()->isAdmin()){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $admin = false;
        if(Auth::user()->isAdmin()){
            $admin = true;
        }
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if($admin){
            return redirect()->route('admin.login');
        }else{
            return redirect('/');
        }
    }
}
