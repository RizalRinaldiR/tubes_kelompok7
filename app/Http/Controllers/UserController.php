<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(Request $request)
{
    $branchId = $request->input('branch_id');
    
    if ($branchId) {
        $users = User::where('branch_id', $branchId)->get();
    } else {
        $users = User::all(); 
    }

    $branch = Branch::all(); 
    
    return view('users.index', compact('branch', 'users'));    
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:owner,manager,supervisor,cashier,warehouse',
            'branch_id' => 'nullable|exists:branch,id',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        return response()->json($user, 201);
    }
}
