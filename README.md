# ArabFaker

A PHP/Laravel package for generating culturally accurate fake data in Syrian Arabic.

## Features
- Syrian names
- Syrian addresses
- Syrian phone numbers (mobile, landline, Syriatel, MTN)
- Syrian dialect text
- Gregorian and Hijri dates with Syrian format
- Syrian company names, job titles, and business types
- Syrian foods, idioms, proverbs, and traditional items
- Faker-like API

## Installation
```bash
composer require bit/arab-faker
```

## Usage
```php
use Bit\ArabFaker\ArabFaker;

$faker = new ArabFaker();

// Names
$faker->syrianName(); // e.g., "علي الحلبي"
$faker->syrianFirstName(); // e.g., "مريم"
$faker->syrianLastName(); // e.g., "الدمشقي"

// Addresses
$faker->syrianAddress(); // e.g., "دمشق، المزة، شارع الحمرا، بناء رقم 12"

// Phone Numbers
$faker->syrianMobile(); // e.g., "+963 93 123 4567" (random company)
$faker->syrianMobile(false); // e.g., "093 123 4567" (without country code)
$faker->syrianMobile(true, 'syriatel'); // e.g., "+963 93 123 4567" (Syriatel)
$faker->syrianMobile(true, 'mtn'); // e.g., "+963 94 123 4567" (MTN Syria)
$faker->syrianSyriatel(); // e.g., "+963 93 123 4567"
$faker->syrianMTN(); // e.g., "+963 94 123 4567"
$faker->syrianLandline(); // e.g., "+963 11 123 4567"
$faker->syrianLandline(false); // e.g., "011 123 4567"

// Dates
$faker->syrianGregorianDate(); // e.g., "22/07/2025"
$faker->syrianHijriDate();     // e.g., "16/01/1447"
$faker->syrianRandomGregorianDate('-2 years', 'now'); // e.g., "05/06/2023"

// Companies
$faker->syrianCompanyName();  // e.g., "شركة النور محدودة المسؤولية"

// Job Titles
$faker->syrianJobTitle();     // e.g., "مهندس برمجيات"

// Business Types
$faker->syrianBusinessType(); // e.g., "تكنولوجيا المعلومات"

// Syrian foods
$faker->syrianFood();            // e.g., "شيش برك"
// idioms
$faker->syrianIdiom();           // e.g., "بيضحك عالمشنقة"
// proverbs
$faker->syrianProverb();         // e.g., "كل تأخيرة فيها خيرة"
// traditional items
$faker->syrianTraditionalItem(); // e.g., "مروحة يدوية"
// sentence of: Syrian foods, idioms, proverbs, and traditional items
$faker->syrianCulturalSentence(); // Output: وأنت عم تاكل محشي كوسا جنب صابون الغار، تذكّر المثل الشامي: "كل تأخيرة فيها خيرة".
```

### Laravel Integration
The package auto-registers via Service Provider. You can publish the config:
```bash
php artisan vendor:publish --tag=config
```

## API
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

## License
MIT 
