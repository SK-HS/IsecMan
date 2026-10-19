<?php

namespace App\Http\Controllers;

use App\Models\AutreFormation;
use App\Models\Filiere;
use App\Models\Formation;
use App\Models\MessageContact;
use App\Models\Niveau;
use App\Models\NosAtout;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function get_index()
    {

    $atouts = NosAtout::get();
    $filieres = Filiere::get();
    $niveaux = Niveau::get();
    $formations = Formation::get();


    return view('pages.index', compact('atouts','filieres','niveaux', 'formations'));
    }

    public function get_a_propos()
    {

        $atouts = NosAtout::get();
        $formations = AutreFormation::get();

    return view('pages.a_propos', compact('atouts','formations'));
    }

    public function get_filieres()
    {

    $filieres = Filiere::get();
    $niveaux = Niveau::get();
    $formations = Formation::get();
    $autreformations = AutreFormation::get();

    return view('pages.filieres', compact('filieres','niveaux', 'formations','autreformations'));
    }
    public function get_tarifs()
    {


    return view('pages.tarifs');
    }
    public function get_formations()
    {

    $filieres = Filiere::get();
    $niveaux = Niveau::get();
    $formations = Formation::get();

    return view('pages.formations', compact('filieres','niveaux', 'formations'));
    }
    public function get_contact()
    {


    return view('pages.contact');
    }

        public function post_contact_message(Request $request)
    {
        // SÉCURITÉ 1 : Piège Honeypot
        // Les vrais utilisateurs ne voient pas ce champ, mais les scripts automatiques le remplissent.
        if ($request->filled('website_url_hp')) {
            return back()->withErrors(['message' => 'Soumission invalide.']);
        }

        // SÉCURITÉ 2 : Validation de la case à cocher avec la règle "accepted"
        $validated = $request->validate([
                        'nom'      => 'required|string|max:100',
                        'telephone'      => 'required|string|max:15',
                        'email'     => 'nullable|email|max:225',
                        'subject'   => 'required|string|max:250',
                        'message'   => 'required|string',
                        'not_robot' => 'accepted', // Force la case à être cochée
                    ], [
                        'not_robot.accepted' => 'Veuillez cocher la case "Je ne suis pas un robot" pour valider le formulaire.',
                        'conditions.required' => 'Vous devez accepter les conditions et termes du contrat.',
                        'conditions.accepted' => 'Vous devez accepter les conditions et termes du contrat.',
                        'nom.required'        => 'Le nom est obligatoire.',
                        'telephone.required'    => 'Le numéro de contact est obligatoire.',
                        'subject.required'      => 'Le sujet est obligatoire.',
                        'message.required'    => 'Le message est obligatoire.',
                        'message.min'         => 'Le message doit contenir au moins 10 caractères.',
                    ]);

        MessageContact::create([
                'nom'=> $validated['nom'],
                'telephone'=> $validated['telephone'],
                'email'=> $validated['email'],
                'subject'=> $validated['subject'],
                'message'=> $validated['message'],
                'statut'=> "NOUVEAU",
            ]);

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }


}
