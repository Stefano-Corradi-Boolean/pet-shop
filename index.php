<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/data/db.php';


// filtro l'array generale dei prodotti in base alla classe separando quindi cibo, giochi, accessori e che siano disponibili
$foods = array_filter($products, fn ($product) => get_class($product) === 'Food' && $product->is_available);

$toys = array_filter($products, fn ($product) => get_class($product) === 'Toy' && $product->is_available);

$accessories = array_filter($products, fn ($product) => get_class($product) === 'Accessory' && $product->is_available);

require_once __DIR__ . '/views/partials/head.php';
require_once __DIR__ . '/views/partials/header.php';
require_once __DIR__ . '/views/pages/home.php';
require_once __DIR__ . '/views/partials/footer.php';