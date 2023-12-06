<?php


namespace App\Http\Controllers\Auth;






use App\Models\Association;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AssociationnController extends Controller
{

   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assocs = Association::All();
        return view('auth.associationregister',compact('assocs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assocs = Association::All();
        return view('auth.associationregister',compact('assocs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Association $assocs, Request $request)
    {
        $validated = $request->validate([
            'nom_association' => 'required|unique:associations|max:255',
            'date_creation' => 'required',
           'slogan'=>'|required|string|max:255',
            'email' => 'required|string|unique:associations',
            
            'password'=> 'required|string|min:4',
            'image'=>'|required',

        ]);
        $validated['password'] = Hash::make($validated['password']);
        if ($request->hasFile('image')){
            
            $image =$request->file('image');
             $validated['image'] = $image->store('image','public');
        }
        $assocs = Association::create($validated);
        

     
        return redirect('/assos')->with('message', 'vous venez de vous inscrire en tant que association,connectez vous');
    }
    private function storeImage($image)
    {
        return $image->store('image', 'public');
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nom_association' => 'required|unique:associations|max:255',
            'date_creation' => 'required',
           'slogan'=>'|required|string|max:255',
            'email' => 'required|string|unique:associations',
            
            'password'=> 'required|string|min:4',
            'image'=>'|required',

        ]);
        $validated['password'] = Hash::make($validated['password']);
        if ($request->hasFile('image')){
            
            $image =$request->file('image');
             $validated['image'] = $image->store('image','public');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
