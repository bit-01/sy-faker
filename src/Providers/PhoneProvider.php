<?php

namespace Bit\ArabFaker\Providers;

/**
 * Class PhoneProvider
 *
 * Generates random Syrian phone numbers for mobile (Syriatel, MTN) and landline formats.
 *
 * @package Bit\ArabFaker\Providers
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class PhoneProvider
{
    /**
     * Syriatel mobile prefixes.
     *
     * @var string[]
     */
    protected $syriatelPrefixes = [
        '093', '098', '099'
    ];

    /**
     * MTN mobile prefixes.
     *
     * @var string[]
     */
    protected $mtnPrefixes = [
        '094', '095', '096'
    ];

    /**
     * Landline area codes by region.
     *
     * @var string[]
     */
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

    /**
     * Country code for Syria.
     *
     * @var string
     */
    protected $countryCode = '+963';

    /**
     * Generate a mobile phone number for a given company.
     *
     * @param bool        $withCountryCode Optional. Whether to include country code. Default true.
     * @param string|null $company         Optional. 'syriatel', 'mtn', or null for random. Default null.
     *
     * @return string Mobile phone number.
     */
    public function mobile(bool $withCountryCode = true, string|null $company = null|'syriatel'|'mtn'): string
    {

        $prefix = $this->getMobilePrefix($company);
        $number = sprintf('%03d %04d', rand(100, 999), rand(1000, 9999));

        if ($withCountryCode) {
            return $this->countryCode . ' ' . substr($prefix, 1) . ' ' . $number;
        }

        return $prefix . ' ' . $number;

    }

    /**
     * Generate a Syriatel mobile number.
     *
     * @param bool $withCountryCode Optional. Whether to include country code. Default true.
     *
     * @return string Syriatel number.
     */
    public function syriatel(bool $withCountryCode = true): string
    {

        return $this->mobile($withCountryCode, 'syriatel');

    }

    /**
     * Generate an MTN mobile number.
     *
     * @param bool $withCountryCode Optional. Whether to include country code. Default true.
     *
     * @return string MTN number.
     */
    public function mtn(bool $withCountryCode = true): string
    {

        return $this->mobile($withCountryCode, 'mtn');

    }

    /**
     * Generate a landline phone number.
     *
     * @param bool $withCountryCode Optional. Whether to include country code. Default true.
     *
     * @return string Landline phone number.
     */
    public function landline(bool $withCountryCode = true): string
    {

        $area = $this->landlineAreaCodes[array_rand($this->landlineAreaCodes)];
        $number = sprintf('%03d %04d', rand(100, 999), rand(1000, 9999));

        if ($withCountryCode) {
            return $this->countryCode . ' ' . $area . ' ' . $number;
        }

        return '0' . $area . ' ' . $number;

    }

    /**
     * Get a random mobile prefix based on company.
     *
     * @param string|null $company Optional. 'syriatel', 'mtn', or null. Default null.
     *
     * @return string Mobile prefix.
     */
    protected function getMobilePrefix(string|null $company = null|'syriatel'|'mtn'): string
    {

        if ($company === 'syriatel') {
            return $this->syriatelPrefixes[array_rand($this->syriatelPrefixes)];
        }

        if ($company === 'mtn') {
            return $this->mtnPrefixes[array_rand($this->mtnPrefixes)];
        }

        $all = array_merge($this->syriatelPrefixes, $this->mtnPrefixes);
        return $all[array_rand($all)];

    }
}
