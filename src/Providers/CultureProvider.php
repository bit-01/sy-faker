<?php

namespace Bit\SyFaker\Providers;

/**
 * Class CultureProvider
 *
 * Provides random cultural content from Arab traditions.
 * Includes traditional foods, idioms, proverbs, and items.
 *
 * @package Bit\SyFaker\Providers
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class CultureProvider
{
    /**
    * List of traditional Arab foods.
    *
    * @var string[]
    */
    protected $foods = [
        'فتوش', 'تبولة', 'كبة مقلية', 'كبة نيئة', 'محشي كوسا', 'محشي باذنجان', 'يبرق', 'كباب حلبي', 'مجدرة', 'شاكرية',
        'منسف', 'شاورما دجاج', 'شاورما لحم', 'حمص', 'متبل', 'لبنة بالنعنع', 'فول مدمس', 'شوربة عدس', 'صفيحة شامية',
        'شيش برك', 'مقلوبة', 'رز بحليب', 'معمول', 'غريبة', 'مهلبية', 'زنود الست', 'كنافة نابلسية', 'عوامة', 'نابلسية',
        'برازق', 'كعك شامية', 'معكرونة بالبشاميل', 'سلق باللبن', 'بامية', 'باذنجان مخلل', 'مكدوس', 'كوارع', 'سجق بالبيض',
        'بيض عيون مع سماق', 'فريكة', 'فلافل', 'سفيحة حلبية', 'كعك بالسمسم', 'لحمة بالصينية'
    ];

    /**
    * List of popular Arab idioms.
    *
    * @var string[]
    */
    protected $idioms = [
        'الحيطان إلها آذان', 'رجع بخفي حنين', 'اللي اختشوا ماتوا', 'حط إيده بمي باردة', 'لا بيعرف راسه من رجليه',
        'جاب العيد', 'يا جبل ما يهزك ريح', 'مثل الأطرش بالزفة', 'فاتك القطار', 'على قد بساطك مد رجليك',
        'ما بيفرق عن الطاسة غير بالعطسة', 'ينفخ على اللبن من كتر ما انحرق بالمي', 'مش كل اصابعك متل بعض', 'بيسأل عن الجمل وهو عم ياكل كبده',
        'بيضحك عالمشنقة', 'بيصطاد بالمية العكرة', 'متل العصفور بإيدك ولا عشرة عالشجرة', 'صار الحكي ببلاش', 'بيدق المي بالهاون'
    ];

    /**
    * List of common Arab proverbs.
    *
    * @var string[]
    */
    protected $proverbs = [
        'امشي عدل يحتار عدوك فيك', 'كل تأخيرة فيها خيرة', 'جود من الموجود', 'إذا كان الكلام من فضة فالسكوت من ذهب',
        'القرد بعين أمه غزال', 'العين بصيرة والإيد قصيرة', 'اللي ما يعرفك ما يثمنك', 'يا مأمنة للرجال يا مأمنة للمية بالغربال',
        'حبل الكذب قصير', 'اللي بياكل لوحده بيختنق', 'رب ضارة نافعة', 'الغايب عذره معه', 'اللي بيته من زجاج ما يحدف الناس بحجارة',
        'باب النجار مخلع', 'كثرة الطباخين تحرق الطبخة', 'طاح الفاس بالراس', 'اللي ما يطول العنب يقول عنه حامض',
        'ما كل ما يتمنى المرء يدركه', 'من حفر حفرة لأخيه وقع فيها', 'لو كان فيه خير ما رماه الطير'
    ];

    /**
    * List of traditional Arab items.
    *
    * @var string[]
    */
    protected $traditionalItems = [
        'طربوش', 'عباية', 'شماغ', 'صاج', 'دلة قهوة', 'نرجيلة', 'أركيلة', 'مسبحة', 'صابون الغار', 'خزانة شامية',
        'بقجة', 'طاسة نحاس', 'منقل فحم', 'قنديل كاز', 'كيس خيش', 'بوق صاج', 'جرن ومدقة', 'مسكة عنبر',
        'بسطار شامية', 'سبحة حجر كريم', 'مرآة يدوية محفورة', 'طقم شاي دمشقي', 'سكبة خزف', 'مروحة يدوية',
        'بُرْديّة', 'سجادة شرقية', 'حُقّة تبغ', 'صندوق عربي منقوش', 'ختم شمع', 'طاقية صوف شامية'
    ];

    /**
    * Get a random traditional Arab food.
    *
    * @return string
    */
    public function food(): string
    {
        return $this->foods[array_rand($this->foods)];
    }

    /**
    * Get a random Arab idiom.
    *
    * @return string
    */
    public function idiom(): string
    {
        return $this->idioms[array_rand($this->idioms)];
    }

    /**
    * Get a random Arab proverb.
    *
    * @return string
    */
    public function proverb(): string
    {
        return $this->proverbs[array_rand($this->proverbs)];
    }

    /**
    * Get a random traditional Arab item.
    *
    * @return string
    */
    public function traditionalItem(): string
    {
        return $this->traditionalItems[array_rand($this->traditionalItems)];
    }
}
