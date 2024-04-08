<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use ErrorException;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {




            $admin = new Admin;
            $admin->tanggal = $request->tanggal;
            $admin->nama_petugas = $request->nama_petugas;
            $admin->nomor_etiket = $request->nomor_etiket;
            $admin->diagnosa = $request->diagnosa;
            $admin->kategori_permasalahan = $request->kategori_permasalahan;
            $admin->solusi = $request->solusi;
            $admin->lanjutan = $request->lanjutan;
            $admin->save();

            return redirect()->route('admin.index');

        } catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $admin = Admin::find($id)->first;
        // return view('edit', compact('admin'));
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
        try {




            $admin = new Admin;
            $admin->tanggal = $request->tanggal;
            $admin->nama_petugas = $request->nama_petugas;
            $admin->nomor_etiket = $request->nomor_etiket;
            $admin->diagnosa = $request->diagnosa;
            $admin->kategori_permasalahan = $request->kategori_permasalahan;
            $admin->solusi = $request->solusi;
            $admin->lanjutan = $request->lanjutan;
            $admin->save();

            return redirect()->route('admin.index');

        } catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::query()->find($id);

        $admin->delete($id);

        return redirect()-> route('admin.index');
    }


}
