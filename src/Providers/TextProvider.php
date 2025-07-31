<?php

namespace Bit\SyFaker\Providers;

/**
 * Class TextProvider
 *
 * Provides Arabic text generation, including letters, words, dialectal and MSA sentences, and paragraphs.
 *
 * @package Bit\SyFaker\Providers
 * @license MIT
 * @author Bassel Aflak <bassel.af@gmail.com>
 */
class TextProvider
{
    /**
    * Arabic letters (alphabet).
    *
    * @var string[]
    */
    protected $letters = [
        'ا', 'ب', 'ت', 'ث', 'ج', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'ل', 'م', 'ن', 'ه', 'و', 'ي'
    ];

    /**
    * Common Arabic words (mostly spoken dialect).
    *
    * @var string[]
    */
    protected $words = [
        'مرحبا', 'أهلين', 'السلام', 'أهلا', 'هلا', 'صباحو', 'مسّا', 'يسعدلي صباحك',
        'كيفك', 'شو', 'ليش', 'هيك', 'يعني', 'عنجد', 'طيب', 'خلص', 'بعدين', 'إيمتى', 'قديش',
        'هون', 'هناك', 'تحت', 'فوق', 'جنب', 'ورا', 'قدّام',
        'زعلان', 'مبسوط', 'تعبان', 'مروق', 'مزعوج', 'خايف', 'مرتاح',
        'يلا', 'استنى', 'راح', 'إجى', 'بلش', 'خلص', 'دوام', 'سهرة', 'طالع', 'راجع',
        'منيح', 'كتير', 'شوي', 'فاضي', 'مليان', 'تقيل', 'خفيف', 'حلو', 'بشع',
        'شغلة', 'قصة', 'كلام', 'غدا', 'فطور', 'قهوة', 'بيت', 'شغل', 'مدرسة', 'سيارة',
        'معقول', 'مستحيل', 'عن إذنك', 'يا لطيف', 'الله يعين', 'الله يسامحك', 'إن شاء الله', 'الحمد لله',
        'حبيبي', 'حبيبتي', 'بابا', 'ماما', 'رفيق', 'صاحب', 'خطيب', 'جيران',
        'سوريا', 'دمشق', 'حلب', 'حمص', 'طرطوس', 'اللاذقية', 'درعا', 'السويداء',
        'كتابة', 'كلمة', 'ضحك', 'بكاء', 'تليفون', 'واتساب', 'دقيقة', 'ساعة', 'بكرة', 'هلأ'
    ];

    /**
    * Arabic spoken dialect sentences.
    *
    * @var string[]
    */
    protected $dialectSentences = [
        'شو أخبارك اليوم؟', 'كيف الجو عندكم؟', 'إيمتى رح نلتقي؟', 'لسا ما خلصت شغلي.',
        'عنجد الموضوع مهم كتير.', 'ليش ما إجيت مبارح؟', 'خلص بكفي لهون.', 'معقول هيك صار؟',
        'طيب، شو رأيك؟', 'يلا نروح نشرب قهوة.', 'شو بدك مني؟', 'خليني أفكر شوي.',
        'ماشي الحال؟', 'والله زمان عنك.', 'لسا الدنيا بخير.', 'عم بمزح معك بس.',
        'إنت عنجد بتحكي؟', 'شو صاير معك؟', 'حاجة نكد بقى.', 'مو وقتها هالحكي.',
        'شو جابك لهون؟', 'شو صار بالمشروع؟', 'سافر وما ودع!', 'ما عاد فيني اتحمل.',
        'بدك تطول بالك شوي.', 'الله يرضى عليك.', 'شو ناوي تعمل؟', 'إيمتى الفطور؟',
        'تفضل قعد هون.', 'ما في شي جديد؟', 'كلو تمام؟', 'يلا نلعب طاولة؟',
        'أنا اليوم كتير تعبان.', 'رح جن من هالشغل!', 'مو معقول الأسعار!',
        'اشتقتلك من قلبي.', 'ليش هيك مستعجل؟', 'فيني آخذ استراحة؟',
        'لا تواخذني عالإزعاج.', 'شو رح تطبخ اليوم؟', 'الحمد لله على السلامة.',
        'منيح إنك جيت.', 'أهلاً وسهلاً فيك.', 'لا تاكل هم، بسيطة.',
        'هيك الدنيا بتمشي.', 'معك حق والله.', 'لا تزعل مني، مو قصدي.',
        'هات لنشوف شو عندك.', 'شو قلتلك من قبل؟'
    ];

