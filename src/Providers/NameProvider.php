<?php

namespace Bit\SyFaker\Providers;

/**
 * Class NameProvider
 *
 * Generates random Arabic names including first names, last names, and titles.
 * Supports male, female, or mixed name generation.
 *
 * @package Bit\SyFaker\Providers
 * @license MIT
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class NameProvider
{

    /**
     * List of male first names.
     *
     * @var string[]
     */
    protected $maleFirstNames = [
        'علي', 'محمد', 'أحمد', 'محمود', 'حسن', 'حسين', 'يوسف', 'عمر', 'رامي', 'سامر',
        'فادي', 'فراس', 'وائل', 'باسل', 'شادي', 'طارق', 'نزار', 'جود', 'كرم', 'أنس',
        'يزن', 'لؤي', 'معاذ', 'عمار', 'عاصم', 'غسان', 'حازم', 'سيف', 'براء', 'عدنان',
        'مروان', 'شريف', 'حيدر', 'سليمان', 'سومر', 'أوس', 'إياد', 'تيم', 'جهاد', 'رائد',
        'ربيع', 'ركان', 'عابدين', 'عبدو', 'عبد الكريم', 'عبد الرحمن', 'عبد الله', 'عبد الغني', 'عبد المجيد', 'عبد القادر',
        'عبد الباسط', 'عبد الرزاق', 'عبد الحليم', 'عبد العزيز', 'عبد الفتاح', 'عبد المنعم', 'عبد الهادي', 'عبد الوهاب', 'عبد السلام', 'عبد الستار',
        'عبد الجليل', 'عبد الحفيظ', 'عبد الحكيم', 'عبد الدايم', 'عبد الدائم', 'عبد الرؤوف'
    ];

    /**
     * List of female first names.
     *
     * @var string[]
     */
    protected $femaleFirstNames = [
        'مريم', 'سارة', 'هبة', 'دينا', 'رنا', 'نور', 'لينا', 'سلمى', 'ريم', 'فرح',
        'جمانة', 'سوسن', 'هدى', 'منى', 'ياسمين', 'رغد', 'سيرين', 'شذى', 'غادة', 'عبير',
        'تالا', 'لمى', 'نغم', 'بيان', 'لين', 'نسرين', 'تالين', 'جودي', 'روان', 'صفاء',
        'إسراء', 'هند', 'علا', 'ميساء', 'ميسون', 'أماني', 'رانيا', 'ديما', 'ربى', 'أريج',
        'إيناس', 'مرح', 'سميرة', 'عائشة', 'جميلة', 'نهى', 'خلود', 'بسمة', 'نسمة', 'حنين',
        'لانا', 'كرستين', 'دارين', 'شهد', 'سهى', 'ليلى', 'أمل', 'رولا', 'بان', 'نجوى',
        'آلاء', 'صفية', 'منار', 'ليان', 'مي', 'كارمن', 'بتول', 'ميس', 'سدن', 'تمارا'
    ];

    /**
     * List of Arabic last names.
     *
     * @var string[]
     */
    protected $lastNames = [
        'الحلبي', 'الدمشقي', 'العلي', 'الخطيب', 'الأسعد', 'الحموي', 'اليوسف', 'الشيخ', 'الزهر', 'الرفاعي',
        'الطويل', 'السباعي', 'الملقي', 'الزعبي', 'الديب', 'البرهو', 'الطاهر', 'النجار', 'العباس', 'القدسي',
        'الحسيني', 'السعيد', 'البغدادي', 'السواس', 'المبارك', 'الديري', 'السرميني', 'السقال', 'الشهابي', 'الحراكي',
        'الصباغ', 'العيسى', 'الكرمي', 'العتوم', 'الحاج', 'الأيوبي', 'الحمصي', 'الدمري', 'العبدالله', 'الصواف',
        'الحسين', 'الحمادة', 'القادري', 'الخوري', 'الطراونة', 'المصري', 'القدور', 'اللبابيدي', 'العظمة', 'الشاغوري',
        'الباشا', 'الخواجة', 'العمري', 'الحايك', 'العجرمي', 'الفوال', 'الجاسم', 'السرور', 'العدوي', 'الشنتوت',
        'الريّس', 'الحافظ', 'الدندشي', 'المير', 'البلخي', 'الروضة', 'البني', 'البقاعي', 'النبهان', 'الحسينو'
    ];

    /**
    * Get an Arabic title based on gender.
    *
    * @param null|string $gender Optional. 'male', 'female', or null for random. Default null.
    *
    * @return string Arabic title.
    */
    public function title(string|null $gender = null|'male'|'female'): string
    {
        $maleTitles = ['السيد', 'الأستاذ', 'الدكتور', 'الأخ', "الحاج"];
        $femaleTitles = ['السيدة', 'الآنسة', 'الدكتورة', 'الأخت', "الحاجة"];

        if ($gender === 'male') {
            return $maleTitles[array_rand($maleTitles)];
        } elseif ($gender === 'female') {
            return $femaleTitles[array_rand($femaleTitles)];
        } else {
            // Randomly choose gender if not provided
            $useMale = rand(0, 1);
            return $useMale
                ? $maleTitles[array_rand($maleTitles)]
                : $femaleTitles[array_rand($femaleTitles)];
        }
    }

    /**
     * Get a full name (first + last) based on gender.
     *
     * @param string|null $gender Optional. 'male', 'female', or null for random. Default null.
     *
     * @return string Full name.
     */
    public function name(string|null $gender = null|'male'|'female'): string
    {
        if ($gender === 'male') {
            $first = $this->firstName('male');
        } elseif ($gender === 'female') {
            $first = $this->firstName('female');
        } else {
            $first = rand(0, 1) ? $this->firstName('male') : $this->firstName('female');
        }
        $last = $this->lastName();
        return "$first $last";
    }

    /**
    * Get a first name based on gender.
    *
    * @param string|null $gender Optional. 'male', 'female', or null for random. Default null.
    *
    * @return string First name.
    */
    public function firstName(string|null $gender = null|'male'|'female'): string
    {
        if ($gender === 'male') {
            return $this->maleFirstNames[array_rand($this->maleFirstNames)];
        } elseif ($gender === 'female') {
            return $this->femaleFirstNames[array_rand($this->femaleFirstNames)];
        } else {
            $all = array_merge($this->maleFirstNames, $this->femaleFirstNames);
            return $all[array_rand($all)];
        }
    }

    /**
    * Get a random Arabic last name.
    *
    * @return string Last name.
    */
    public function lastName(): string
    {
        return $this->lastNames[array_rand($this->lastNames)];
    }
}
