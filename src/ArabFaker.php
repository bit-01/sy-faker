<?php

namespace Bit\ArabFaker;

use Bit\ArabFaker\Providers\NameProvider;
use Bit\ArabFaker\Providers\AddressProvider;
use Bit\ArabFaker\Providers\PhoneProvider;

class ArabFaker
{
    protected $nameProvider;
    protected $addressProvider;
    protected $phoneProvider;

    public function __construct()
    {
        $this->nameProvider = new NameProvider();
        $this->addressProvider = new AddressProvider();
        $this->phoneProvider = new PhoneProvider();
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

    public function syrianMobile($withCountryCode = true, $company = null)
    {
        return $this->phoneProvider->mobile($withCountryCode, $company);
    }

    public function syrianLandline($withCountryCode = true)
    {
        return $this->phoneProvider->landline($withCountryCode);
    }

    public function syrianSyriatel($withCountryCode = true)
    {
        return $this->phoneProvider->syriatel($withCountryCode);
    }

    public function syrianMTN($withCountryCode = true)
    {
        return $this->phoneProvider->mtn($withCountryCode);
    }
}
