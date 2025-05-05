<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Tampilkan form input admin
     */
    public function create()
    {
        return view('admin.admin');
    }

    /**
     * Simpan data admin setelah divalidasi
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => ['required', 'string', 'max:100'],
            'email'  => ['required', 'email'],
            'no_hp'  => ['required', 'numeric'],
            'alamat' => ['required', 'string'],
            'role'   => ['required', 'in:Super Admin,Kasir'],
        ]);

        // Di sini bisa disimpan ke database, misalnya:
        // Admin::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
