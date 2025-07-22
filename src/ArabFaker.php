<?php

namespace Bit\ArabFaker;

use Bit\ArabFaker\Providers\CompanyProvider;
use Bit\ArabFaker\Providers\DateProvider;
use Bit\ArabFaker\Providers\NameProvider;
use Bit\ArabFaker\Providers\AddressProvider;
use Bit\ArabFaker\Providers\PhoneProvider;
use Bit\ArabFaker\Providers\CultureProvider;
use Bit\ArabFaker\Providers\TextProvider;

/**
 * Class ArabFaker
 *
 * Facade for generating various types of Arabic (mostly Syrian) fake data.
 *
 * @package Bit\ArabFaker
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class ArabFaker
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
     * ArabFaker constructor.
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
    public function syrianLetter(): string
    {
        return $this->textProvider->letter();
    }

    /**
     * Get a random Arabic word.
     *
     * @return string
     */
    public function syrianWord(): string
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
    public function syrianWords(int $count = 5, bool $asArray = false, string $separator = ' '): array|string
    {
        return $this->textProvider->words($count, $asArray, $separator);
    }

    /**
     * Get a sentence in Syrian dialect, MSA, or mixed.
     *
     * @param string $mode = 'mixed'|'dialect'|'msa'
     *
     * @return string
     */
    public function syrianSentence(string $mode = 'mixed'|'dialect'|'msa'): string
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
    public function syrianSentences(int $count = 3, string $mode = 'mixed'|'dialect'|'msa', bool $asArray = false, string $separator = ' '): array|string
    {
        return $this->textProvider->sentences($count, $mode, $asArray, $separator);
    }

    /**
     * Get a paragraph composed of random Syrian sentences.
     *
     * @param int    $min
     * @param int    $max
     * @param string $mode
     *
     * @return string
     */
    public function syrianParagraph(int $min = 3, int $max = 7, string $mode = 'mixed'|'dialect'|'msa'): string
    {
        return $this->textProvider->paragraph($min, $max, $mode);
    }

    /**
     * Get a Syrian title based on gender.
     *
     * @param string|null $gender = null | 'male' | 'female'
     *
     * @return string
     */
    public function syrianTitle(string|null $gender = null|'male'|'female'): string
    {
        return $this->nameProvider->title($gender);
    }

    /**
     * Get a full Syrian name.
     *
     * @param string|null $gender = null|'male'|'female'
     *
     * @return string
     */
    public function syrianName(string|null $gender = null|'male'|'female'): string
    {
        return $this->nameProvider->name($gender);
    }

    /**
     * Get a Syrian first name.
     *
     * @param string|null $gender = null|'male'|'female'
     *
     * @return string
     */
    public function syrianFirstName(string|null $gender = null|'male'|'female'): string
    {
        return $this->nameProvider->firstName($gender);
    }

    /**
     * Get a Syrian last name.
     *
     * @return string
     */
    public function syrianLastName(): string
    {
        return $this->nameProvider->lastName();
    }

    /**
     * Get a Syrian address.
     *
     * @return string
     */
    public function syrianAddress(): string
    {
        return $this->addressProvider->address();
    }

    /**
     * Get a mobile number from any provider.
     *
     * @param bool        $withCountryCode
     * @param string|null $company = null|'syriatel'|'mtn'
     *
     * @return string
     */
    public function syrianMobile(bool $withCountryCode = true, string|null $company = null|'syriatel'|'mtn'): string
    {
        return $this->phoneProvider->mobile($withCountryCode, $company);
    }

    /**
     * Get a Syrian landline number.
     *
     * @param bool $withCountryCode
     *
     * @return string
     */
    public function syrianLandline(bool $withCountryCode = true): string
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
    public function syrianSyriatel(bool $withCountryCode = true): string
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
    public function syrianMTN(bool $withCountryCode = true): string
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
    public function syrianGregorianDate(string $format = 'd/m/Y'): bool|string
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
    public function syrianHijriDate(string $format = 'd/m/Y'): string
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
    public function syrianRandomGregorianDate(string $start = '-10 years', string $end = 'now', string $format = 'd/m/Y'): string
    {
        return $this->dateProvider->randomGregorianDate($start, $end, $format);
    }

    /**
     * Get a random Syrian company name.
     *
     * @return string
     */
    public function syrianCompanyName(): string
    {
        return $this->companyProvider->companyName();
    }

    /**
     * Get a Syrian job title.
     *
     * @return string
     */
    public function syrianJobTitle(): string
    {
        return $this->companyProvider->jobTitle();
    }

    /**
     * Get a Syrian business type.
     *
     * @return string
     */
    public function syrianBusinessType(): string
    {
        return $this->companyProvider->businessType();
    }

    /**
     * Get a traditional Syrian food name.
     *
     * @return string
     */
    public function syrianFood(): string
    {
        return $this->cultureProvider->food();
    }

    /**
     * Get a common Syrian idiom.
     *
     * @return string
     */
    public function syrianIdiom(): string
    {
        return $this->cultureProvider->idiom();
    }

    /**
     * Get a well-known Syrian proverb.
     *
     * @return string
     */
    public function syrianProverb(): string
    {
        return $this->cultureProvider->proverb();
    }

    /**
     * Get a traditional Syrian item.
     *
     * @return string
     */
    public function syrianTraditionalItem(): string
    {
        return $this->cultureProvider->traditionalItem();
    }

    /**
     * Get a cultural Syrian sentence combining food, item, and proverb.
     *
     * @return string
     */
    public function syrianCulturalSentence(): string
    {
        $food  = $this->cultureProvider->food();
        $proverb = $this->cultureProvider->proverb();
        $item  = $this->cultureProvider->traditionalItem();

        return "وأنت عم تاكل {$food} جنب {$item}، تذكّر المثل الشامي: \"{$proverb}\".";
    }
}
