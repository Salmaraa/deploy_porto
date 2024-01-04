<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\SendRegistrationEmail;
use App\Models\User;
use App\Mail\RegistrationEmail;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;





class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
        // $this->middleware('verified')->except(['logout', 'dashboard']);
    }

    public function register()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:250',
            'email'=> 'required|email|max:250|unique:users',
            'password'=> 'required|min:8|confirmed',
            'photo'=> 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('photo')){
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('photos/original', $filenameSimpan);
        }

        $user = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=> \Illuminate\Support\Facades\Hash::make($request->password),
            'photo'=> $path
            

        ]);


        // Mengirim email
        $this->sendRegistrationEmail($user);
        

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login')
            ->withSuccess('You have succesfully registered');


    }

    private function sendRegistrationEmail(User $user){
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => '********',
        ];
    
        $subject = 'Registration Successful';
    
        
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('login')
                ->withSuccess('You have successfully logged in!');
        }
        return back()->withErrors([
            'email'=>'Your provided credentials do not match in our records.'
        ])->onlyInput('email');
    }

    public function dashboard()
    {
        if (Auth::check()){
            return view('auth.dashboard');
        }
        return redirect()->route('login')
            ->withErrors([
                'email'=> 'Please login to access the dashboard.',
            ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }
}
