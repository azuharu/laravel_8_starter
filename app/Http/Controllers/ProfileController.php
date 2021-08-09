<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', [
            'user' => User::findOrFail(Auth::id())
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'password' => 'required',
            'avatar' => 'required|file|max:2000|mimes:jpg,bmp,png'
        ]);

        $user = User::where('id', Auth::id())->first();

        $user->name = $request->name;
        $user->password = Hash::make($request->password);

        $uploadedFile = $request->file('avatar');
        //dd($uploadedFile);

        // // mendapatkan nama berkas asli
        // $request->file('file')->getClientOriginalName();
        // // mendapatkan ektensi berkas
        // $request->file('file')->getClientOriginalExtension();
        // // mendapatkan ukuran berkas
        // $request->file('file')->getClientSize();

        $path = $uploadedFile->store('public/avatars');

        $old_file = $user->avatar;

        $user->avatar = $path;
        $user->save();

        if ($old_file !== null) {
            Storage::delete($old_file);
        }

        return redirect()->route('profile.edit')->with('success', 'Profile has been successfully updated');
    }
}
