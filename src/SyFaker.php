<?php

namespace Bit\SyFaker;

use Bit\SyFaker\Providers\CompanyProvider;
use Bit\SyFaker\Providers\DateProvider;
use Bit\SyFaker\Providers\NameProvider;
use Bit\SyFaker\Providers\AddressProvider;
use Bit\SyFaker\Providers\PhoneProvider;
use Bit\SyFaker\Providers\CultureProvider;
use Bit\SyFaker\Providers\TextProvider;

/**
 * Class SyFaker
 *
 * Facade for generating various types of Arabic (mostly) fake data.
 *
 * @package Bit\SyFaker
 * @license MIT
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class SyFaker
{
    /**
     * @var TextProvider
     */
    protected $textProvider;

    /**
     * @var NameProvider
     */
    protected $nameProvider;

    /**
     * @var AddressProvider
     */
    protected $addressProvider;

    /**
     * @var PhoneProvider
     */
    protected $phoneProvider;

    /**
     * @var DateProvider
     */
    protected $dateProvider;

    /**
     * @var CompanyProvider
     */
    protected $companyProvider;

    /**
     * @var CultureProvider
     */
    protected $cultureProvider;

    /**
     * SyFaker constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {

        $this->nameProvider = new NameProvider();
        $this->addressProvider = new AddressProvider();
        $this->phoneProvider = new PhoneProvider();
        $this->dateProvider = new DateProvider();
        $this->companyProvider = new CompanyProvider();
        $this->cultureProvider = new CultureProvider();
        $this->textProvider = new TextProvider();

    }

    /**
     * Get a random Arabic letter.
     *
     * @return string
     */
    public function letter(): string
    {
        return $this->textProvider->letter();
    }

    /**
     * Get a random Arabic word.
     *
     * @return string
     */
    public function word(): string
    {
        return $this->textProvider->word();
    }

    /**
     * Get multiple Arabic words.
     *
     * @param int    $count
     * @param bool   $asArray
     * @param string $separator
     *
     * @return string[]|string
     */
    public function words(int $count = 5, bool $asArray = false, string $separator = ' '): array|string
    {
        return $this->textProvider->words($count, $asArray, $separator);
    }

    /**
     * Get a sentence in  dialect, MSA, or mixed.
     *
     * @param string $mode = 'mixed'|'dialect'|'msa'
     *
     * @return string
     */
    public function sentence(string $mode = 'mixed'|'dialect'|'msa'): string
    {
        return $this->textProvider->sentence($mode);
    }

    /**
     * Get multiple sentences.
     *
     * @param int    $count
     * @param string $mode
     * @param bool   $asArray
     * @param string $separator
     *
     * @return string[]|string
     */
    public function sentences(int $count = 3, string $mode = 'mixed'|'dialect'|'msa', bool $asArray = false, string $separator = ' '): array|string
    {
        return $this->textProvider->sentences($count, $mode, $asArray, $separator);
    }

    /**
     * Get a paragraph composed of random  sentences.
     *
     * @param int    $min
     * @param int    $max
     * @param string $mode
     *
     * @return string
     */
    public function paragraph(int $min = 3, int $max = 7, string $mode = 'mixed'|'dialect'|'msa'): string
    {
        return $this->textProvider->paragraph($min, $max, $mode);
    }

    /**
     * Get a  title based on gender.
     *
     * @param string|null $gender = null | 'male' | 'female'
     *
     * @return string
     */
    public function title(string|null $gender = null): string
    {
        return $this->nameProvider->title($gender);
    }

    /**
     * Get a full  name.
     *
     * @param string|null $gender = null
     *
     * @return string
     */
    public function name(string|null $gender = null): string
    {
        return $this->nameProvider->name($gender);
    }

    /**
     * Get a  first name.
     *
     * @param string|null $gender = null
     *
     * @return string
     */
    public function firstName(string|null $gender = null): string
    {
        return $this->nameProvider->firstName($gender);
    }

    /**
     * Get a  last name.
     *
     * @return string
     */
    public function lastName(): string
    {
        return $this->nameProvider->lastName();
    }

    /**
     * Get a  address.
     *
     * @return string
     */
    public function address(): string
    {
        return $this->addressProvider->address();
    }

    /**
     * Get a mobile number from any provider.
     *
     * @param bool        $withCountryCode
     * @param string|null $company = null
     *
     * @return string
     */
    public function mobile(bool $withCountryCode = true, string|null $company = null): string
    {
        return $this->phoneProvider->mobile($withCountryCode, $company);
    }

    /**
     * Get a  landline number.
     *
     * @param bool $withCountryCode
     *
     * @return string
     */
    public function landline(bool $withCountryCode = true): string
    {
        return $this->phoneProvider->landline($withCountryCode);
    }

    /**
     * Get a Syriatel mobile number.
     *
     * @param bool $withCountryCode
     *
     * @return string
     */
    public function syriatel(bool $withCountryCode = true): string
    {
        return $this->phoneProvider->syriatel($withCountryCode);
    }

    /**
     * Get an MTN mobile number.
     *
     * @param bool $withCountryCode
     *
     * @return string
     */
    public function mtn(bool $withCountryCode = true): string
    {
        return $this->phoneProvider->mtn($withCountryCode);
    }

    /**
     * Get current Gregorian date in Arabic format.
     *
     * @param string $format
     *
     * @return string
     */
    public function gregorianDate(string $format = 'd/M/Y'): bool|string
    {
        return $this->dateProvider->gregorianDate($format);
    }

    /**
     * Get current Hijri date.
     *
     * @param string $format
     *
     * @return string
     */
    public function hijriDate(string $format = 'd/m/Y'): string
    {
        return $this->dateProvider->hijriDate($format);
    }

    /**
     * Get a random Gregorian date in Arabic format.
     *
     * @param string $start
     * @param string $end
     * @param string $format
     *
     * @return string
     */
    public function randomGregorianDate(string $start = '-10 years', string $end = 'now', string $format = 'd/M/Y'): string
    {
        return $this->dateProvider->randomGregorianDate($start, $end, $format);
    }

    /**
     * Get a random Hijri date in Arabic format.
     *
     * @param string $start
     * @param string $end
     * @param string $format
     *
     * @return string
     */
    public function randomHijriDate(string $start = '-10 years', string $end = 'now', string $format = 'd/m/Y'): string
    {
        return $this->dateProvider->randomHijriDate($start, $end, $format);
    }

    /**
     * Get a random  company name.
     *
     * @return string
     */
    public function companyName(): string
    {
        return $this->companyProvider->companyName();
    }

    /**
     * Get a  job title.
     *
     * @return string
     */
    public function jobTitle(): string
    {
        return $this->companyProvider->jobTitle();
    }

    /**
     * Get a  business type.
     *
     * @return string
     */
    public function businessType(): string
    {
        return $this->companyProvider->businessType();
    }

    /**
     * Get a traditional  food name.
     *
     * @return string
     */
    public function food(): string
    {
        return $this->cultureProvider->food();
    }

    /**
     * Get a common  idiom.
     *
     * @return string
     */
    public function idiom(): string
    {
        return $this->cultureProvider->idiom();
    }

    /**
     * Get a well-known  proverb.
     *
     * @return string
     */
    public function proverb(): string
    {
        return $this->cultureProvider->proverb();
    }

    /**
     * Get a traditional  item.
     *
     * @return string
     */
    public function traditionalItem(): string
    {
        return $this->cultureProvider->traditionalItem();
    }

    /**
     * Get a cultural  sentence combining food, item, and proverb.
     *
     * @return string
     */
    public function culturalSentence(): string
    {
        $food  = $this->cultureProvider->food();
        $proverb = $this->cultureProvider->proverb();
        $item  = $this->cultureProvider->traditionalItem();

        return "وأنت عم تاكل {$food} جنب {$item}، تذكّر المثل الشامي: \"{$proverb}\".";
    }
}
