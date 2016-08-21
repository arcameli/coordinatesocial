<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_nmBqbJhBKrhdfbzYriVyiCdy",
  "publishable_key" => "pk_test_kkoq32TRFRxxf5IrQgTZgKhE"
);

\\Stripe\\Stripe::setApiKey($stripe['secret_key']);
?>
