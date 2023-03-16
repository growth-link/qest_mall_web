@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@component('admin.layouts.mall_global_menu')
@endcomponent
@section('content')

<a href="{{ route('admin.notices') }}" style="font-size: 12px; display: block; margin-top: 14px; margin-right: 16px; position: absolute; right: 0;">お知らせ一覧へ</a><br>

<div style="margin-left: 16px; list-style: none; display: flex; font-size: 13px; height: 19px; margin-bottom: 12px; margin-top: 1em;">
  <p>2022.08.25</p>
  <p style="margin-left: 12px;">12:00:00</p>
  <p style="margin-left: 96px; width: 840px;">未処理の開店申請があります</p>
  <a href="" style="text-decoration:underline;">ショップ管理へ</a>
</div>
<div style="margin-left: 16px; list-style: none; display: flex; font-size: 13px; height: 19px; margin-bottom: 12px;">
  <p>2022.08.25</p>
  <p style="margin-left: 12px;">12:00:00</p>
  <p style="margin-left: 96px; width: 840px;">月末の締め処理を行なってください</p>
  <a href="" style="text-decoration:underline;">会計管理へ</a>
</div>
<div style="margin-left: 16px; list-style: none; display: flex; font-size: 13px; height: 19px; margin-bottom: 40px;">
  <p>2022.08.25</p>
  <p style="margin-left: 12px;">12:00:00</p>
  <p style="margin-left: 96px; width: 840px;">参加申請が届いています</p>
  <a href="" style="text-decoration:underline;">クーポン管理へ</a>
</div>

<p style="margin-left: 16px; margin-bottom: 12px; font-size: 16px; font-weight: bold;">モールステータス</p>

<div style="display: flex; margin-bottom: 12px; margin-left: 16px;">
  <div style="background: #F7F7F7; width: 300px; height: 58px; display: flex; border-radius: 24px / 29px; margin-right: 12px; font-size: 18px; font-weight: bold; padding: 16px 25px;">
    <p style="margin: 0; line-height: 18px; padding: 4px 0;">公開ショップ数：</p>
    <p style="margin: 0; line-height: 18px; padding: 4px 0; width: 106px; text-align: right;">28</p>
  </div>

  <div style="background: #F7F7F7; width: 900px; height: 58px; display: flex; border-radius: 24px / 29px;  font-size: 18px; font-weight: bold;">
    <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">商品登録数：</p>
    <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 132px; text-align: right;">1,235</p>
    <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
    <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">在庫切れ商品数：</p>
    <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 124px; text-align: right;">300</p>
    <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
    <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">非表示商品数：</p>
    <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 141px; text-align: right;">32</p>
  </div>
</div>

<div style="background: #F7F7F7; width: 300px; height: 58px; display: flex; border-radius: 24px / 29px; margin-bottom: 12px; margin-left: 16px;  font-size: 18px; font-weight: bold; padding: 16px 25px;">
  <p style="margin: 0; line-height: 18px; width: 144px; padding: 4px 0;">クーポン参加数：</p>
  <p style="margin: 0; line-height: 18px; padding: 4px 0; width: 106px; text-align: right;">12</p>
</div>

<div style="display: flex; margin-left: 16px;">
  <div style="background: #F7F7F7; width: 512px; height: 72px; display: flex; border-radius: 32px / 35px; margin-right: 12px;  font-size: 18px; font-weight: bold; padding: 23px 25px;">
    <p style="margin: 0; line-height: 18px; padding: 5px 5px 5px 0; white-space: nowrap;">最新ウィークリー売上件数：</p>
    <p style="margin-right: 15px; font-size: 28px; line-height: 28px; width: 210px; text-align: right;">365</p>
    <p style="margin: 0; line-height: 18px; padding: 5px;">件</p>
  </div>

  <div style="background: #F7F7F7; width: 286px; height: 72px; display: flex; border-radius: 32px / 35px; margin-right: 12px;  font-size: 18px; font-weight: bold; padding: 23px 25px;">
    <p style="margin: 0; line-height: 18px; padding: 5px; white-space: nowrap;">未処理件数</p>
    <p style="color: #EF1A0d; margin-right: 15px; font-size: 28px; line-height: 28px; width: 113px; text-align: right;">28</p>
    <p style="margin: 0; line-height: 18px; padding: 5px;">件</p>
  </div>

  <div style="background: #F7F7F7; width: 294px; height: 72px; display: flex; border-radius: 32px / 35px; margin-right: 12px;  font-size: 18px; font-weight: bold; padding: 23px 25px;">
    <p style="margin: 0; line-height: 18px; padding: 5px; white-space: nowrap;">未発送件数</p>
    <p style="color: #EF1A0d; margin-right: 15px; font-size: 28px; line-height: 28px; width: 121px; text-align: right;">24</p>
    <p style="margin: 0; line-height: 18px; padding: 5px;">件</p>
  </div>
</div>

