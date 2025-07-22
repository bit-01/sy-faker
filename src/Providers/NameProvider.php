<?php

namespace Bit\ArabFaker\Providers;

class NameProvider
{
    protected $maleFirstNames = [
        'علي', 'حسن', 'محمد', 'أحمد', 'يوسف', 'رامي', 'سامر', 'فادي', 'محمود', 'سامي',
        'خالد', 'سعيد', 'جمال', 'باسل', 'وائل', 'فراس', 'شادي', 'طارق', 'نزار', 'رامز'
    ];

    protected $femaleFirstNames = [
        'مريم', 'سارة', 'هبة', 'دينا', 'رنا', 'نور', 'لينا', 'سلمى', 'ريم', 'فرح',
        'جمانة', 'سوسن', 'هدى', 'منى', 'ياسمين', 'رغد', 'سيرين', 'شذى', 'غادة', 'عبير'
    ];

    protected $lastNames = [
        'الحلبي', 'الدمشقي', 'العلي', 'الخطيب', 'الأسعد', 'الحموي', 'اليوسف', 'الشيخ', 'الزهر', 'الرفاعي',
        'الطويل', 'السباعي', 'الملقي', 'الزعبي', 'الديب', 'البرهو', 'الطاهر', 'النجار', 'العباس', 'القدسي'
    ];

    public function name($gender = null)
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

    public function firstName($gender = null)
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

    public function lastName()
    {
        return $this->lastNames[array_rand($this->lastNames)];
    }
}
