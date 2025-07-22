<?php

namespace Bit\ArabFaker;

use Bit\ArabFaker\Providers\CompanyProvider;
use Bit\ArabFaker\Providers\DateProvider;
use Bit\ArabFaker\Providers\NameProvider;
use Bit\ArabFaker\Providers\AddressProvider;
use Bit\ArabFaker\Providers\PhoneProvider;
use Bit\ArabFaker\Providers\CultureProvider;


class ArabFaker
{
    protected $nameProvider;
    protected $addressProvider;
    protected $phoneProvider;
    protected $dateProvider;
    protected $companyProvider;
    protected $cultureProvider;


    public function __construct()
    {
        $this->nameProvider = new NameProvider();
        $this->addressProvider = new AddressProvider();
        $this->phoneProvider = new PhoneProvider();
        $this->dateProvider = new DateProvider();
        $this->companyProvider = new CompanyProvider();
        $this->cultureProvider = new CultureProvider();
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

    public function syrianGregorianDate($format = 'd/m/Y')
    {
        return $this->dateProvider->gregorianDate($format);
    }

    public function syrianHijriDate($format = 'd/m/Y')
    {
        return $this->dateProvider->hijriDate($format);
    }

    public function syrianRandomGregorianDate($start = '-10 years', $end = 'now', $format = 'd/m/Y')
    {
        return $this->dateProvider->randomGregorianDate($start, $end, $format);
    }

    public function syrianCompanyName()
    {
        return $this->companyProvider->companyName();
    }

    public function syrianJobTitle()
    {
        return $this->companyProvider->jobTitle();
    }

    public function syrianBusinessType()
    {
        return $this->companyProvider->businessType();
    }

    public function syrianFood()
    {
        return $this->cultureProvider->food();
    }

    public function syrianIdiom()
    {
        return $this->cultureProvider->idiom();
    }

    public function syrianProverb()
    {
        return $this->cultureProvider->proverb();
    }

    public function syrianTraditionalItem()
    {
        return $this->cultureProvider->traditionalItem();
    }

    public function syrianCulturalSentence()
    {
        $food = $this->cultureProvider->food();
        $proverb = $this->cultureProvider->proverb();
        $item = $this->cultureProvider->traditionalItem();

        return "وأنت عم تاكل {$food} جنب {$item}، تذكّر المثل الشامي: \"{$proverb}\".";
    }


}
