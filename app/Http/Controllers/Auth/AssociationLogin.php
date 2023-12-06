<?php

namespace App\Http\Controllers\Auth;

use App\Models\Association;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash ;

class AssociationLogin extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.associationLogin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.associationLogin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Association $assoc,Request $request)
    {
      
           //code...
       
           $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('association')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->back()->with('jeanne', 'vous vous êtes connectés en tant que association');
        }

    
    
     return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        
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

