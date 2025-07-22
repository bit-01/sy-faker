<?php

namespace Bit\ArabFaker;

use Bit\ArabFaker\Providers\NameProvider;
use Bit\ArabFaker\Providers\AddressProvider;

class ArabFaker
{
    protected $nameProvider;
    protected $addressProvider;

    public function __construct()
    {
        $this->nameProvider = new NameProvider();
        $this->addressProvider = new AddressProvider();
    }

    public function syrianName($gender = null)
    {
        return $this->nameProvider->name($gender);
    }

    public function syrianFirstName($gender = null)
    {
        return $this->nameProvider->firstName($gender);
    }

    public function syrianLastName()
    {
        return $this->nameProvider->lastName();
    }

    public function syrianAddress()
    {
        return $this->addressProvider->address();
    }
}
