@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/shop_info.css') }}">
{{-- Content Box --}}
<div class="content-box">
        {{-- Main Content --}}
        <div class="main-content">
            <section>
                <h2 class="part-title">利用規約/個人情報保護方針</h2>
                    <p>{!! nl2br(e($contract)) !!}</p>
            </section>

        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
@endsection
