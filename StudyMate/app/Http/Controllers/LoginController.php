<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    function showLoginForm()
    {
        return view('layouts.login');
    }

    // recupere les donnees du formulaire de login
    function getDataFromLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user === null) {
            return back()->with('status', 'Invalid login details');
        }

        if (Hash::check($request->password, $user->password)) {
            $request->session()->put('LoggedUser', $user->id);
            return redirect('modules');
            //  Route::get('modules/{id}', [ModuleController::class, 'showModules'])->name('modules');
        }

        return back()->with('status', 'Invalid login details');
    }







    // recupere les donnees du formulaire de register
    public function getDataFromRegister(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);

        try {
            // Création d'une nouvelle instance d'utilisateur
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->nomcomplet = $request->name;

            // Enregistrement de l'utilisateur dans la base de données
            $user->save();

            return back()->with('success', 'Inscription réussie !');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur s\'est produite lors de l\'enregistrement de l\'utilisateur');
        }
    }
}
