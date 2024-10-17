<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $cresenditials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if(Auth::attempt($cresenditials)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'name' => "Username yang dimasukkan tidak benar",
        ])->onlyInput("name");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }

    public function changepaswordPage(){
        return view('auth.changePassword');
    }

    public function changePassword(Request $request)
    {
        // Validasi input password baru
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'confirmed', 'min:8'],
        ]);

        // Cek apakah current password benar
        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini salah']);
        }

        // Update password
        $user = auth()->user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Logout otomatis setelah password berhasil diubah
        auth()->logout();

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('status', 'Password berhasil diubah. Silakan login kembali.');
    }


}
