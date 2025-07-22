# ArabFaker

A PHP/Laravel package for generating culturally accurate fake data in Syrian Arabic.

## Features
- Syrian names
- Syrian addresses
- Syrian phone numbers (mobile, landline, Syriatel, MTN)
- Syrian dialect text
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

## License
MIT 
