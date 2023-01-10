<?php

// <!-- L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i
// prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da
// maggio ad agosto). -->
include_once __DIR__ . '/user.php';
include_once __DIR__ . '/registered.php';
include_once __DIR__ . '/notregistered.php';

include_once __DIR__ . '/products.php';
$pippo = new Registered("Dario", "Costantini", "dariocostantini35@yahoo.it");
$discount = $pippo->getDiscount();
var_dump($pippo);
$cuccia = new Product();
$cuccia->setPrice(100, $discount);

?>