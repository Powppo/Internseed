<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profil');
    }

    public function simpan(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'asal' => 'required',
            'jurusan' => 'required',
            'pendidikan' => 'required',
            'cv_resume' => 'required',
        ]);

        $user = auth()->user();

        User::where('id', $user->id)->update([
            'name'=> $request->input('nama'),
            'email'=> $request->input('email'),
            'nomor_telepon'=> $request->input('nomor_telepon'),
            'asal'=> $request->input('asal'),
            'jurusan'=> $request->input('jurusan'),
            'pendidikan'=> $request->input('pendidikan'),
            'cv_resume'=> $request->input('cv_resume'),
        ]);

        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        $user->nomor_telepon = $request->input('nomor_telepon');
        $user->asal = $request->input('asal');
        $user->jurusan = $request->input('jurusan');
        $user->pendidikan = $request->input('pendidikan');
        $user->cv_resume = $request->input('cv_resume');
        $user->save();

        return redirect('/profil')->with('success', 'Profil berhasil diperbarui');
        
    }
    public function keluar(Request $request){
        return redirect('/login')->with('success', 'Anda Berhasil Keluar');
    }
}