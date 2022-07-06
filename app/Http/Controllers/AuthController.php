<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth()
    {
        return view('auth.login');
    }

    public function auth_post(Request $request)
    {
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        toast('Berhasil','success');

        return redirect()->intended('home');
    }

    toast('Login gagal','error');

    return redirect('/');
}

public function sign_up()
{
   return view('auth.sign-up');
}

public function post_register(Request $request)
{
 $validatedata = $request->validate([
    'nama_lengkap' => 'required',
    'email' => 'required|unique:users',
    'password' => 'required',
    'rule' => 'required',

]);

 $post = new User;
 $post->nama_lengkap = $request->nama_lengkap;
 $post->email = $request->email;
 $post->password = Hash::make($request->password);
 $post->rule = $request->rule;
 $post->save();
 toast('sign_up berhasil','success');
 return back();

}

public function logout()
{
    Auth::logout();
    toast('logout berhasil','success');
    return redirect('/');
}
}
