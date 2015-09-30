<?php
include_once '../vendor/autoload.php';

use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;

$order = new Order();
$factory = new InvoiceFactory();
$invoice = $factory->createFromOrder( $order );

echo '<pre>';
print_r($order);
echo '</pre>';
echo '<pre>';
print_r($factory);
echo '</pre>';
echo '<pre>';
print_r($invoice);
echo '</pre>';
