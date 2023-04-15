<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredAdminController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('admin.signup');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image' => ['required']
        ]);
        $user= new User;
        $image = $request->image;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/image', $name);
        $user->name = $request->name;
        $user->image = $name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->roll = 'admin';
        $user->save();
        // $user = User::create([
        //     'name' => $request->name,
        //     'image' => $name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
     
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('societe.index');
    }
}
