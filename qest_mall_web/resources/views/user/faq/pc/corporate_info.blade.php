@extends("layout")
@section('content')
@if($is_login)
    @component('user.layouts.pc.header')
    @endcomponent
@else
    @component('user.layouts.pc.guest_header')
    @endcomponent
@endif
<link rel="stylesheet" href="{{ asset('css/pc/shop_info.css') }}">
{{-- Content Box --}}
<div class="content-box">
        {{-- Main Content --}}
        <div class="main-content">
            <section>
                <h2 class="part-title">企業情報</h2>
                    {{-- <p>{!! nl2br(e($contract)) !!}</p> --}}
            </section>

        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
@endsection
