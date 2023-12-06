<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //code...
       
        $validated = $request->validate([
            'name' => 'required|string|unique:users|max:255',
            'email' => 'required|string|unique:users',
            'tel' =>'required|string|unique:users',
            'password'=> 'required|string|min:4',
            //'Confirmed_password'=>'required|string|min:4',
        ]);

        $validated['password'] = Hash::make($validated['password']);
     
   
        $user = User::create($validated);
        return redirect('/login')->with('status','votre inscription est réussi');
    } catch (\Exception $e) {
        // Afficher les détails de l'erreur
        dd($e->getMessage());
    }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
