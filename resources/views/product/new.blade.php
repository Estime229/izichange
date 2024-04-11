<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau produit</title>
</head>
<body>
    <h1>Ajouter un nouveau produit</h1>
    <form action="/product/new" method="post">
        @csrf
        <div>
            <label for="name">Nom du produit :</label>
            <input type="text" id="name" name="name" placeholder="Entrez le nom du produit" required>
        </div>
        <div>
            <label for="priceHt">Prix HT :</label>
            <input type="number" id="priceHt" name="price_ht" placeholder="Entrez le prix HT" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
