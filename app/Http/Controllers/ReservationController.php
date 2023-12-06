<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\RefusedReservation;
use App\Notifications\acceptedReservation;

class ReservationController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }

    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $events = Evenement::find($id);
        return view('reservation.reservationUser',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     */

     public function create(Request $request, Reservation $reserv, User $users, Evenement $events)
     {

         $reserv = Reservation::all();
     
         return view('reservation.reservationUser', compact('reserv', 'assocs', 'events', 'users'));
     }
     


    /**
     * Store a newly created resource in storage.
     */
//     public function store(Request $request)     { 
//  $user = Auth::user();    
//  $events = Evenement::all();

//  $reserv = new Reservation();
    
//     // Check if evenement_id exists in the request and if it's a valid numeric value
//     if ($request->has('evenement_id') && is_numeric($request->evenement_id)) {
//         $reserv->evenement_id = $request->evenement_id;
//     } else {
//         // If evenement_id is not valid, you may want to handle this case appropriately
//         // For now, I'm setting it to a default value, but you may want to adjust this
//         $reserv->evenement_id ; // Set to a default value or handle it according to your logic
//     }

//     $reserv->user_id = $user->id;
//     $reserv->nombre_de_place = $request->nombre_de_place;
//     $reserv->statut_recervation = $request->statut_recervation;

//     $reserv->save();
       
     
  
//           return redirect()->back()->with('success', 'Réservation effectuée avec succès vous receverez un email de confirmation.');
//       }


    public function store(Request $request)
    {
        try {
            

        
        $validated = $request->validate([


            'nombre_de_place'=>'|required|max:5',
            'statut_recervation'=>'|required|',
            'evenement_id'=>'|required|',
      

        ]);
             
        dd($validated['evenement_id']);
        // Reservation::create([
        //     'nombre_de_place' =>$validated['nombre_de_place'],
    
        //     'statut_recervation' =>$validated['statut_recervation'],
        //     'evenement_id' =>$events->id ,
    
        //     'user_id' => auth()->user()->id,
   
        //   ]);
       
        $validated['user_id'] = auth()->user()->id;
       
        $validated['evenement_id'] = $request->input('evenement_id');

   


        $reserv=Reservation::create($validated);
        // dd('user_id');
        return redirect()->back()->with('pour', 'vous avez réservé à cette événement');
        //code...
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
    }

    

    
    
    /**
     * Display the specified resource.
     */
// public function affiche($reserv)
// {
    
  
//     return view('reservation.listeReservation',compact('reserv'));
// }

    public function show($reserv,$events)
    { 
        try {
         
        // dd($reserv);
      
        $reserv =Reservation::find($reserv);
        
          $events=Evenement::All();
        return view('reservation.listeReservation',compact('reserv','events'));
           //code...
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
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


    
 
    public function accepteReservation($id)
    {
        try {
            $reserv = Reservation::find($id);
    
            if (!$reserv) {
                return redirect()->back()->with('error', 'La réservation n\'existe pas.');
            }
    
            if ($reserv->statut_recervation === 'accepte') {
                return redirect()->back()->with('error', 'Cette réservation a déjà été acceptée.');
            }
    
            $reserv->statut_recervation = 'accepte';
            $reserv->save();
    
            $reserv->user->notify(new acceptedReservation());
    
            return redirect()->back()->with('success', 'Réservation acceptée avec succès.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function refusedReservation($id)
    {
        try {
            $reserv = Reservation::find($id);
    
            if (!$reserv) {
                return redirect()->back()->with('error', 'La réservation n\'existe pas.');
            }
    
            if ($reserv->statut_recervation === 'decline') {
                return redirect()->back()->with('error', 'Cette réservation a déjà été acceptée.');
            }
    
            $reserv->statut_recervation = 'decline';
            $reserv->save();
    
            $reserv->user->notify(new RefusedReservation());
    
            return redirect()->back()->with('success', 'Réservation acceptée avec succès.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
