<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Mail\EnvoieMail;
use App\Models\Inscription;
use App\Models\Location;
use App\Models\Locations;
use App\Models\Newsletter;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;
use PHPUnit\Event\Subscriber as EventSubscriber;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*   public function post(Request $request)
    {
         $request->validate([
            'mail' => 'required'
        ]);
       
        Newsletter::create([
            'mail' => $request->mail,
        ]);

      

        return redirect()->back()->with('success', 'Vous vous êtes enregistré avec succès. Veuillez vérifier votre dossier spam.');
    } */
    public function post_(NewsletterRequest $request)
    {
        $validated = $request->validated();

        // Maybe you need more validation rules???
        Newsletter::create([
            'mail' => $validated['mail'],
        ]);


        return redirect()->back()->with('success', 'You have successfully subscribed. Please check your email spam folder.');
    }

    /* public function verify(string $hash)
 {
     $subscriber = Newsletter::where('hash', $hash)->firstOrFail();

     $subscriber->update([
         'hash' => null,
         'verified_at' => now()
     ]);

     return redirect('/')
         ->with('success', 'Vous avez vérifié avec succès votre emai.');
 } */




    public function search(Request $request)
    {
        $query = Produit::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nom', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        $products = $query->get();

        return view('search', compact('products'));
    }

    
    public function envoiedemail(Request $request)
    {
        $validate = $request->validate([
            'nom_prenom' => 'required',
            'email' => 'required',
            'sujet' => 'required',
            'massage' => 'required',

        ]);
        $contact = Location::create($validate);
        Mail::to('beresaf@gmail.com')->send(new EnvoieMail($request->all()));
        return redirect()->back()->with('success', 'Votre message à bien été envoyer');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:5020',
        ]);
        $image = $request->file('image');

        $image_name = time() . '.' . $image->extension();

        $image->move(public_path('/uploads/products/'), $image_name);

        Produit::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'description_complete' => $request->description_complete,
            'prix' => $request->prix,
            'image' => '/uploads/products/' . $image_name,
        ]);


        return redirect()->back()->with('success', 'produit ajouter avec success');
    }

    public function detail($id)
    {
        $produit = Produit::findOrFail($id);
        return view('detail', compact('produit'));
    }

    public function welcome()
    {
        $welcome = Produit::latest()->take(3)->get();
        return view('welcome', ['welcome' => $welcome]);
    }




    public function voiture(Request $request)
    {
        $query = Produit::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nom', 'like', "%{$search}%");
            /*  ->orWhere('description', 'like', "%{$search}%"); */
        }

        $voiture = $query->paginate(8);
        return view('voiture', compact('voiture'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $produits = Produit::findOrFail($id);
        $message = "Je voudrai reserver le vehicule " . $produits->nom . "au prx de " . $produits->prix . ". Pouvez-vous me donner quelques détails? ";
        $numero = "+22995729634";
        $whatsappUrl = "https://wa.me/{$numero}/?text=" . urlencode($message);
        return redirect()->away($whatsappUrl);
    }
    /*  public function vue(Request $request, $id)
    {
        $request->validate([
            "nom_client" => "required",
            "email_client" => "required",
            "adress_client" => "required",
            "ville_client" => "required",
        ]);

        Inscription::create([
            'nom_client' => $request->nom_client,
            'email_client' => $request->email_client,
            'adress_client' => $request->adress_client,
            'ville_client' => $request->ville_client,
            'produit_id' => $id,
        ]);

        return redirect()->back()->with('success', 'Soumission avec succès');
    } */

    /**
     * Show the form for editing the specified resource.
     */




    public function edit($id)
    {
        $produits = Produit::findOrFail($id);
        return view('modifier', compact('produits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $produits = Produit::findOrFail($id);
        $request->validate([
            "nom" => "required",
            "prix" => "required",
            "image" => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            "description" => "required",
            "description_complete" => "required",
        ]);
        $produits->nom = $request->nom;
        $produits->prix = $request->prix;
        $produits->description = $request->description;
        $produits->description_complete = $request->description_complete;
        $produits->nom = $request->nom;

        if ($request->hasFile('image')) {
            if ($produits->image && Storage::disk('public')->exists($produits->image)) {
                Storage::disk('public')->delete($produits->image);
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/news'), $imageName);

            $produits->image = '/uploads/news/' . $imageName;
        }
        $produits->save();
        return redirect()->route('tableau')->with('success', 'produit modifié avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produits = Produit::findorfail($id);
        $produits->delete($id);
        return redirect()->back()->with('success', 'produit supprimé avec success');
    }
    public function tableau()
    {
        $tableau = Produit::all();
        return view('tableau', ['tableau' => $tableau]);
    }
}
