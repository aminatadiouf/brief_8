<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Evenement;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Validation\Rules\Enum;

class evenementController extends Controller
{
    public function __construct()
    {
     $this->middleware('association');
     $this->middleware('auth')->only('afficher');
    }
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assocs = Association::All();
        $events = Evenement::All();
        return view('evenement',compact('events','assocs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assocs = Association::All();
        $events = Evenement::All();
        return view('evenement',compact('events','assocs'));
    }

    public function edit(Evenement $events,Association $assocs)
    {
       
        $assocs = Auth()->guard('association')->user()->id;
       
        $events = Evenement::first();
       
       return view('modifierEvenement',compact('events','assocs'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Evenement $events, Request $request)
    {
        try {
            //code...
        

        $validated = $request->validate([
            'libelle'=>'|required|string|',
            'date_limit_inscription'=>'|required|date',
            'description'=>'|required|string',
            'date_de_l_evenement'=>'|required',
            'image'=>'|required|',
            'statut' => 'required|',
            'association_id'=>'required'

        ]);
       
        if ($request->hasFile('image')){
            
            $image =$request->file('image');
             $validated['image'] = $image->store('image','public');
        }
        $validated['association_id'] = $request->input('association_id');

        $events=Evenement::create($validated);
      
        return redirect()->back()->with('even','événement enregistré avec succés');

    } catch (\Exception $e) {
        dd($e->getMessage());
    }


    }
    private function storeImage($image)
    {

        return $image->store('image','public');
    }

    /**
     * Display the specified resource.
     */
   


    public function Afficher()
    {
        // dd($events);
        $events=Evenement::All();   
        return view('front.listeEvenement',compact('events'));
         
       
    }
    public function Lister(Evenement $events,Association $assocs)
    {
        try {
        $event =Evenement::find($events);
        $assocs=Association::All(); 
        return view('front.listeEvenement',compact('events','assocs'));
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
   

    /**
     * Update the specified resource in storage.
     */



    public function update(Request $request,Evenement $events )
    {
        
        $validated = $request->validate([
            'libelle'=>'|required|string|',
            'date_limit_inscription'=>'|required|date',
            'description'=>'|required|string',
            'date_de_l_evenement'=>'|required',
            'image'=>'|required|',
            'statut' => 'required',
            'association_id'=>'required'

        ]);
       
        if ($request->hasFile('image')){
            
            $image =$request->file('image');
             $validated['image'] = $image->store('image','public');
        }
        
        $events->update($validated);
        return redirect()->back()->with('modif', 'l\'evenement a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $events)
    {
       
      
        if($events)
    { 
         $events->delete();
        }
        
        redirect()->route('afficheListe')->with('suppression réussie');
 
 
}
}
