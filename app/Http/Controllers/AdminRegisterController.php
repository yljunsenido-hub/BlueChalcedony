<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminRegisterController extends Controller
{
    public function create()
    {
        return view('admin.register'); // use a separate view or reuse your register blade
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
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
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'mobile' => ['nullable','integer'],
            'coding_date' => ['nullable','date'],
            'agent_status' => ['required', 'string'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,

            'agent_code' => $validated['agent_code'],
            'recruiter_code' => $validated['recruiter_code'],
            'role' => $validated['role'],
            'branch' => $validated['branch'],
            'unit' => $validated['unit'],
            'sub_unit' => $validated['sub_unit'],
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'display_name' => $validated['display_name'],
            'email' => $validated['email'],
            'mobile' => $validated['mobile'],
            'coding_date' => $validated['coding_date'],
            'agent_status' => $validated['agent_status'],
            'password' => Hash::make($validated['password']),
            'name' => $validated['name'],
        ]);

        return redirect()->route('admin.register')->with('success', 'User registered successfully!');
    }
}
