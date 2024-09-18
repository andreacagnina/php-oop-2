<?php
class Category
{
    public $animal;
    public $icon;

    function __construct($animal, $icon)
    {
        $this->animal = $animal;
        $this->icon = $icon;
    }
}

$dogs = new Category('Dogs', '<i class="fa-solid fa-dog"></i>');
$cats = new Category('Cats', '<i class="fa-solid fa-cat"></i>');

var_dump($dogs);
var_dump($cats);

class Type extends PetsProduct
{
    public $food;
    public $toys;
    public $beds;
}
class PetsProduct
{
    public $name;
    public $categories;
    public $type;
    public $price;


    function __construct($name, Category $categories, $type, $price)
    {
        $this->name = $name;
        $this->categories = $categories;
        $this->type = $type;
        $this->price = $price;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop Online</title>
</head>

<body>
    <!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).Cominciate a fare prima le classi. Per ogni classe creata, fate una o due istanze per vedere il risultato con il var_dump. Una volta create tutte le classi verificate che siano coerenti con quanto scritto nell'esercizio, allora create delle strutture dati da mostrare in pagina. -->

</body>

</html>