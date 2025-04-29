<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Views
    public function create() {
        return view("users.register");
    }

    public function edit() {
        return view("users.update");
    }


    // Other
    public function update(Request $request) {
        dd($request);
        $userId = Auth::user()->id;

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password'=> ['required','confirmed', 'min:6'],
        ]);

        $formFields['id'] = $userId;

        //dd($formFields);
        $formFields['password'] = bcrypt($request->password);

        User::update($formFields);
        
        return redirect('/');
    }
    
    public function store(Request $request) {
        //dd($request);

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password'=> ['required','confirmed', 'min:6'],
        ]);

        //dd($formFields);
        $formFields['password'] = bcrypt($request->password);

        $user = User::create($formFields);

        auth()->login($user);
        
        return redirect('/', status: 201);
        
    }

    public function delete(User $user) {
        if (Auth::id() !== $user->id) {
            if (Auth::user()->role !== 'admin') {
                abort(403, 'Permission denied: Insufficient rights. User must be an admin to perform this action.');
            }

            $user->delete();
            return redirect('/', status: 204);
        }
        
        $user->delete();

        return back()-with('success',"User has been deleted. User data: {$user}");
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/', status: 204);
    }

    // Solely Admin Routes
    public function setRoleToUser($user_id, $role) {
        $admin = auth()->user();
        $roles = User::getRoles();

        if (is_null($admin)) {
            abort(401, 'Not authorized.');
        }

        if ($admin->role !== 'admin') {
            abort(403, 'Permission denied: Insufficient rights. User must be an admin to perform this action.');
        }

        if (!in_array($role, $roles)) {
            abort(400, "Role {$role} doesn't exist. Valid roles are {$roles}");
        }
        
        User::find($user_id)->update(['role' => $role]);
    }

    public function showAdminPanel() {
        return view('users.admin-panel');
    }
}
