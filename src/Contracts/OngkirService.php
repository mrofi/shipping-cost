<?php

namespace Mrofi\ShippingCost\Contracts;

interface OngkirService
{
    public function __construct(Address $origin, Address $destination, $weight = 1000);
    
    public function getCost();
}
