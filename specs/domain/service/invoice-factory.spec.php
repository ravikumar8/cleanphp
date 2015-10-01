<?php

use Webloper\CleanPhp\Invoicer\Domain\Entity\Order;

describe('InvoiceFactory', function () {
    describe('->createFromOrder()', function () {
        it('should return an order object', function () {
            $order = new Order();
        });
    });
});
