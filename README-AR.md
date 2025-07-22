# ArabFaker

حزمة PHP/Laravel لتوليد بيانات وهمية دقيقة ثقافيًا باللهجة السورية.

## الميزات
- أسماء سورية
- عناوين سورية
- نصوص باللهجة السورية
- واجهة مشابهة لحزمة PHPFaker

## التثبيت
```bash
composer require bit/arab-faker
```

## الاستخدام
```php
use Bit\ArabFaker\SyrianFaker;

$faker = new SyrianFaker();
echo $faker->syrianName(); // مثال: "علي الحلبي"
echo $faker->syrianAddress(); // مثال: "دمشق، المزة، شارع الحمرا، بناء رقم 12"
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

## الرخصة
MIT 
