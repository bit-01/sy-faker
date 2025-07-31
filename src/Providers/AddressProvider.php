<?php

namespace Bit\SyFaker\Providers;

/**
 * Class AddressProvider
 *
 * Provides realistic Arabic (Syrian) address components including cities, neighborhoods,
 * and street names. Useful for generating random addresses localized for Syrian regions.
 *
 * @package Bit\SyFaker\Providers
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class AddressProvider
{
    /**
    * List of major Syrian cities.
    *
    * @var string[]
    */
    protected $cities = [
        'دمشق', 'حلب', 'حمص', 'حماة', 'اللاذقية', 'طرطوس', 'دير الزور', 'الرقة', 'إدلب', 'درعا',
        'السويداء', 'الحسكة', 'القنيطرة', 'ريف دمشق'
    ];

    /**
    * Array of neighborhoods from various Syrian cities.
    *
    * Includes neighborhoods from Damascus, Aleppo, Homs, Latakia, and Tartus.
    *
    * @var string[]
    */
    protected $neighborhoods = [
        'المزة', 'المالكي', 'باب توما', 'الحميدية', 'الصالحية', 'القصاع', 'ركن الدين', 'الشعلان',
        'البرامكة', 'السبع بحرات', 'ساروجة', 'مشروع دمر', 'باب سريجة', 'الميدان', 'الزاهرة',
        'القدم', 'كفرسوسة', 'المهاجرين', 'العدوي', 'برزة', 'الزهور', 'الحريقة', 'المرجة',
        'المصلى', 'باب شرقي', 'الشيخ سعد', 'القصور', 'السلطان', 'باب السلام', 'الحريقة الشرقية',
        'الريحان', 'العقيبة', 'الشيخ محي الدين', 'كفرسوسة الجديدة', 'القابون', 'القصور الشرقية',
        'باب الفرج', 'باب السلام الجديد', 'الميدان الجديد', 'الفرقان', 'المداح', 'أبو رمانة',
        'الميدان الغربي', 'القصور الغربية', 'الشيخ رسلان', 'الزبلطاني', 'المحطة', 'الميدان الشرقي',
        'القصور القديمة',
          'القصير', 'السبع بحرات', 'الجيبة', 'القصاع', 'باب النصر', 'الصالحين', 'الشيخ سعيد',
        'باب الحديد', 'باب انطاكية', 'الأنصاري', 'المنصورة', 'الحيدرية', 'الكرم', 'الشيخ مقصود',
           'الزهراء', 'بابا عمرو', 'المرجة', 'السبع بحرات', 'القصور', 'الحندرات', 'الشيخ حسن',
        'القصور الشرقية', 'الحميدية', 'القصاع', 'القدم',
          'الشاطئ', 'الزراعة', 'الجميلية', 'القصور', 'القدم', 'الحفة', 'الميدان', 'المصايف',
        'المالكي', 'الميدان الجنوبي',
         'الربوة', 'المرجان', 'القصور', 'الباسل', 'القديم', 'الحي الجنوبي', 'الحريقة'

    ];

    /**
    * Array of common Syrian street names from multiple cities.
    *
    * @var string[]
    */
    protected $streetNames = [
        'شارع الحمرا', 'شارع بغداد', 'شارع الثورة', 'شارع العابد', 'شارع النصر', 'شارع 29 أيار',
        'شارع مرشد خاطر', 'شارع فارس الخوري', 'شارع الجلاء', 'شارع فلسطين', 'شارع القصاع', 'شارع الآسية',
        'شارع خالد بن الوليد', 'شارع سعد الله الجابري', 'شارع أبو رمانة', 'شارع عبد القادر الحسني',
        'شارع نور الدين زنكي', 'شارع قاسيون', 'شارع التكية السليمانية', 'شارع باب توما', 'شارع الميدان',
        'شارع الحميدية', 'شارع باب الفرج', 'شارع باب السلام', 'شارع الإمام علي', 'شارع الشيخ محي الدين',
        'شارع البرامكة', 'شارع السبع بحرات', 'شارع الزاهرة', 'شارع بستان الفوضى', 'شارع القزاز',
        'شارع باب الجابية', 'شارع السويقة', 'شارع الصالحية', 'شارع السيدة زينب', 'شارع الصنمين',
        'شارع باب شرقي', 'شارع الزيتون', 'شارع العقيبة', 'شارع باب السلام الجديد', 'شارع بيروت الجديد',
        'شارع المهاجرين', 'شارع القشلة', 'شارع باب سريجة',
        'شارع الزهراوي', 'شارع كمال أتاتورك', 'شارع بغداد', 'شارع القوتلي', 'شارع بغداد الجديدة',
        'شارع صلاح الدين', 'شارع سعد الله الجابري', 'شارع الملك فيصل', 'شارع سعد زغلول',
        'شارع الميسر', 'شارع النيرب', 'شارع الوحدة', 'شارع النهر', 'شارع المتنبي', 'شارع القلعة',
        'شارع جمال عبد الناصر', 'شارع الحرية', 'شارع الأنصار', 'شارع الجامعة',
        'شارع الستين', 'شارع عبد الرحمن الكواكبي', 'شارع بغداد', 'شارع القصر', 'شارع السلام',
        'شارع الريحان', 'شارع الثورة', 'شارع بابا عمرو', 'شارع الجلاء', 'شارع العذراء',
        'شارع الزهراء', 'شارع أبو الفدا', 'شارع ميسلون',
        'شارع الكورنيش', 'شارع الثورة', 'شارع القشلة', 'شارع الجيش', 'شارع سوق الغزل',
        'شارع المدرسة', 'شارع الحمرا', 'شارع صلاح الدين', 'شارع الجلاء'
    ];

    /**
    * Return a random city from the cities array.
    *
    * @return string
    */
    public function city(): string
    {
        return $this->cities[array_rand($this->cities)];
    }

    /**
    * Return a random neighborhood from the neighborhoods array.
    *
    * @return string
    */
    public function neighborhood(): string
    {
        return $this->neighborhoods[array_rand($this->neighborhoods)];
    }

    /**
    * Return a random street name from the streetNames array.
    *
    * @return string
    */
    public function streetName(): string
    {
        return $this->streetNames[array_rand($this->streetNames)];
    }

    /**
    * Generate a random Syrian address composed of city, neighborhood, street, and building number.
    *
    * @return string Randomly generated Syrian-style address.
    */
    public function address(): string
    {
        $city = $this->cities[array_rand($this->cities)];
        $neighborhood = $this->neighborhoods[array_rand($this->neighborhoods)];
        $street = $this->streetNames[array_rand($this->streetNames)];
        $building = rand(1, 200);
        return "{$city}، {$neighborhood}، {$street}، بناء رقم {$building}";
    }
}
?>
