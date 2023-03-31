@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/sp/faq.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            {{ Breadcrumbs::render('sp.faq') }}

            <h2 class="section-title">よくあるご質問（FAQ）</h2>

            @foreach ($faq as $section)
                <h3 class="faq-section-title">{{ $section['title'] }}</h3>
                @foreach ($section['sentence'] as $sentence)
                    <div class="nav-open">
                        <p class="initial">Q.</p>
                        <p class="sentence">{!! nl2br(e($sentence['question'])) !!}</p>
                        <div class="nav-icon">
                            <div class="nav-switch"></div>
                        </div>
                    </div>
                    <nav class="accordion-nav">
                        <div class="nav-body">
                            <p class="initial">A.</p>
                            <p class="sentence">{!! nl2br(e($sentence['answer'])) !!}</p>
                            @if (($sentence['image']))
                                <input type="hidden" name="image" value="{{ $sentence['image'] }}">
                            @endif
                            @if (($sentence['link']))
                                <input type="hidden" name="link" value="{{ $sentence['link'] }}">
                            @endif
                        </div>
                    </nav>
                @endforeach
            @endforeach
        </div>
    </div>
    @component('user.layouts.sp.footer')
    @endcomponent
    @component('user.layouts.sp.menu')
    @endcomponent
</div>
@endsection
@section("script")
    <script src="{{ asset('/js/sp/accordion.js') }}"></script>
    <script src="{{ asset('/js/sp/faq.js') }}"></script>
@endsection
