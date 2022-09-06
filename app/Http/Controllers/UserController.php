<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // menampilkan semua user
    public function index()
    {
        $users = User::orderBy('id','DESC')->get();
        return view('admin.users', compact('users'));
    }

    // menampilkan halaman tambah user
    public function addUsers()
    {
        return view('admin.users_add');
    }

    // menambahkan user ke database
    public function storeUsers(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect('/admin/users');
    }

    // menampilkan halaman edit
    public function editUsers($id)
    {
        // $user = User::where(id, '$id')->first();
        $user = User::find($id);
        return view('admin.users_edit', compact('user'));
    }

    // menampilkan update data di database
    public function updateUsers(Request $request, $id)
    {
        $user  = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->update();
        return redirect()->back();
    }

    // menghapus data dari database
    public function deleteUsers($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
