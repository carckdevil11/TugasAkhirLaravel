<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    //
    public function index()
    {
        $user_mahasiswa = DB::table('user_mahasiswa')->get();
        $user_civitas = DB::table('user_civitas')->get();
        $user_masyarakat = DB::table('user_masyarakat')->get();

        $user_mahasiswa_fasilitas = DB::table('user_mahasiswa')->where('Topik', 'Fasilitas')->get();
        $user_civitas_fasilitas = DB::table('user_civitas')->where('Topik', 'Fasilitas')->get();
        $user_masyarakat_fasilitas = DB::table('user_masyarakat')->where('Topik', 'Fasilitas')->get();

        $user_mahasiswa_perkuliahan = DB::table('user_mahasiswa')->where('Topik', 'Perkuliahan')->get();
        $user_civitas_perkuliahan = DB::table('user_civitas')->where('Topik', 'Perkuliahan')->get();
        $user_masyarakat_perkuliahan = DB::table('user_masyarakat')->where('Topik', 'Perkuliahan')->get();

        $user_mahasiswa_lk = DB::table('user_mahasiswa')->where('Topik', 'Lembaga Kemahasiswaan')->get();
        $user_civitas_lk = DB::table('user_civitas')->where('Topik', 'Lembaga Kemahasiswaan')->get();
        $user_masyarakat_lk = DB::table('user_masyarakat')->where('Topik', 'Lembaga Kemahasiswaan')->get();

        $userbaru = DB::table('user_mahasiswa','user_civitas','user_masyarkat')->get();

        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            if (Session::get('bagian') == 'All') {
                return view('user_all', compact('user_mahasiswa', 'user_civitas', 'user_masyarakat'));
            } else if (Session::get('bagian') == 'Fasilitas') {
                return view('user_fasilitas', compact('user_mahasiswa_fasilitas', 'user_civitas_fasilitas', 'user_masyarakat_fasilitas'));
            } else if (Session::get('bagian') == 'Perkuliahan') {
                return view('user_perkuliahan', compact('user_mahasiswa_perkuliahan', 'user_civitas_perkuliahan', 'user_masyarakat_perkuliahan'));
            } else if (Session::get('bagian') == 'Lembaga Kemahasiswaan') {
                return view('user_lk', compact('user_mahasiswa_lk', 'user_civitas_lk', 'user_masyarakat_lk'));
            }
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('bagian', $data->bagian);
                Session::put('login', TRUE);
                return redirect('home_user');
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function register(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            if (Session::get('bagian') == 'All') {
                return view('register');
            } else {
                return redirect('/home_user')->with('alert', 'Kamu harus login menggunakan admin');
            }
        }
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'bagian' => 'required|min:3',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',

        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->bagian = $request->bagian;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success', 'Kamu berhasil Register');
    }
}
