<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Admin; // Uncomment ini jika menggunakan model Admin untuk simpan ke DB

class AdminController extends Controller
{
    /**
     * Menampilkan form input data admin
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.admin');
    }

    /**
     * Menyimpan data admin setelah validasi
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama'   => ['required', 'string', 'max:100'],
            'email'  => ['required', 'email'],
            'no_hp'  => ['required', 'numeric'],
            'alamat' => ['required', 'string'],
            'role'   => ['required', 'in:Super Admin,Kasir'],
        ]);

        // Jika ingin menyimpan ke database:
        // Admin::create($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
