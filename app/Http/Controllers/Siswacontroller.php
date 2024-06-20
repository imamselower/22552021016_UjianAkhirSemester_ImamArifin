<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = siswa::orderBy('nomor_induk', 'asc')->paginate(5);
        return \view('siswa/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nomor_induk', $request->nomor_induk);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);
        $request->validate(
            ['nomor_induk'=>'required',
            'nama'=>'required', 'alamat'=>'required',
            'foto'=> 'required|mimes:jpeg,jpg,png,gif',
            'password' => 'required'
        ],
            [
                'nomor_induk.required' => 'Nomor Induk Wajib Diisi',
                'nomor_induk.numeric' => 'Nomor Induk Wajib Diisi Angka',
                'nama.required' => 'Nama Wajib Diisi',
                'alamat.required' => 'Alamat Induk Wajib Diisi',
                'foto.required' => 'silahkan masukkan foto',
                'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG dan GIF'
            ]
        );
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_file ->move(public_path('foto'),$foto_nama);

        $data = [
            'nomor_induk' => $request->input('nomor_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'foto' => $foto_nama,
            'password' =>Hash::make($request->input('password'))
        ];
        siswa::create($data);
        return redirect('siswa')->with('succes', 'Berhasil Memasukkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = siswa::where('nomor_induk',$id)->first();
        return view('siswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = siswa::where('nomor_induk',$id)->first();
        return view('siswa.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            ['nama'=>'required', 'alamat'=>'required', ],
            [
                'nomor_induk.numeric' => 'Nomor Induk Wajib Diisi Angka',
                'nama.required' => 'Nama Wajib Diisi',
                'alamat.required' => 'Alamat Induk Wajib Diisi',
            ]
        );
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpeg,jpg,png,gif'
            ],[
                'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG dan GIF'
            ]);
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".". $foto_ekstensi;
            $foto_file ->move(public_path('foto'),$foto_nama);
            // sudah terupload ke direktori

            $data_foto = siswa::where('nomor_induk',$id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto);

            // $data = [
            //     'foto' => $foto_nama
            // ];
            $data['foto'] = $foto_nama;
        }

        siswa::where('nomor_induk',$id)->update($data);
        return redirect('/siswa')->with('succes','Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = siswa::where('nomor_induk',$id)->first();
        File::delete(public_path('foto').'/'.$data->foto);
        siswa::where('nomor_induk',$id)->delete();
        return redirect('/siswa')->with('Berhasil', 'Berhasil Hapus Data');
    }
}
