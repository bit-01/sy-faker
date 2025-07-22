<?php

namespace Bit\ArabFaker\Providers;

use IntlDateFormatter;
use DateTime;
use Alkoumi\LaravelHijriDate\Hijri;

class DateProvider
{
    public function gregorianDate($format = 'd/m/Y', $locale = 'ar_SY')
    {
        $date = new DateTime();
        $formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        $formatter->setPattern($format);
        return $formatter->format($date);
    }

    public function hijriDate($format = 'd/m/Y', $locale = 'ar_SY')
    {
        return Hijri::Date($format);
    }

    public function randomGregorianDate($start = '-10 years', $end = 'now', $format = 'd/m/Y', $locale = 'ar_SY')
    {
        $timestamp = mt_rand(strtotime($start), strtotime($end));
        $date = (new DateTime())->setTimestamp($timestamp);
        $formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        $formatter->setPattern($format);
        return $formatter->format($date);
    }
}
