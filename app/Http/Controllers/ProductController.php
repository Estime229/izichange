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




}


