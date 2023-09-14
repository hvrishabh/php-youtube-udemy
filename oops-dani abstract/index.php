<?php

include 'abstract/paymenttypes.abstract.php';
include 'classes/BuyProduct.class.php';


$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();

?>