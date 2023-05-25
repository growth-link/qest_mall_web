@extends("layout")
@section('content')
@if($is_login)
    @component('user.layouts.pc.header')
    @endcomponent
@else
    @component('user.layouts.pc.guest_header')
    @endcomponent
@endif
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/faq.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('faq') }}

        {{-- Main Content --}}
        <div class="main-content">
            <h2 class="faq-title">よくあるご質問（FAQ）</h2>
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
                            @if ($sentence['image'])
                                <input type="hidden" name="image" value="{{ $sentence['image'] }}">
                            @endif
                            @if ($sentence['link'])
                                <input type="hidden" name="link" value="{{ $sentence['link'] }}">
                            @endif
                        </div>
                    </nav>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/accordion.js') }}"></script>
    <script src="{{ asset('/js/pc/faq.js') }}"></script>
@endsection
