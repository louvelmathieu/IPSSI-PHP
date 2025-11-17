<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon test PHP</title>
</head>
<body>
<h1>Introduction PHP</h1>
<?php
$produits = [
    ["nom" => "Produit A", "prix" => 20, "stock" => 100],
    ["nom" => "Produit D", "prix" => 1, "stock" => 60],
    ["nom" => "Produit ER", "prix" => 15, "stock" => 62],
    ["nom" => "Produit C", "prix" => 30, "stock" => 75]
];
?>
<table border="1">
    <tr>
        <td>Nom</td>
        <td>Prix en euros</td>
        <td>Stock</td>
    </tr>
    <?php
    foreach ($produits as $produit) {
        echo "<tr><td>" . $produit["nom"] . "</td><td>" . $produit["prix"] . "</td><td>" . $produit["stock"] . "</td></tr>";
    }
    ?>
</table>
</body>
</html>
