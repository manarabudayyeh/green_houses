@extends('layouts.app')

@section('title', 'منتجاتنا - عليان للبيوت الزراعية')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')

<div class="scroll-prog" id="prog"></div>

{{-- HERO --}}
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-lines">
        <span></span><span></span><span></span>
        <span class="v"></span><span class="v"></span><span class="v"></span>
    </div>
    <div class="hero-orb"></div>
    <div class="hero-orb"></div>
    <div class="hero-inner">
        <div class="hero-pill">كتالوج المنتجات الزراعية</div>
        <h1 class="hero-title"><em>منتجاتنا</em></h1>
        <p class="hero-sub">حلول زراعية متطورة لأعلى إنتاجية وأفضل جودة</p>
    </div>
    <svg class="hero-wave" viewBox="0 0 1200 60" preserveAspectRatio="none">
        <path d="M0,30 C200,60 400,0 600,30 C800,60 1000,0 1200,30 L1200,60 L0,60 Z" fill="#f0f5f0"/>
    </svg>
</section>

{{-- FILTER --}}
<nav class="filter-nav" aria-label="تصفية المنتجات">
    <button class="filter-btn active" data-filter="all">الكل</button>
    <button class="filter-btn" data-filter="tunnel">البيوت الزراعية</button>
    <button class="filter-btn" data-filter="systems">الأنظمة</button>
    <button class="filter-btn" data-filter="cover">التغطيات</button>
</nav>

