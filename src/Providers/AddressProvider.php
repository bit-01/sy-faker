<?php

namespace Bit\ArabFaker\Providers;

class AddressProvider
{
    protected $cities = [
        'دمشق', 'حلب', 'حمص', 'حماة', 'اللاذقية', 'طرطوس', 'دير الزور', 'الرقة', 'إدلب', 'درعا',
        'السويداء', 'الحسكة', 'القنيطرة'
    ];

    protected $neighborhoods = [
        'المزة', 'المالكي', 'باب توما', 'الحميدية', 'الصالحية', 'القصاع', 'ركن الدين', 'الشعلان', 'البرامكة', 'جرمانا',
        'السبع بحرات', 'ساروجة', 'مشروع دمر', 'باب سريجة', 'الميدان', 'الزاهرة', 'القدم', 'كفرسوسة', 'المهاجرين', 'العدوي'
    ];

    protected $streetNames = [
        'شارع الحمرا', 'شارع بغداد', 'شارع الثورة', 'شارع العابد', 'شارع النصر', 'شارع 29 أيار', 'شارع مرشد خاطر', 'شارع فارس الخوري', 'شارع الجلاء', 'شارع فلسطين'
    ];

    public function address()
    {
        $city = $this->cities[array_rand($this->cities)];
        $neighborhood = $this->neighborhoods[array_rand($this->neighborhoods)];
        $street = $this->streetNames[array_rand($this->streetNames)];
        $building = rand(1, 200);
        return "{$city}، {$neighborhood}، {$street}، بناء رقم {$building}";
    }
}
?>
