<?php

namespace App\Http\Controllers;

use App\Models\Presentiel;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Utilisateur;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasseController extends Controller
{
    //
    public function accueil(){
        return view('php1.accueil');
    }
    public function passe(Request $request){
        try{
        $request->validate([
            'nom'=>'required|string',
            'email'=>'required|string',
            'standing'=>'required|string',
            'cni'=>'required|string',
            'arrivee'=>'required|date',
            'depart'=>'required|date',
            'chambre'=>'required|string',
        ]);
        $reservation=new Reservation();
        $reservation->nom=$request->nom;
        $reservation->email=$request->email;
        $reservation->standing=$request->standing;
        $reservation->cni=$request->cni;
        $reservation->arrivee=$request->arrivee;
        $reservation->depart=$request->depart;
        $reservation->chambre=$request->chambre;
        $reservation->save();
        $message=['succes' => true , 'message' =>'votre reservation a ete entregistre avec succes'];
        return redirect('/commande');
    }
    catch(Exception $e){
        $messag=$e->getMessage();

        $message =['succes' => false, 'erreur' => $messag];
        return response()->json($message, 500);

    }
    }
    public function prensentiel(Request $request){
        try{
        $request->validate([
            'nom'=>'required|string',
            'email'=>'required|string',
            'standing'=>'required|string',
            'cni'=>'required|string',
            'arrivee'=>'required|date',
            'depart'=>'required|date',
            'chambre'=>'required|string',
            'paiement'=>'required|string',
        ]);
        $reservation=new Presentiel();
        $reservation->nom=$request->nom;
        $reservation->email=$request->email;
        $reservation->standing=$request->standing;
        $reservation->cni=$request->cni;
        $reservation->arrivee=$request->arrivee;
        $reservation->depart=$request->depart;
        $reservation->chambre=$request->chambre;
        $reservation->paiement=$request->paiement;
        $reservation->save();
        $message=['succes' => true , 'message' =>'votre reservation a ete entregistre avec succes'];
        return back();
    }
    catch(Exception $e){
        $messag=$e->getMessage();

        $message =['succes' => false, 'erreur' => $messag];
        return response()->json($message, 500);

    }
}
public function resto(Request $request){
    try{
    $request->validate([
        'nom'=>'required|string',
        'cni'=>'required|string',
        'complement'=>'required|string',
        'repas'=>'required|string',
        'jour'=>'required|date',
        'heure'=>'required|string',
        'plat'=>'required|string',
        'paiement'=>'required|string',
    ]);
    $reservation=new Restaurant();
    $reservation->nom=$request->nom;
    $reservation->cni=$request->cni;
    $reservation->repas=$request->repas;
    $reservation->complement=$request->complement;
    $reservation->jour=$request->jour;
    $reservation->heure=$request->heure;
    $reservation->plat=$request->plat;
    $reservation->paiement=$request->paiement;
    $reservation->save();
    $message=['succes' => true , 'message' =>'votre reservation a ete entregistre avec succes'];
    return back();
}
catch(Exception $e){
    $messag=$e->getMessage();

    $message =['succes' => false, 'erreur' => $messag];
    return response()->json($message, 500);

}
}
    public function commande(){
        return view('php1.commande');
    }
    public function enregistrepersonnel(){
        return view('php1.ajout');
    }
    public function auth(){
        return view('php1.authentification');
    }
    public function tdbord(){
        return view('php1.tdbord');
    }
    public function enregistrer(Request $request){
        $request->validate([
            'nom'=>'required|string',
            'email'=>'required|string',
            'role'=>'required|string',
            'mdp'=>'required|string',
           
        ]);
        $user=Utilisateur::create([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'role'=>$request->role,
            'mdp'=>bcrypt($request->mdp),
        ]);
        return redirect('/personnel/connect');
    }
    public function connecter(Request $request){

       $request->validate([
            'email'=>'required|string',
            'mdp'=>'required|string',
        ]);
    $pod=Utilisateur::where('email',$request->email)->first();

    if(!$pod || !password_verify($request->mdp,$pod->mdp)){
        return back()->withErrors(['Erreur'=>'Mot De Passe Incorrect']);
    }
else{
    return redirect('/liste');
}
    }
public function liste(){
    $utilisateurs = Utilisateur::all();
    return view('php1.liste',compact('utilisateurs'));
}
public function chambre(){
    return view('php1.chambre');
}
public function evenement(){
    return view('php1.evenement');
}
public function service(){
    return view('php1.service');
}
public function afrique(){
    return view('php1.afrique');
}
public function europe(){
    return view('php1.europe');
}
public function amerique(){
    return view('php1.amerique');
}
public function asi(){
    return view('php1.asi');
}
public function dessert(){
    return view('php1.dessert');
}
public function boisson(){
    return view('php1.boisson');
}
public function aperitif(){
    return view('php1.aperitif');
}
public function stat(){
    return view('php1.stat');
}
public function stat1(){
    return view('php1.stat1');
}
}

