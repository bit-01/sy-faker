<?php

namespace Bit\ArabFaker\Providers;

class CompanyProvider
{
    protected $companyPrefixes = [
        'شركة', 'مؤسسة', 'مجموعة', 'معمل', 'مصنع', 'ورشة'
    ];

    protected $companySuffixes = [
        'ذ.م.م', 'مساهمة مغفلة', 'محدودة المسؤولية', 'قابضة', 'تضامنية'
    ];

    protected $baseCompanyNames = [
        'النور', 'الشام', 'الشرق', 'السورية', 'البركة', 'التوفيق', 'المدينة', 'الاتحاد', 'الصفا', 'الأمانة',
        'المستقبل', 'المهندسين', 'الخدمات', 'الأعمال', 'المتحدة', 'الرؤية', 'المجتهد', 'الأمل', 'النهضة', 'البرمجيات'
    ];

    protected $jobTitles = [
        'مهندس برمجيات', 'محاسب', 'مدير مبيعات', 'مندوب مبيعات', 'مطور ويب', 'أخصائي تسويق', 'مصمم جرافيك',
        'مدير مشاريع', 'سكرتير تنفيذي', 'عامل مستودع', 'مهندس مدني', 'طبيب', 'صيدلي', 'ممرض', 'معلم', 'مدرس خصوصي',
        'سائق', 'عامل نظافة', 'نجار', 'حداد', 'كهربائي', 'فني صيانة', 'محامي', 'إداري'
    ];

    protected $businessTypes = [
        'تجارة عامة', 'تكنولوجيا المعلومات', 'الصناعات الغذائية', 'الخدمات اللوجستية', 'البناء والتشييد', 'الخدمات الصحية',
        'المحاسبة', 'القانون', 'التعليم', 'البيع بالتجزئة', 'الاستيراد والتصدير', 'البرمجيات', 'الصناعات التحويلية',
        'المقاولات', 'الزراعة', 'الخدمات المالية'
    ];

    public function companyName()
    {
        $prefix = $this->companyPrefixes[array_rand($this->companyPrefixes)];
        $name = $this->baseCompanyNames[array_rand($this->baseCompanyNames)];
        $suffix = $this->companySuffixes[array_rand($this->companySuffixes)];
        return "$prefix $name $suffix";
    }

    public function jobTitle()
    {
        return $this->jobTitles[array_rand($this->jobTitles)];
    }

    public function businessType()
    {
        return $this->businessTypes[array_rand($this->businessTypes)];
    }
}
