<?php

namespace App\Http\Controllers;
use App\Http\Controllers\auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function Index(){
        return view('sesi/index');
    }

    function login (request $request){
        Session::flash('email', $request->email);
    $request->validate([
        'email'=>'required',
        'password'=>'required'
    ],[
        'email.required'=>'email wajib diisi',
        'password.required'=>'Password Wajib Diisi',
    ]);

    $infologin = [
        'email'=>$request->email,
        'password'=>$request->password
    ];

    if(FacadesAuth::attempt($infologin)){
        // kalau otentikasi sukses
        return redirect('siswa')->with('success','Berhasil Login');
    }else{
        // Kalau otentikasi gagal
        // return 'gagal';
        return redirect('/sesi')->withErrors('Username Dan Password Tidak Valid');
    }
    }

    function logout (){
        FacadesAuth::logout();
        return redirect('/')->with('success','berhasil logout');
    }

    function register () {
        return view('sesi/register');
    }

    function create(request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
    $request->validate([
        'name'=> 'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:6'
    ],[
        'name.required' => 'Nama Wajib Diisi',
        'email.required'=>'email wajib diisi',
        'email.email'=>'silahkan masukkan email yang valid',
        'email.unique'=>'Email Telah Terdaftar',
        'password.required'=>'Password Wajib Diisi',
        'password.min'=>'Minimal 6 Karakter Password',
    ]);

    $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=> Hash::make($request->password)
    ];

    User::create($data);
    $infologin = [
        'email'=>$request->email,
        'password'=>$request->password
    ];

    if(FacadesAuth::attempt($infologin)){
        // kalau otentikasi sukses
        return redirect('siswa')->with('success', FacadesAuth::user()->name.'Berhasil Login');
    }else{
        // Kalau otentikasi gagal
        // return 'gagal';
        return redirect('/sesi')->withErrors('Username Dan Password Tidak Valid');
    }
    }
}
