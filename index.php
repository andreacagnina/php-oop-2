<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/price.php';
// class Category
// {
//     public $animal;
//     public $icon;

//     function __construct($animal, $icon)
//     {
//         $this->animal = $animal;
//         $this->icon = $icon;
//     }
// }

// $dogs = new Category('For Dogs', '<i class="fa-solid fa-dog"></i>');
// $cats = new Category('For Cats', '<i class="fa-solid fa-cat"></i>');

// var_dump($dogs);
// var_dump($cats);


// class PetsProduct
// {
//     public $img;
//     public $name;
//     public $categories = [];
//     public $price;
//     public $pieces;


//     function __construct($img, $name, array $categories, $price, $pieces)
//     {
//         $this->img = $img;
//         $this->name = $name;
//         $this->categories = $categories;
//         $this->price = $price;
//         $this->pieces = $pieces;
//     }

//     function getAllCategories()
//     {
//         $caneEgatto = [];
//         foreach ($this->categories as $category) {
//             $caneEgatto[] = $category->animal . " " . $category->icon;
//         }
//         return implode(' and ', $caneEgatto);
//     }

//     function getProductDetails()
//     {
//         return '';
//     }

//     public function setPieces($stock)
//     {
//         if ($stock == 0) {
//             return $stock = 'Sold Out';
//         } else if ($stock < 5) {
//             return $stock = 'Few';
//         } else {
//             return $stock = 'In stock';
//         }
//     }
// }

// class Food extends PetsProduct
// {
//     public $taste;
//     public $ingredients;
//     public $weight;

//     function __construct($img, $name, array $category, $taste, $ingredients, $weight, $price, $pieces)
//     {
//         parent::__construct($img, $name, $category, $price, $pieces);
//         $this->taste = $taste;
//         $this->ingredients = $ingredients;
//         $this->weight = $weight;
//     }
//     function getProductDetails()
//     {
//         return "<p><strong>Taste:</strong> {$this->taste}</p>
//                 <p class='ovf'><strong>Ingredients:</strong> {$this->ingredients}</p>
//                 <p><strong>Weight:</strong> {$this->weight}</p>";
//     }
// }

// $croccantiniAlSalmone = new Food('https://www.robinsonpetshop.it/22977-thickbox_default/amanova-adult-sensitive-salmone-per-cani.jpg', 'Amanova Adult Sensitive Salmone per Cani', [$dogs], 'Salmon', 'Salmone preparato fresco 70% (122 kg di salmone preparato fresco per elaborare 100 kg di prodotto), piselli verdi interi, patata disidratata, proteina di patata, idrolizzato di salmone, lieviti (Saccharomy- ces cerevisiae), fibra di mela, semi di lino (fonte naturale di acidi grassi ω3), minerali, patata dolce, tapioca, olio di pesce (protetto da tocoferoli naturali), glucosamina 1400 mg/kg, kale disidratato, krill antartico, alga kelp, spirulina, cicoria (fonte di FOS) 1000 mg/kg, parete cellulare del lievito idrolizzato (fonte di MOS) 1000 mg/kg, condroitina 1000 mg/kg, zucca disidratata 1000 mg/kg, broccolo disidratato 1000 mg/kg, mirtilli rossi 1000 mg/kg, mirtilli blu 1000 mg/kg, rosmarino 250 mg/kg, yucca schidigera.', '10 KG', '75.99€', 0);
//var_dump($croccantiniAlSalmone);

// class Toy extends PetsProduct
// {
//     public $material;
//     public $color;
//     public $dimensions;

//     function __construct($img, $name, array $category, $material, $color, $dimensions, $price, $pieces)
//     {
//         parent::__construct($img, $name, $category, $price, $pieces);
//         $this->material = $material;
//         $this->color = $color;
//         $this->dimensions = $dimensions;
//     }
//     function getProductDetails()
//     {
//         return "<p><strong>Main Material:</strong> {$this->material}</p>
//                 <p><strong>Color:</strong> {$this->color}</p>
//                 <p><strong>Dimensions:</strong> {$this->dimensions}</p>";
//     }
// }

// $bacchettaPiuma = new Toy('https://m.media-amazon.com/images/I/61bf1yoHyKL._AC_SL1100_.jpg', 'Giocattolo a bacchetta interattiva in piuma', [$cats], 'Plastic', 'Multicolor', '15 inches', '15€', 30);
//var_dump($bacchettaPiuma);

// class Bed extends PetsProduct
// {
//     public $material;
//     public $color;
//     public $dimensions;

//     function __construct($img, $name, array $category, $material, $color, $dimensions, $price, $pieces)
//     {
//         parent::__construct($img, $name, $category, $price, $pieces);
//         $this->material = $material;
//         $this->color = $color;
//         $this->dimensions = $dimensions;
//     }
//     function getProductDetails()
//     {
//         return "<p><strong>Main Material:</strong> {$this->material}</p>
//                 <p><strong>Color:</strong> {$this->color}</p>
//                 <p><strong>Dimensions:</strong> {$this->dimensions}</p>";
//     }
// }
// $cucciaMorbida = new Bed('https://i0.wp.com/www.zoologos.net/wp-content/uploads/2020/08/htb1ldyjrfzqk1rjszfoq6zfcxxa3.jpg?fit=800%2C800&ssl=1', 'Cuccia Gatto per Gatti e Cani', [$cats, $dogs], 'Cotton', 'Black', '48x48x48 cm', '50€', 3);
//var_dump($cucciaMorbida);

// $Arrayprodotti = [$croccantiniAlSalmone, $bacchettaPiuma, $cucciaMorbida];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Shop Online</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mb-2">
                <h1 class="text-center"><u>Shop Online</u></h1>
            </div>
        </div>
        <div class="row">

            <?php foreach ($Arrayprodotti as $prodotto) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $prodotto->img ?>" alt="ImgProduct">
                        <hr>
                        <div class="card-body title">
                            <h2 class='text-center'><?php echo $prodotto->name ?></h2>
                        </div>
                        <hr>
                        <div class="card-body details">
                            <p><strong>Price:</strong> <?php echo $prodotto->getPrice() ?></p>
                            <p><strong>Category:</strong> <?php echo $prodotto->getAllCategories() ?></p>
                        </div>
                        <hr>
                        <div class="card-body extra-details">
                            <p><?php echo $prodotto->getProductDetails() ?></p>
                        </div>
                        <hr>
                        <p class="badge rounded-pill <?php echo $prodotto->pieces == 0 ? 'text-bg-danger' : ($prodotto->pieces < 5 ? 'text-bg-warning' : 'text-bg-success') ?>"><?php echo $prodotto->setPieces($prodotto->pieces) ?></p>
                        <hr>
                        <div class="card-body sm">
                            <button type="submit" class="btn btn-primary <?php if ($prodotto->pieces == 0) echo 'disabled' ?>">Buy Now</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>