<?php

namespace App\Http\Controllers;

use ErrorException;
use App\Models\Users;
use App\Models\Tiketing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Tiketing::all();
        return view('user.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try{
            $image = $request->file('bukti_permasalahan');
            $nama_image = time()."_".$image->getClientOriginalName();
            //isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'public/images/';
            $image->storeAs($tujuan_upload,$nama_image);




            $user = new Tiketing;
            $user->bukti_permasalahan = $nama_image;
            $user->email = $request->email;
            $user->nama = $request->nama;
            $user->lokasi = $request->lokasi;
            $user->jenis_permasalahan = $request->jenis_permasalahan;
            $user->deskripsi_permasalahan = $request->deskripsi_permasalahan;


            // $user->bukti_permasalahan = $request->bukti_permasalahan;

            // $user->bukti_permasalahan = $request->file('bukti_permasalahan')->store('bukti');
            $user->save();

            // dd($user);
            Session::flash('success','Data Berhasil ditambah!');
            // return redirect()->route('user.index');

        }   catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $user = Tiketing::find($id)->first;
        // return view('edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try{
            $image = $request->file('bukti_permasalahan');
            $nama_image = time()."_".$image->getClientOriginalName();
            //isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'public/images/';
            $image->storeAs($tujuan_upload,$nama_image);




            $user = new Tiketing;
            $user->bukti_permasalahan = $nama_image;
            $user->email = $request->email;
            $user->nama = $request->nama;
            $user->lokasi = $request->lokasi;
            $user->jenis_permasalahan = $request->jenis_permasalahan;
            $user->deskripsi_permasalahan = $request->deskripsi_permasalahan;


            // $user->bukti_permasalahan = $request->bukti_permasalahan;

            // $user->bukti_permasalahan = $request->file('bukti_permasalahan')->store('bukti');
            $user->save();

            // dd($user);
            Session::flash('success','Data Berhasil ditambah!');
            // return redirect()->route('user.index');

        }   catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $user = Tiketing::find($id);

            $user->delete($id);

            return redirect()-> route('user.index');
    }
}