    /**
    * Modern Standard Arabic (MSA) sentences.
    *
    * @var string[]
    */
    protected $msaSentences = [
        'ذهبت إلى السوق لشراء بعض الحاجيات.', 'إن التعليم هو أساس تقدم الأمم.',
        'العمل الجاد يؤدي إلى النجاح.', 'الوقت كالسيف إن لم تقطعه قطعك.',
        'تُعَدُّ دمشق من أقدم مدن العالم.', 'تبدأ المدارس السورية في شهر أيلول.',
        'السياحة في سوريا متنوعة وغنية بالثقافة.', 'قرأت كتاباً عن تاريخ بلاد الشام.',
        'اللغة العربية من أجمل لغات العالم.', 'يلجأ الكثيرون إلى التعلم الذاتي عبر الإنترنت.',
        'يُعَدُّ احترام الوقت من صفات الشخص الناجح.', 'تلعب الرياضة دوراً مهماً في الصحة الجسدية.',
        'تسعى الحكومة إلى تحسين مستوى المعيشة.', 'يشتهر المطبخ السوري بتنوع أطباقه التقليدية.',
        'تُعدُّ القيم الأخلاقية حجر الأساس لبناء المجتمع.', 'تتطلب المشاريع الناجحة تخطيطاً جيداً.',
        'ساهمت الثورة الصناعية في تطور البشرية.', 'القراءة غذاء العقل والروح.',
        'إن الإبداع يولد من رحم التحديات.', 'الصداقة الحقيقية تُختَبر في الأوقات الصعبة.',
        'من المهم أن نحافظ على البيئة ونقلل التلوث.', 'التكنولوجيا أصبحت جزءاً لا يتجزأ من حياتنا اليومية.',
        'تحتل اللغة العربية مكانة عظيمة بين لغات العالم.', 'يجب احترام آراء الآخرين مهما اختلفت.',
        'الأمان نعمة يجب شكر الله عليها دائماً.', 'يتطلب النجاح استمرارية وتعلماً مستمراً.',
        'تشهد المدن السورية نمواً عمرانياً متسارعاً.', 'تُعَدُّ دمشق مركزاً مهماً للفن والثقافة.',
        'الحياة مليئة بالتحديات، ولكنها تستحق العيش.', 'من الأفضل أن تعمل بصمت وتدع نجاحك يتحدث.',
        'السفر يفتح آفاقاً جديدة للفكر والرؤية.'
    ];


    /**
    * Get a random Arabic letter.
    *
    * @return string Random letter.
    */
    public function letter(): string
    {
        return $this->letters[array_rand($this->letters)];
    }

    /**
    * Get a single Arabic word.
    *
    * @return string Random word.
    */
    public function word(): string
    {
        return $this->words[array_rand($this->words)];
    }

    /**
    * Get multiple Arabic words.
    *
    * @param int         $count     Optional. Number of words. Default 5.
    * @param bool        $asArray   Optional. Return as array. Default false.
    * @param string      $separator Optional. Word separator. Default space.
    *
    * @return string[]|string Array or string of words.
    */
    public function words(int $count = 5, bool $asArray = false, string $separator = ' '): array|string
    {
        $result = [];

        for ($i = 0; $i < $count; $i++) {
            $result[] = $this->words[array_rand($this->words)];
        }

        return $asArray ? $result : implode($separator, $result);
    }


    /**
    * Get a random sentence based on mode.
    *
    * @param string $mode Optional. 'dialect', 'msa', or 'mixed'. Default 'mixed'.
    *
    * @return string Random sentence.
    */
    public function sentence(string $mode = 'mixed'|'dialect'|'msa'): string
    {
        switch ($mode) {
            case 'dialect':
                $source = $this->dialectSentences;
                break;
            case 'msa':
                $source = $this->msaSentences;
                break;
            case 'mixed':
            default:
                $source = rand(0, 1) ? $this->dialectSentences : $this->msaSentences;
                break;
        }

        return $source[array_rand($source)];
    }

    /**
     * Get multiple sentences.
     *
     * @param int    $count     Optional. Number of sentences. Default 3.
     * @param string $mode      Optional. Sentence mode. Default 'mixed'.
     * @param bool   $asArray   Optional. Return as array. Default false.
     * @param string $separator Optional. Separator if not array. Default space.
     *
     * @return string[]|string Sentences as array or string.
     */
    public function sentences(int $count = 3,string $mode = 'mixed'|'dialect'|'msa', bool $asArray = false, string $separator = ' '): array|string
    {
        $result = [];

        for ($i = 0; $i < $count; $i++) {
            $result[] = $this->sentence($mode);
        }

        return $asArray ? $result : implode($separator, $result);
    }



    /**
    * Generate a paragraph composed of several sentences.
    *
    * @param int    $minSentences Minimum number of sentences. Default 3.
    * @param int    $maxSentences Maximum number of sentences. Default 7.
    * @param string $mode         Sentence mode. Default 'mixed'.
    *
    * @return string Paragraph text.
    */
    public function paragraph(int $minSentences = 3, int $maxSentences = 7, string $mode = 'mixed'|'dialect'|'msa'): string
    {
        $sentenceCount = rand($minSentences, $maxSentences);
        $sentences = [];

        for ($i = 0; $i < $sentenceCount; $i++) {
            switch ($mode) {
                case 'dialect':
                    $source = $this->dialectSentences;
                    break;
                case 'msa':
                    $source = $this->msaSentences;
                    break;
                case 'mixed':
                default:
                    $source = rand(0, 1) ? $this->dialectSentences : $this->msaSentences;
                    break;
            }

            $sentences[] = $source[array_rand($source)];
        }

        return implode(' ', $sentences);
    }

}
