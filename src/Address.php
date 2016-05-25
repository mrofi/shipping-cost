<?php

namespace Mrofi\ShippingCost;

use Mrofi\ShippingCost\Contracts\Address as AddressContract;

class Address implements AddressContract
{
    protected $state;
    protected $province;
    protected $city;
    protected $district;
    protected $subdistrict;
    protected $postcode;

    public function __construct($state, $province, $city, $district, $subdistrict, $postcode)
    {
        $this->state = $state;
        $this->province = $province;
        $this->city = $city;
        $this->district = $district;
        $this->subdistrict = $subdistrict;
        $this->postcode = $postcode;
    }

    public function getState()
    {
        return $this->state;
    }
    
    public function getProvince()
    {
        return $this->province;
    }
 
    public function getCity()
    {
        return $this->city;
    }

    public function getDistrict()
    {
        return $this->subdistrict;
    }

    public function getSubdistrict()
    {
        return $this->subdistrict;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }
}
