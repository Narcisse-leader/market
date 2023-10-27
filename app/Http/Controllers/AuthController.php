<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Professeur;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required'
        ]);

        $Client = Client::where('username', $request['username'])->first();

        if ($Client) {
            if (Hash::check($request['password'], $Client['password'])) {
                // $request->session()->put('user', $request);
                return redirect()->route('recycle.user');
            } else {
                return back()->with('fail', 'Mot de passe est incorrect.');
            }
        } else {
            return back()->with('fail', 'Utilisateur non trouvé.');
        }
    }

    public function registerView()
    {
        return view("recycle.register");
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required|min:8',
            'email' => 'email|required',
            'confirmer' => 'string|required'
        ]);

        if ($request->confirmer == $request->password) {

            Client::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email

            ]);
        } else {
            return redirect()->back()->with('error');
        }
        return view('recycle.user');
    }

    public function loginView()
    {
        return view("recycle.login");
    }
}
