<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    // Tampilkan form input admin
    public function create()
    {
        return view('admin.index');
    }

    // Proses penyimpanan data admin
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email|unique:users,email',
            'no_hp'  => 'required|numeric|digits_between:10,15',
            'alamat' => 'required|string|max:255',
            'role'   => 'required|in:Super Admin,Kasir',
        ]);



        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
