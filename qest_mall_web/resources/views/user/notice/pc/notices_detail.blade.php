@extends("layout")
@component('user.layouts.header')
@endcomponent
@section('content')
    <div class="content-box">
        <p class="text" onclick="location.href='/notices'">＜一覧に戻る</p>

        <div style="width::100%;height:150px;margin-top:20px;" class="text" onclick="location.href='/login'">
            <div style="float:left;height:150px;width:5%;">
                <img src="/images/notice/icon_warning.png" style="width:30px;">
            </div>
            <div style="float:left;height:150px;width:95%;">
                <p style="font-size:17px;font-weight:bold;">{{$notice->title}}<p>
                <p>2022.08.24 12:00:00</p>
                <div style="width:90%;height:70px;margin-top:50px;">
                    <p>{{$notice->text}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection