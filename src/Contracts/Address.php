<?php

namespace Mrofi\ShippingCost\Contracts;

interface Address
{
    public function getState();
    
    public function getProvince();
 
    public function getCity();

    public function getSubdistrict();
 
    public function getPostcode();
}
