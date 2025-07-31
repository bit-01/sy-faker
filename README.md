# SyFaker

A PHP/Laravel package for generating culturally accurate fake data in Syrian Arabic.

## Features
- Syrian Text  and paragraphs
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
use Bit\SyFaker\SyFaker;

$syFaker = new SyFaker();

// Text and Paragraphs
$faker->word(); // e.g., "مبسوط", "إيمتى", "سوريا", "رفيق", "عنجد"
$faker->words(5); // e.g., "مرحبا كيفك عنجد شوي منيح"
$faker->words(5, true); //e.g., ['مرحبا', 'كيفك', 'عنجد', 'شوي', 'منيح']
$faker->sentences(2); // e.g., "شو صاير معك؟ العمل الجاد يؤدي إلى النجاح."
$faker->sentences(2, 'msa', false, ' | '); // e.g., "ذهبت إلى السوق | إن التعليم هو أساس تقدم الأمم."
$faker->sentence(); // e.g., "شو صاير معك؟"
$faker->sentence('msa'); // e.g., "ذهبت إلى السوق لشراء بعض الحاجيات."
$faker->sentence('dialect'); // e.g., "خلص بكفي لهون."
$faker->paragraph(); // default mixed
$faker->paragraph(4, 6, 'msa'); // only Modern Standard Arabic
$faker->paragraph(5, 8, 'dialect'); // only Syrian dialect

// Names
$faker->name(); // e.g., "علي الحلبي"
$faker->firstName(); // e.g., "مريم"
$faker->lastName(); // e.g., "الدمشقي"

// Addresses
$faker->address(); // e.g., "دمشق، المزة، شارع الحمرا، بناء رقم 12"

// Phone Numbers
$faker->mobile(); // e.g., "+963 93 123 4567" (random company)
$faker->mobile(false); // e.g., "093 123 4567" (without country code)
$faker->mobile(true, 'syriatel'); // e.g., "+963 93 123 4567" (Syriatel)
$faker->mobile(true, 'mtn'); // e.g., "+963 94 123 4567" (MTN Syria)
$faker->syriatel(); // e.g., "+963 93 123 4567"
$faker->mtn(); // e.g., "+963 94 123 4567"
$faker->landline(); // e.g., "+963 11 123 4567"
$faker->landline(false); // e.g., "011 123 4567"

// Dates
$faker->gregorianDate(); // e.g., "22/07/2025"
$faker->hijriDate();     // e.g., "16/01/1447"
$faker->randomGregorianDate('-2 years', 'now'); // e.g., "05/06/2023"
$faker->randomhijriDateDate('-2 years', 'now'); // e.g., "15/02/1445"

// Companies
$faker->companyName();  // e.g., "شركة النور محدودة المسؤولية"

// Job Titles
$faker->jobTitle();     // e.g., "مهندس برمجيات"

// Business Types
$faker->businessType(); // e.g., "تكنولوجيا المعلومات"

// Syrian foods
$faker->food();            // e.g., "شيش برك"
// idioms
$faker->idiom();           // e.g., "بيضحك عالمشنقة"
// proverbs
$faker->proverb();         // e.g., "كل تأخيرة فيها خيرة"
// traditional items
$faker->traditionalItem(); // e.g., "مروحة يدوية"
// sentence of: Syrian foods, idioms, proverbs, and traditional items
$faker->culturalSentence(); // Output: وأنت عم تاكل محشي كوسا جنب صابون الغار، تذكّر المثل الشامي: "كل تأخيرة فيها خيرة".
```

### Laravel Integration
The package auto-registers via Service Provider and provides a helper function
```php
use Bit\SyFaker\SyFaker;

$syFaker = new SyFaker();

// or you can use the helper function e.g.:
syFaker()->name();

```
## API
- `$faker->letter()`
- `$faker->word()`
- `$faker->words($count = 5, $asArray = false, $separator = ' ')`
- `$faker->sentence($mode = 'mixed')`
- `$faker->sentences($count = 3, $mode = 'mixed', $asArray = false, $separator = ' ')`
- `$faker->paragraph($min = 3, $max = 7, $mode = 'mixed')`
- `$faker->name($gender = null)`
- `$faker->firstName($gender = null)`
- `$faker->lastName()`
- `$faker->address()`
- `$faker->mobile($withCountryCode = true, $company = null)`
- `$faker->syriatel($withCountryCode = true)`
- `$faker->mtn($withCountryCode = true)`
- `$faker->landline($withCountryCode = true)`
- `$faker->gregorianDate($format = 'd/m/Y')`
- `$faker->hijriDate($format = 'd/m/Y')`
- `$faker->randomGregorianDate($start = '-10 years', $end = 'now', $format = 'd/m/Y')`
- `$faker->randomHijriDate($start = '-10 years', $end = 'now', $format = 'd/m/Y')`
- `$faker->companyName()`
- `$faker->jobTitle()`
- `$faker->businessType()`
- `$faker->food()`
- `$faker->idiom()`
- `$faker->proverb()`
- `$faker->TraditionalItem()`
- `$faker->culturalSentence()`

## License
MIT 
