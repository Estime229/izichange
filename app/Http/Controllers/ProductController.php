<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }


    public function new()
{
    return view('product.new');
}



    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price_ht' => 'required|numeric',
        ]);

        // Affecter la date actuelle au champ creationDate
        $validatedData['creation_date'] = now();

        // Créer un nouveau produit avec les données validées
        $product = Product::create($validatedData);

        // Rediriger l'utilisateur vers la route /product
        return redirect('/product');
    }


    public function edit($id)
    {
        // Récupérer le produit à modifier
        $product = Product::findOrFail($id);

        // Afficher la vue d'édition avec les données du produit
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        // Récupérer le produit à modifier
        $product = Product::findOrFail($id);
    
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price_ht' => 'required|numeric',
            // Ajouter d'autres règles de validation si nécessaire
        ]);
    
        // Mettre à jour les champs du produit avec les données du formulaire
        $product->update($validatedData);
    
        // Mettre à jour la date de modification avec la date actuelle
        $product->update(['date_update' => now()]);
    
        // Rediriger l'utilisateur vers la route /product
        return redirect('/product');
    }
    
    


}


