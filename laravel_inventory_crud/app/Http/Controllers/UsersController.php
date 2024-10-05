<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtUser = User::with('role')->get();
        return view('pages.user.index', compact('dtUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dtRole = Role::all();

        return view('pages.user.tambah-user', compact('dtRole'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'id_role'=> 'required',
        ]);

        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'id_role' => $request->id_role,
        ]);

        return redirect()->route('user')->with('success', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {

        $user = User::findOrFail($id); // Data user yang sedang diedit
        $dtRole = Role::all(); // Semua role untuk dropdown

        return view('pages.user.edit-user', compact('user', 'dtRole'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = User::findorfail($id);
        $user->update([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'id_role' => $request->id_role,
        ]);

        return redirect()->route('user')->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = User::findorfail($id);
        $user->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
