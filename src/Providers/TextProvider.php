<?php

namespace Bit\ArabFaker\Providers;

class TextProvider
{
    protected $letters = [
        'ا', 'ب', 'ت', 'ث', 'ج', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'ل', 'م', 'ن', 'ه', 'و', 'ي'
    ];

    protected $words = [
        'مرحبا', 'أهلين', 'كيفك', 'شو', 'تمام', 'منيح', 'كتير', 'شغلة', 'حلو', 'بسرعة',
        'يلا', 'لسا', 'عنجد', 'هيك', 'ليش', 'معقول', 'خلص', 'طيب', 'بعدين', 'مشان', 'إيمتى',
        'وين', 'هون', 'هناك', 'شوي', 'كتير', 'كتابة', 'سوريا', 'دمشق', 'حبيبي', 'حبيبتي'
    ];

    protected $sentenceTemplates = [
        'شو أخبارك اليوم؟',
        'كيف الجو عندكم؟',
        'إيمتى رح نلتقي؟',
        'لسا ما خلصت شغلي.',
        'عنجد الموضوع مهم كتير.',
        'ليش ما إجيت مبارح؟',
        'خلص بكفي لهون.',
        'معقول هيك صار؟',
        'طيب، شو رأيك؟',
        'يلا نروح نشرب قهوة.'
    ];

    public function letter()
    {
        return $this->letters[array_rand($this->letters)];
    }

    public function word()
    {
        return $this->words[array_rand($this->words)];
    }

    public function sentence()
    {
        return $this->sentenceTemplates[array_rand($this->sentenceTemplates)];
    }

    public function paragraph($sentences = 3)
    {
        $result = [];
        for ($i = 0; $i < $sentences; $i++) {
            $result[] = $this->sentence();
        }
        return implode(' ', $result);
    }
}
