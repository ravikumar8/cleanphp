<?php
include_once '../vendor/autoload.php';

use Webloper\CleanPhp\Invoicer\Domain\Entity\Order;

$customer = new Order();

echo '<pre>';
print_r( $customer );
echo '</pre>';
