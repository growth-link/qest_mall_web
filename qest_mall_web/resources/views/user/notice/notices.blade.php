@extends("layout")
@component('user.layouts.header')
@endcomponent
@section('content')
    <div class="content-box">
        <label class="page-title">お知らせ一覧</label>

        @foreach($notices as $notice)
        <div style="width::100%;height:150px;margin-top:20px;" class="text" onclick="location.href='/login'">
            <div style="float:left;height:150px;width:5%;">
                <img src="/images/notice/icon_warning.png" style="width:20px;">
            </div>
            <div style="float:left;height:150px;width:90%;">
                <p style="font-size:17px;font-weight:bold;">{{$notice->title}}<p>
                <div style="width:90%;height:70px;">
                    <p>{{$notice->text}}</p>
                </div>
                <p>2022.08.24 12:00:00</p>
            </div>
            <div style="float:left;height:150px;width:5%;">
                <img src="/images/arrow_right.png" style="width:15px;margin-top:50px;">
            </div>
        </div>
        <hr>
        @endforeach
    </div>
        <div class="wrap" style="font-size:20px;">
            <ul>
                <li class="cls1">＜</li>
                <li class="cls1">1</li>
                <li class="cls1">2</li>
                <li class="cls1">3</li>
                <li class="cls1">4</li>
                <li class="cls1">5</li>
                <li class="cls1">＞</li>
            </ul>
        </div>
@endsection