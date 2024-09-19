<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/Bed.php';

$dogs = new Category('For Dogs', '<i class="fa-solid fa-dog"></i>');
$cats = new Category('For Cats', '<i class="fa-solid fa-cat"></i>');

$croccantiniAlSalmone = new Food('https://www.robinsonpetshop.it/22977-thickbox_default/amanova-adult-sensitive-salmone-per-cani.jpg', 'Amanova Adult Sensitive Salmone per Cani', [$dogs], 'Salmon', 'Salmone preparato fresco 70% (122 kg di salmone preparato fresco per elaborare 100 kg di prodotto), piselli verdi interi, patata disidratata, proteina di patata, idrolizzato di salmone, lieviti (Saccharomy- ces cerevisiae), fibra di mela, semi di lino (fonte naturale di acidi grassi ω3), minerali, patata dolce, tapioca, olio di pesce (protetto da tocoferoli naturali), glucosamina 1400 mg/kg, kale disidratato, krill antartico, alga kelp, spirulina, cicoria (fonte di FOS) 1000 mg/kg, parete cellulare del lievito idrolizzato (fonte di MOS) 1000 mg/kg, condroitina 1000 mg/kg, zucca disidratata 1000 mg/kg, broccolo disidratato 1000 mg/kg, mirtilli rossi 1000 mg/kg, mirtilli blu 1000 mg/kg, rosmarino 250 mg/kg, yucca schidigera.', 10, 'KG', 75.99, 0);

$bacchettaPiuma = new Toy('https://m.media-amazon.com/images/I/61bf1yoHyKL._AC_SL1100_.jpg', 'Giocattolo a bacchetta interattiva in piuma', [$cats], 'Plastic', 'Multicolor', '15 inches', 15.99, 30);

$cucciaMorbida = new Bed('https://i0.wp.com/www.zoologos.net/wp-content/uploads/2020/08/htb1ldyjrfzqk1rjszfoq6zfcxxa3.jpg?fit=800%2C800&ssl=1', 'Cuccia Gatto per Gatti e Cani', [$cats, $dogs], 'Cotton', 'Black', '48x48x48 cm', 52.99, 3);

$Arrayprodotti = [$croccantiniAlSalmone, $bacchettaPiuma, $cucciaMorbida];
