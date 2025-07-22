# ArabFaker

A PHP/Laravel package for generating culturally accurate fake data in Syrian Arabic.

## Features
- Syrian names
- Syrian addresses
- Syrian dialect text
- Faker-like API

## Installation
```bash
composer require bit/arab-faker
```

## Usage
```php
use Bit\ArabFaker\SyrianFaker;

$faker = new SyrianFaker();
echo $faker->syrianName(); // e.g., "علي الحلبي"
echo $faker->syrianAddress(); // e.g., "دمشق، المزة، شارع الحمرا، بناء رقم 12"
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

## License
MIT 
