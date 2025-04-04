<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function index_Register()
    {
        return view('admin.register');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],


            'agent_code' => ['required', 'integer', Rule::unique('users', 'agent_code')],
            'recruiter_code' => ['nullable','integer'],
            'role' => ['required', 'string'],
            'branch' => ['required', 'string'],
            'unit' => ['required', 'string'],
            'sub_unit' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'middle_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'display_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', Rule::unique('users', 'email')],
            'mobile' => ['nullable','integer'],
            'coding_date' => ['nullable','date'],
            'agent_status' => ['required', 'string'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,

            'agent_code' => $request->agent_code,
            'recruiter_code' => $request->recruiter_code,
            'role' => $request->role, // Assign role correctly
            'branch' => $request->branch,
            'unit' => $request->unit,
            'sub_unit' => $request->sub_unit,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'display_name' => $request->display_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'coding_date' => $request->coding_date,
            'agent_status' => $request->agent_status,
            'password' => Hash::make($request->password),
             
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
