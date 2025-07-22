<?php

namespace Bit\ArabFaker\Providers;

class PhoneProvider
{
    protected $syriatelPrefixes = [
        '093', '098', '099'
    ];
    protected $mtnPrefixes = [
        '094', '095', '096'
    ];
    protected $landlineAreaCodes = [
        '11', // Damascus
        '21', // Aleppo
        '31', // Daraa
        '41', // Hama
        '33', // Homs
        '43', // Latakia
        '53', // Tartous
        '22', // Idlib
        '23', // Deir ez-Zor
        '45', // Al-Hasakah
        '54', // As-Suwayda
        '46', // Raqqa
        '44', // Quneitra
    ];
    protected $countryCode = '+963';

    public function mobile($withCountryCode = true, $company = null)
    {
        $prefix = $this->getMobilePrefix($company);
        $number = sprintf('%03d %04d', rand(100, 999), rand(1000, 9999));
        if ($withCountryCode) {
            return $this->countryCode . ' ' . substr($prefix, 1) . ' ' . $number;
        }
        return $prefix . ' ' . $number;
    }

    public function syriatel($withCountryCode = true)
    {
        return $this->mobile($withCountryCode, 'syriatel');
    }

    public function mtn($withCountryCode = true)
    {
        return $this->mobile($withCountryCode, 'mtn');
    }

    public function landline($withCountryCode = true)
    {
        $area = $this->landlineAreaCodes[array_rand($this->landlineAreaCodes)];
        $number = sprintf('%03d %04d', rand(100, 999), rand(1000, 9999));
        if ($withCountryCode) {
            return $this->countryCode . ' ' . $area . ' ' . $number;
        }
        return '0' . $area . ' ' . $number;
    }

    protected function getMobilePrefix($company = null)
    {
        if ($company === 'syriatel') {
            return $this->syriatelPrefixes[array_rand($this->syriatelPrefixes)];
        } elseif ($company === 'mtn') {
            return $this->mtnPrefixes[array_rand($this->mtnPrefixes)];
        } else {
            $all = array_merge($this->syriatelPrefixes, $this->mtnPrefixes);
            return $all[array_rand($all)];
        }
    }
}
