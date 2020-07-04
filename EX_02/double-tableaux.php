<?php
$panier = array (
    array( "T-shirt" , 15.5 , 5 ),
    array ("T-shirt vert", 15.50 , 6 ),
    array ("T-shirt argent", 15.50 , 8 ),
    array ( "Short bleu", 16.50 , 5 ),
    array ("Short vert" , 19.99 , 5 ),
    array ("Veste argent", 19.99 , 10 ),
    array ( "Veste argent", 35 , 3 ),
);

function affichage_panier ($panier)
{
    foreach ($panier as $produit)
    {
        echo "<ul>";
        foreach ($produit as $detail)
        {
            echo "<li>" . $detail . "</li>";

        }
    echo "</ul>";
    }
}

affichage_panier($panier);

function calculer_total_panier($panier)
{
    $total = 0;
    foreach ($panier as $produit)
    {
        $total = $total + $produit [1];
    }
    return $total;
}
 echo calculer_total_panier($panier);

calculer_total_panier($panier);