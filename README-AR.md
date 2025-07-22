# ArabFaker

حزمة PHP/Laravel لتوليد بيانات وهمية دقيقة ثقافيًا باللهجة السورية.

## الميزات
- أسماء سورية
- عناوين سورية
- أرقام هواتف سورية (موبايل، أرضي، سيريتل، MTN)
- نصوص باللهجة السورية
- التاريخ الهجري والميلادي بالتنسيق السوري للتواريخ
- أسماء الشركات السورية والمسميات الوظيفية وأنواع الأعمال
- الأطعمة السورية، والأقوال المأثورة، والأمثال الشعبية، والعناصر التقليدية
- واجهة مشابهة لحزمة PHPFaker

## التثبيت
```bash
composer require bit/arab-faker
```

## الاستخدام
```php
use Bit\ArabFaker\ArabFaker;

$faker = new ArabFaker();

// الأسماء
$faker->syrianName(); // مثال: "علي الحلبي"
$faker->syrianFirstName(); // مثال: "مريم"
$faker->syrianLastName(); // مثال: "الدمشقي"

// العناوين
$faker->syrianAddress(); // مثال: "دمشق، المزة، شارع الحمرا، بناء رقم 12"

// أرقام الهواتف
$faker->syrianMobile(); // مثال: "+963 93 123 4567" (شركة عشوائية)
$faker->syrianMobile(false); // مثال: "093 123 4567" (بدون رمز دولي)
$faker->syrianMobile(true, 'syriatel'); // مثال: "+963 93 123 4567" (سيريتل)
$faker->syrianMobile(true, 'mtn'); // مثال: "+963 94 123 4567" (MTN)
$faker->syrianSyriatel(); // مثال: "+963 93 123 4567"
$faker->syrianMTN(); // مثال: "+963 94 123 4567"
$faker->syrianLandline(); // مثال: "+963 11 123 4567"
$faker->syrianLandline(false); // مثال: "011 123 4567"

// التواريخ
$faker->syrianGregorianDate(); // مثال: , "22/07/2025"
$faker->syrianHijriDate();     // مثال: , "16/01/1447"
$faker->syrianRandomGregorianDate('-2 years', 'now'); // مثال:, "05/06/2023"

// الشركات
$faker->syrianCompanyName();  // مثال: "شركة النور محدودة المسؤولية"
// المسميات الوظيفية
$faker->syrianJobTitle();     // مثال: "مهندس برمجيات"
// أنواع الأعمال
$faker->syrianBusinessType(); // مثال: "تكنولوجيا المعلومات"

// الأطعمة السورية
$faker->syrianFood();            // e.g., "شيش برك"
// الأقوال المأثورة
$faker->syrianIdiom();           // e.g., "بيضحك عالمشنقة"
// الأمثال الشعبية
$faker->syrianProverb();         // e.g., "كل تأخيرة فيها خيرة"
// العناصر التقليدية
$faker->syrianTraditionalItem(); // e.g., "مروحة يدوية"
// جملة مؤلفة من المأكولات السورية والعاصر التقليدية والأمثال الشعبية
$faker->syrianCulturalSentence(); // Output: وأنت عم تاكل محشي كوسا جنب صابون الغار، تذكّر المثل الشامي: "كل تأخيرة فيها خيرة".
```

### دمج مع لارافيل
الحزمة تُسجل تلقائيًا عبر Service Provider. يمكنك نشر ملف الإعدادات:
```bash
php artisan vendor:publish --tag=config
```

## الواجهة البرمجية
- `$faker->syrianName($gender = null)`
- `$faker->syrianFirstName($gender = null)`
- `$faker->syrianLastName()`
- `$faker->syrianAddress()`
- `$faker->syrianMobile($withCountryCode = true, $company = null)`
- `$faker->syrianSyriatel($withCountryCode = true)`
- `$faker->syrianMTN($withCountryCode = true)`
- `$faker->syrianLandline($withCountryCode = true)`
- `$faker->syrianGregorianDate($format = 'd/m/Y')`
- `$faker->syrianHijriDate($format = 'd/m/Y')`
- `$faker->syrianRandomGregorianDate($start = '-10 years', $end = 'now', $format = 'd/m/Y')`
- `$faker->syrianCompanyName()`
- `$faker->syrianJobTitle()`
- `$faker->syrianBusinessType()`
- `$faker->syrianFood()`
- `$faker->syrianIdiom()`
- `$faker->syrianProverb()`
- `$faker->syrianTraditionalItem()`
- `$faker->syrianCulturalSentence()`

## الرخصة
MIT 
