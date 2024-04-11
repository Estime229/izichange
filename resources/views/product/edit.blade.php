<!-- resources/views/product/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le produit</title>
    <!-- Inclure les liens vers les fichiers CSS et JavaScript si nécessaire -->
</head>
<body>
    <div class="container">
        <h2>Modifier le produit</h2>
        <form action="{{ route('product.update',$product->id) }}" method="POST">
            @csrf
         

            <div class="form-group">
                <label for="name">Nom du produit</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="priceHt">Prix HT</label>
                <input type="number" class="form-control" id="priceHt" name="price_ht" value="{{ $product->price_ht }}" required>
            </div>

            <!-- Autres champs du formulaire (s'ils existent) -->

            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
</body>
</html>