{{-- PRODUCTS --}}
<div class="products-wrapper" id="products">

    @php
    $products = [
        ['id'=>1,'num'=>1,'cat'=>'tunnel','tag_ar'=>'بيوت نفقية','title_ar'=>'البيوت النفقية المفردة','title_en'=>'Tunnel Greenhouses','img_tag'=>'TUNNEL GREENHOUSE','images' => ['tunnel_single_one.webp', 'tunnel_single_two.webp'],'points'=>['تتميز هذه البيوت بسهولة تركيبها والتحكم بالمناخ داخلها.','يمكن تغطية هذه البيوت بأكثر من مادة أهمها: البلاستيك الزراعي أو الشبك الزراعي.','أطوال هذه البيوت مرنة وتعتمد على عدد الأقواس وأشهرها:'],'sub'=>['17 قوس (عرض 9 م، طول 39 م)','20 قوس (عرض 9 م، طول 46.5 م)','24 قوس (عرض 9 م، طول 56.5 م)']],
        ['id'=>2,'num'=>2,'cat'=>'tunnel','tag_ar'=>'بيوت نفقية','title_ar'=>'البيوت النفقية المبردة','title_en'=>'Cooled Tunnels','img_tag'=>'COOLED TUNNEL','images' => ['cooled_one.webp', 'cooled_two.webp'],'points'=>['تمتاز هذه البيوت بإضافة نظام تبريد مكون من مروحتين للشفط وخلايا كرتونية ومضخة مياه، وذلك للحصول على درجة حرارة مناسبة للزراعة.','يمكن تغطية هذه البيوت بأكثر من مادة أهمها: البلاستيك الزراعي، البولي كربونيت أو الفايبر جلاس.','طول البيت عادة ما يكون بين 34 – 45 م وعرضه 9 م.','يتم التحكم بالبيت عن طريق لوحة تحكم ذكية مربوطة بحساسات للرطوبة والحرارة.'],'sub'=>[]],
        ['id'=>3,'num'=>3,'cat'=>'tunnel','tag_ar'=>'بيوت قائمة الجوانب','title_ar'=>'بيوت قائمة الجوانب','title_en'=>'Hight Tunnel Greenhouses','img_tag'=>'HIGH TUNNEL','images' => ['high_tunnel_one.webp', 'high_tunnel_two.webp'],
        'points'=>['تتميز هذه البيوت بسهولة تركيبها والتحكم بالمناخ داخلها.',
        'يمكن تغطية هذه البيوت بأكثر من مادة أهمها: البلاستيك الزراعي أو الشبك الزراعي أو البوليكاربونيت.',
        'أطوال هذه البيوت مرنة وتعتمد على عدد الأقواس.',
        'تمتاز هذه البيوت بأن جوانبها قائمة والارتفاع 4م وارتفاع الوسط 6.5م.'],'sub'=>[]],
        
        ['id'=>4,'num'=>4,'cat'=>'tunnel','tag_ar'=>'صالات زراعية','title_ar'=>'الصالات الزراعية','title_en'=>'Multi-span Greenhouses','img_tag'=>'MULTI-SPAN','images' => ['multi_span_one.webp', 'multi_span_two.webp','multi_span_three.webp','multi_span_four.webp'],
        'desc'=>'مساحتها وارتفاعها أكبر من البيوت النفقية ويمكن تصميمها بأشكال وإضافات عديدة مثل:',
        'points'=>['خيارات متعددة للغطاء: بلاستيك، بوليكاربونيت، فيبر جلاس أو الشبك الزراعي.',
        'نظام تبريد متكامل (مراوح الشفط والخلايا الكرتونية).',
        'نظام الري أو التسميد (Fertigation) الأوتوماتيكي.',
        'نظام التحكم بالمناخ: للتحكم بمناخ البيت عن طريق لوحة تحكم تفاعلية.',
        'نظام التظليل: يستخدم للتحكم بإضاءة البيت.',
        'نظام التهوية العلوية والجانبية (أوتوماتيكي أو يدوي).',
        'يتراوح عرض الخانة الواحدة بين 8 – 10 م.',
        'يمكن تصميم الصالات بارتفاعات تصل إلى 7 م.',
        'يختلف شكل السقف مثل الشكل القوسي والهرمي والمتدرج.'],'sub'=>[]],

       ['id'=>5,'num'=>5,'cat'=>'tunnel','tag_ar'=>'البيوت والمعرشات الشبكية','title_ar'=>'البيوت والمعرشات الشبكية','title_en'=>'Net Houses','img_tag'=>'NET-HOUSES','images' => ['net_houses_one.webp', 'net_houses_two.webp'],
        'points'=>['تمتاز هذه البيوت بكلفتها المنخفضة مقارنة الصالات والبيوت النفقية.',
        'يمكن تغطية هذه البيوت بالشاش الزراعي بأكثر من نسبة تظليل وأكثر من حبكة.',
        'ارتفاع المعرشات يصل لغاية 6م.',
        'يمكن زراعة الكثير من المحاصيل الشجرية في هذا النوع من المعرشات لحمايتها من الصقيع والبرد ولتجديد الحرارة.',
        'أمثلة على الأصناف التي يتم زراعتها في هذا النوع من المعرشات:'],
        'sub'=>['الموز، المانجا، الافوكادو، الدراجون فروت، وغيرها من المحاصيل.',
        'يمكن استخدام هذه البيوت لتربية الأشجار بطريقة مكثفة مثل المانجا.']],

        ['id'=>6,'num'=>6,'cat'=>'systems','tag_ar'=>'أنظمة التبريد','title_ar'=>'أنظمة التبريد','title_en'=>'Cooling Systems','img_tag'=>'COOLING SYSTEMS ','images' => ['cooling_one.webp', 'cooling_two.webp'],
        'points'=>['مراوح التبريد (الشفط): مراوح إيطالية من شركة PERICOLI.',
        'مراوح التوزيع: مراوح إيطالية من شركة PERICOLI.',
        'خلايا تبريد كرتونية: الخلايا الأكثر شيوعًا وقياساتها تتراوح بين 1-2 م طول و 10-20 سم سماكة، وهي إيطالية الصنع من شركة PERICOLI.',
        'خلايا تبريد بلاستيكية: خلايا تبريد مصنوعة من مادة البولي بروبلين (Polypropylene) وهي مادة بلاستيكية تتميز عن الخلايا التقليدية بما يلي:'
        ],
        'sub'=>['تعيش لعمر أطول أكثر من ضعف عمر الخلايا الكرتونية.',
        'سهولة تنظيفها.',
        'لا تتآكل وبالتالي صيانة أقل.']],

        ['id'=>7,'num'=>7,'cat'=>'systems','tag_ar'=>' أحواض التبريد','title_ar'=>'أحواض التبريد','title_en'=>'Cooling Tanks','img_tag'=>'COOLING TANKS ','images' => ['cooling_tank_one.webp','cooling_tank_two.webp'],
        'points'=>['الإطارات التقليدية: المصنوعة من الحديد المجلفن سماكة 0.5 ملم.',
        'الإطارات الإيطالية (ماركة PERICOLI): إطارات الحديد المجلفن المدهون حرارياً (مناسب لطلاء السيارات).',
        ],'sub'=>[]],

        ['id'=>8,'num'=>8,'cat'=>'cover','tag_ar'=>'الاكسسوارات','title_ar'=>'الاكسسوارات','title_en'=>'Accessories','img_tag'=>'ACCESSORIES ','images' => ['accessories_one.webp','accessories_two.webp'],
        'points'=>['بروفيلات تركيب البلاستيك (حديد مجلفن).',
        'بروفيلات تركيب البلاستيك الإيطالية (PVC).',
        'مرابط أقواس الصالات (تيوبات أو بساتم).',
        'مسننات التهوية العلوية والجانبية الكهربائية واليدوية (صناعة إيطالية).',
        'مرابط تثبيت البلاستيك على الحديد (PVC صناعة إيطالية).',
        ],'sub'=>[]],

        ['id'=>9,'num'=>9,'cat'=>'systems','tag_ar'=>'الزراعة المائية','title_ar'=>'الزراعة المائية','title_en'=>'Hydroponics','img_tag'=>'HYDROPONICS ','images' => ['hydro_one.webp','hydro_two.webp'],
        'desc' => 'الزراعة المائية من الطرق المبتكرة في الزراعة دون الحاجة إلى التربة، إذ إنها تعتمد على الماء ومجموعة من العناصر لتوفير كافة حاجات النبات للنمو.
في السنوات الأخيرة، بدأ الاهتمام في استخدام هذه التقنية بشكل سريع لجدواها الاقتصادية ومردودها من الناحية التجارية وخصوصاً في زراعة الخضروات. يستخدم في أنظمة الزراعة المائية معدات أهمها:',
        'points'=>['الداتش باكت ( Dutch Bucket )',
        'الأنابيب البلاستيكية ( PVC )',
        'أهم مميزات الزراعة المائية:',
        ],'sub'=>[
            'الزراعة دون الحاجة إلى التربة التقليدية.',
            'توفير في استخدام المياه بنسبة كبيرة.',
            'القدرة على التحكم الدقيق في تغذية النبات بالعناصر الضرورية.',
            'السهولة في عملية الري وتعقيم البيئة الزراعية.',
            'الزيادة في إنتاجية النبات من خلال القدرة على تحسين عمليات التغذية والتهوية للجذور.',
            'خفض استخدام المبيدات الكيميائية بشكل كبير وبالتالي ارتفاع جودة المحصول وحماية البيئة.',
        ]],


    ];
    @endphp

    @foreach($products as $p)
    <article class="product-card" data-category="{{ $p['cat'] }}">
        <div class="card-images">
        @foreach($p['images'] as $img)
        <div class="img-wrap main-img">
            <img src="{{ asset('img/products/'.$img) }}" alt="{{ $p['img_tag'] }}" loading="lazy">
        </div>
        @endforeach
            {{-- <div class="img-wrap">
                <img src="{{ asset('img/products/'.$p['img1']) }}" alt="{{ $p['title_ar'] }}" loading="lazy">
            </div>
            <div class="img-wrap">
                <img src="{{ asset('img/products/'.$p['img2']) }}" alt="{{ $p['title_ar'] }}" loading="lazy">
            </div> --}}
            <div class="card-num">{{ $p['num'] }}</div>
            <span class="card-img-tag">{{ $p['img_tag'] }}</span>
        </div>
        <div class="card-content">
            <div class="card-header">
                <div class="card-tag">
                    <div class="card-tag-dot"></div>
                    <span class="card-tag-text">{{ $p['tag_ar'] }}</span>
                </div>
                <h2 class="card-title">{{ $p['title_ar'] }}</h2>
                <p class="card-en">{{ $p['title_en'] }}</p>
            </div>
            <div class="card-divider"></div>
            
            <ul class="card-points">
            @if(!empty($p['desc']))
              <p> {{$p['desc']}}</p>
            @endif
                @foreach($p['points'] as $point)
                <li>
                    <div class="pt-icon">
                        <svg viewBox="0 0 10 10" fill="none">
                            <circle cx="5" cy="5" r="4" fill="#34a83b"/>
                            <path d="M3 5l1.5 1.5L7 3.5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span>{{ $point }}</span>
                </li>
                @endforeach
                @if(!empty($p['sub']))
                <li>
                    <div>
                        <ul class="sub-list no-check">
                            @foreach($p['sub'] as $s)
                            <li>{{ $s }}</li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
            {{-- <a class="card-btn">
                تفاصيل المنتج <span class="card-btn-arrow">←</span>
            </a> --}}
        </div>
    </article>
    @endforeach

</div>

{{-- <a class="fab" href="#" aria-label="العودة لأعلى الصفحة">↑</a> --}}

@endsection

@section('scripts')
<script src="{{ asset('js/products.js') }}"></script>
@endsection