<div style="display: flex">
  <div class="j" style="width: 650px; height: 240px; border: 1px solid #CECECE; margin: 30px 0 10px 16px; position: relative; background: #FEFEFE;">
    <div style="background: #F7F7F7; width: 650px; height: 36px; position: relative; right: 1px; bottom: 1px; margin-bottom: 14px;">
      <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 16px; font-weight: bold;">モール基本管理</p>
    </div>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-right: 52px;">基本情報</a>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-right: 52px">利用規約/個人情報保護方針</a>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333;">スタッフマスタ</a>
    <br>
    <div style="margin-top: 14px;">
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-right: 52px;">出店規約</a>
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333;">管理ユーザー</a>
    </div>
    <a href="" style="line-height: 1em; font-weight: bold; color: #333333; background: #FFDF58; width: 200px; height: 36px; padding: 11px; border-radius: 18px / 18px; text-align: center; position: absolute; left: 224px; bottom: 18px;">トップバナー編集</a>
  </div>

  <div style="width: 320px; height: 240px; border: 1px solid #CECECE; margin-top: 30px; margin-left: 16px; background: #FEFEFE;">
    <div style="background: #F7F7F7; width: 320px; height: 36px; position: relative; right: 1px; bottom: 1px; margin-bottom: 14px;">
      <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 16px; font-weight: bold;">商品一覧</p>
    </div>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px;">出品商品一覧</a>
  </div>

  <div style="width: 320px; height: 240px; border: 1px solid #CECECE; margin-top: 30px; margin-left: 16px; background: #FEFEFE;">
    <div style="background: #F7F7F7; width: 320px; height: 36px; position: relative; right: 1px; bottom: 1px; margin-bottom: 14px;">
      <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 16px; font-weight: bold;">顧客管理</p>
    </div>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-right: 98px;">会員一覧</a>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333;">お知らせ作成</a>
    <br>
    <div style="margin-top: 14px;">
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-right: 70px;">メルマガ作成</a>
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333;">お知らせ配信履歴</a>
    </div>
    <div style="margin-top: 14px; margin-bottom: 14px;">
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-right: 42px;">メルマガ配信履歴</a>
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333;">お知らせ配信リスト</a>
    </div>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px;">メルマガ配信リスト</a>
  </div>
</div>

<div style="display: flex">
  <div style="width: 320px; height: 240px; border: 1px solid #CECECE; margin-left: 16px; margin-bottom: 28px; position: relative; background: #FEFEFE;">
    <div style="background: #F7F7F7; width: 320px; height: 36px; position: relative; right: 1px; bottom: 1px; margin-bottom: 14px;">
      <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 16px; font-weight: bold;">クーポン管理</p>
    </div>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-bottom: 14px;">クーポン一覧・編集</a>
    <div style="margin-top: 14px; margin-bottom: 14px;">
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px;">参加申請一覧</a>
    </div>
      <a href="" style="line-height: 1em; font-weight: bold; color: #333333; background: #FFDF58; width: 200px; height: 36px; padding: 11px; border-radius: 18px / 18px; text-align: center; position: absolute; left: 58px; bottom: 18px;">新規クーポン追加</a>
  </div>

  <div style="width: 650px; height: 240px; border: 1px solid #CECECE; margin-left: 16px; position: relative; background: #FEFEFE;">
    <div style="background: #F7F7F7; width: 650px; height: 36px; position: relative; right: 1px; bottom: 1px; margin-bottom: 14px;">
      <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 16px; font-weight: bold;">ショップ管理</p>
    </div>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-right: 52px;">ショップ一覧・編集</a>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-right: 94px">変更申請一覧</a>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333;">お知らせ作成</a>
    <div style="margin-top: 14px; margin-bottom: 14px;">
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px; margin-right: 94px;">公開申請一覧</a>
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-right: 52px;">お知らせ送信リスト</a>
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333;">お知らせ配信履歴</a>
    </div>
    <a href="{{ route('admin.shop.shops.create') }}" style="line-height: 1em; font-weight: bold; color: #333333; background: #FFDF58; width: 200px; height: 36px; padding: 11px; border-radius: 18px / 18px; text-align: center; position: absolute; left: 224px; bottom: 18px;">新規ショップ追加</a>
  </div>

  <div style="width: 320px; height: 240px; border: 1px solid #CECECE; margin-left: 16px; background: #FEFEFE;">
    <div style="background: #F7F7F7; width: 320px; height: 36px; position: relative; right: 1px; bottom: 1px; margin-bottom: 14px;">
      <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 16px; font-weight: bold;">売上・会計管理</p>
    </div>
    <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px;">売上統計</a>
    <div style="margin-top: 14px;">
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px;">会計履歴</a>
    </div>
    <div style="margin-top: 14px;">
      <a href="" style="font-size: 14px; font-weight: bold; color: #333333; margin-left: 18px;">月次会計</a>
    </div>
  </div>
</div>
@endsection