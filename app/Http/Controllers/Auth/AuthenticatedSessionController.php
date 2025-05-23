<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        $request->validate([
            'agent_code' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('agent_code', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'agent_code' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->role == 'admin') {
            return redirect('/admin/dashboard');
        } elseif ($user->role == 'branch_manager') {
            return redirect('/branch-manager/dashboard');
        } elseif ($user->role == 'unit_manager') {
            return redirect('/unit-manager/dashboard');
        } elseif ($user->role == 'assistant_unit_manager') {
            return redirect('/assistant_unit_manager/dashboard');
        } elseif ($user->role == 'financial_advisor') {
            return redirect('/financial_advisor/dashboard');
        } elseif ($user->role == 'unit_operations') {
            return redirect('/unit-operations/dashboard');
        } else {
            return redirect('/agent/dashboard');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
