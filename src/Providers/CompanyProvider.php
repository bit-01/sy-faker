<?php

namespace Bit\SyFaker\Providers;

/**
* Class CompanyProvider
*
* Provides fake but realistic company-related data in Arabic for use in testing and seeding.
*
* @package Bit\SyFaker\Providers
* @license MIT
* @author Bassel Aflak <bassel.af@gmail.com>
*/
class CompanyProvider
{

    /**
    * List of common Arabic company prefixes.
    *
    * @var string[]
    */
    protected $companyPrefixes = [
        'شركة', 'مؤسسة', 'مجموعة', 'معمل', 'مصنع', 'ورشة'
    ];

    /**
    * List of common Arabic company suffixes.
    *
    * @var string[]
    */
    protected $companySuffixes = [
        'ذ.م.م', 'مساهمة مغفلة', 'محدودة المسؤولية', 'قابضة', 'تضامنية'
    ];

    /**
    * List of base names commonly used in Arabic company names.
    *
    * @var string[]
    */
    protected $baseCompanyNames = [
        'النور', 'الشام', 'الشرق', 'السورية', 'البركة', 'التوفيق', 'المدينة', 'الاتحاد', 'الصفا', 'الأمانة',
        'المستقبل', 'المهندسين', 'الخدمات', 'الأعمال', 'المتحدة', 'الرؤية', 'المجتهد', 'الأمل', 'النهضة', 'البرمجيات'
    ];

    /**
    * List of job titles in Arabic.
    *
    * @var string[]
    */
    protected $jobTitles = [
        'مهندس برمجيات', 'محاسب', 'مدير مبيعات', 'مندوب مبيعات', 'مطور ويب', 'أخصائي تسويق', 'مصمم جرافيك',
        'مدير مشاريع', 'سكرتير تنفيذي', 'عامل مستودع', 'مهندس مدني', 'طبيب', 'صيدلي', 'ممرض', 'معلم', 'مدرس خصوصي',
        'سائق', 'عامل نظافة', 'نجار', 'حداد', 'كهربائي', 'فني صيانة', 'محامي', 'إداري'
    ];

    /**
    * List of common business types in Arabic.
    *
    * @var string[]
    */
    protected $businessTypes = [
        'تجارة عامة', 'تكنولوجيا المعلومات', 'الصناعات الغذائية', 'الخدمات اللوجستية', 'البناء والتشييد', 'الخدمات الصحية',
        'المحاسبة', 'القانون', 'التعليم', 'البيع بالتجزئة', 'الاستيراد والتصدير', 'البرمجيات', 'الصناعات التحويلية',
        'المقاولات', 'الزراعة', 'الخدمات المالية'
    ];

    /**
    * Generate a fake Arabic company name consisting of a prefix, base name, and suffix.
    *
    * Example: "شركة النور ذ.م.م"
    *
    * @return string
    */
    public function companyName(): string
    {
        $prefix = $this->companyPrefixes[array_rand($this->companyPrefixes)];
        $name = $this->baseCompanyNames[array_rand($this->baseCompanyNames)];
        $suffix = $this->companySuffixes[array_rand($this->companySuffixes)];
        return "$prefix $name $suffix";
    }

    /**
    * Return a random Arabic job title.
    *
    * @return string
    */
    public function jobTitle(): string
    {
        return $this->jobTitles[array_rand($this->jobTitles)];
    }

    /**
    * Return a random Arabic business type.
    *
    * @return string
    */
    public function businessType(): string
    {
        return $this->businessTypes[array_rand($this->businessTypes)];
    }
}
