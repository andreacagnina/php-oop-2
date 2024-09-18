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

$dogs = new Category('For Dogs', '<i class="fa-solid fa-dog"></i>');
$cats = new Category('For Cats', '<i class="fa-solid fa-cat"></i>');

var_dump($dogs);
var_dump($cats);


class PetsProduct
{
    public $name;
    public $img;
    public $category;
    public $price;


    function __construct($name, $img, Category $category, $price)
    {
        $this->img = $img;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }
}

class Food extends PetsProduct
{
    public $taste;
    public $ingredients;
    public $weight;

    function __construct($img, $name, Category $category, $taste, $ingredients, $weight, $price)
    {
        parent::__construct($img, $name, $category, $price);
        $this->taste = $taste;
        $this->ingredients = $ingredients;
        $this->weight = $weight;
    }
}

$croccantiniAlSalmone = new Food('https://www.robinsonpetshop.it/22977-thickbox_default/amanova-adult-sensitive-salmone-per-cani.jpg', 'Amanova Adult Sensitive Salmone per Cani', $dogs, 'Salmon', 'Salmone preparato fresco 70% (122 kg di salmone preparato fresco per elaborare 100 kg di prodotto), piselli verdi interi, patata disidratata, proteina di patata, idrolizzato di salmone, lieviti (Saccharomy- ces cerevisiae), fibra di mela, semi di lino (fonte naturale di acidi grassi ω3), minerali, patata dolce, tapioca, olio di pesce (protetto da tocoferoli naturali), glucosamina 1400 mg/kg, kale disidratato, krill antartico, alga kelp, spirulina, cicoria (fonte di FOS) 1000 mg/kg, parete cellulare del lievito idrolizzato (fonte di MOS) 1000 mg/kg, condroitina 1000 mg/kg, zucca disidratata 1000 mg/kg, broccolo disidratato 1000 mg/kg, mirtilli rossi 1000 mg/kg, mirtilli blu 1000 mg/kg, rosmarino 250 mg/kg, yucca schidigera.', '10 KG', '75.99€');
var_dump($croccantiniAlSalmone);


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