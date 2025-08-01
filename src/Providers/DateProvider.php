<?php

namespace Bit\SyFaker\Providers;

use IntlDateFormatter;
use DateTime;
use Alkoumi\LaravelHijriDate\Hijri;

/**
 * Class DateProvider
 *
 * Provides localized Gregorian and Hijri date formatting for Arab locales.
 * Includes options for current and randomly generated dates.
 *
 * @package Bit\SyFaker\Providers
 * @license MIT
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class DateProvider
{
    /**
    * Get the current Gregorian date in the given format and locale.
    *
    * @param string $format Optional. Date format pattern. Default 'd/m/Y'.
    * @param string $locale Optional. Locale for formatting. Default 'ar_SY'.
    *
    * @return bool|string Formatted Gregorian date.
    */
    public function gregorianDate(string $format = 'd/MM/Y', string $locale = 'ar_SY'): bool|string
    {
        $date = new DateTime();
        $formatter = new IntlDateFormatter($locale, timeType: IntlDateFormatter::NONE, pattern: $format);
        return $formatter->format($date);
    }

    /**
    * Get the current Hijri date in the given format.
    *
    * @param string $format Optional. Hijri date format. Default 'd/m/Y'.
    * @param string $locale Optional. Not used but included for interface consistency. Default 'ar_SY'.
    *
    * @return string Formatted Hijri date.
    */
    public function hijriDate(string $format = 'd/m/Y', string $locale = 'ar_SY'): string
    {
        return Hijri::Date($format);
    }

    /**
    * Get a random Gregorian date between two time ranges.
    *
    * @param string $start  Optional. Start date string. Default '-10 years'.
    * @param string $end    Optional. End date string. Default 'now'.
    * @param string $format Optional. Date format pattern. Default 'd/m/Y'.
    * @param string $locale Optional. Locale for formatting. Default 'ar_SY'.
    *
    * @return string Formatted random Gregorian date.
    */
    public function randomGregorianDate(string $start = '-10 years', string $end = 'now', string $format = 'd/m/Y', string $locale = 'ar_SY')
    {
        $timestamp = mt_rand(strtotime($start), strtotime($end));
        $date = (new DateTime())->setTimestamp($timestamp);
        $formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        $formatter->setPattern($format);
        return $formatter->format($date);
    }

    /**
    * Get a random Hijri date between two time ranges.
    *
    * @param string $start  Optional. Start date string. Default '-10 years'.
    * @param string $end    Optional. End date string. Default 'now'.
    * @param string $format Optional. Date format pattern. Default 'd/m/Y'.
    *
    * @return string Formatted random Gregorian date.
    */
    public function randomHijriDate(string $start = '-10 years', string $end = 'now', string $format = 'd/m/Y')
    {
        $timestamp = mt_rand(strtotime($start), strtotime($end));
        $gregorian = date('Y-m-d', $timestamp); // Format for Hijri::Date
        return Hijri::Date($format, $gregorian);
    }
}
