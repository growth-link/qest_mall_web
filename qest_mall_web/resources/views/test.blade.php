@extends("layout")
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
/*ベース*/
.toggle {
	display: none;
}
.Label {		/*タイトル*/
	padding: 1em;
	display: block;
	color: #fff;
	background:#019ac6;
}
.Label::before{		/*タイトル横の矢印*/
	content:"";
	width: 6px;
	height: 6px;
	border-top: 2px solid #fff;
	border-right: 2px solid #fff;
	-webkit-transform: rotate(45deg);
	position: absolute;
	top:calc( 50% - 3px );
	right: 20px;
	transform: rotate(135deg);
}
.Label,
.content {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transform: translateZ(0);
	transition: all 0.3s;
}
.content {		/*本文*/
	height: 0;
	margin-bottom:10px;
	padding:0 20px;
	overflow: hidden;
}
.toggle:checked + .Label + .content {	/*開閉時*/
	height: auto;
	padding:20px ;
	transition: all .3s;
}
.toggle:checked + .Label::before {
	transform: rotate(-45deg) !important;
}
</style>

<select name="skills" multiple="" class="ui fluid dropdown">
    <option value="">Skills</option>
    <option value="angular">Angular</option>
    <option value="css">CSS</option>
    <option value="design">Graphic Design</option>
    <option value="ember">Ember</option>
    <option value="html">HTML</option>
    <option value="ia">Information Architecture</option>
    <option value="javascript">Javascript</option>
    <option value="mech">Mechanical Engineering</option>
    <option value="meteor">Meteor</option>
    <option value="node">NodeJS</option>
    <option value="plumbing">Plumbing</option>
    <option value="python">Python</option>
    <option value="rails">Rails</option>
    <option value="react">React</option>
    <option value="repair">Kitchen Repair</option>
    <option value="ruby">Ruby</option>
    <option value="ui">UI Design</option>
    <option value="ux">User Experience</option>
</select>

<!-- トグルスイッチ -->
<div class="toggle_switch">
    <input type="checkbox" name="xxx" id="cb_toggle_switch">
    <label for="cb_toggle_switch"></label>
</div>

<button class="primary_btn_radius">
    売上・会計管理
</button>

<button class="primary_btn">
    売上・会計管理
</button>

<!-- モーダル表示 -->
<div>
    <button onclick="showModal();">モーダルを表示</button>
</div>
<div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
      Profile Picture
    </div>
    <div class="image content">
      <div class="ui medium image">
        {{-- <img src="/images/avatar/large/chris.jpg"> --}}
      </div>
      <div class="description">
        <div class="ui header">We've auto-chosen a profile image for you.</div>
        <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
        <p>Is it okay to use this photo?</p>
      </div>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Nope
      </div>
      <div class="ui positive right labeled icon button">
        Yep, that's me
        <i class="checkmark icon"></i>
      </div>
    </div>
</div>

<div class="ui input">
    <input type="text" placeholder="Search...">
</div>

<!-- チェックボックス + テキスト -->
<label class="ECM_CheckboxInput">
    <input class="ECM_CheckboxInput-Input" type="checkbox">
    <span class="ECM_CheckboxInput-DummyInput"></span>
    <span class="ECM_CheckboxInput-LabelText">利用規約に同意する</span>
</label>

<!-- チェックボックスのみ -->
<label class="ECM_CheckboxInput" style="width: 40px;">
    <input class="ECM_CheckboxInput-Input" type="checkbox">
    <span class="ECM_CheckboxInput-DummyInput"></span>
</label>

<!-- ラジオボタン + テキスト-->
<input class="visually-hidden" type="radio" name="fruits" id="apple"/>
<label class="radio-label" for="apple">りんご</label>
<input class="visually-hidden" type="radio" name="fruits" id="orange"/>
<label class="radio-label" for="orange">みかん</label>
<input class="visually-hidden" type="radio" name="fruits" id="peach"/>
<label class="radio-label" for="peach">もも</label>

<!-- ラジオボタンのみ -->
<div>
    <input class="visually-hidden" type="radio" name="fruits" id="radio1"/>
    <label class="radio-label" for="radio1"></label>
    <input class="visually-hidden" type="radio" name="fruits" id="radio2"/>
    <label class="radio-label" for="radio2"></label>
    <input class="visually-hidden" type="radio" name="fruits" id="radio3"/>
    <label class="radio-label" for="radio3"></label>
</div>

<div>
    <input type="text" value="" placeholder="テキスト..." class="input-text">
</div>

<div class="password-container">
    <input type="password" value="" placeholder="パスワード..." class="input-password">
    <i class="eye icon"></i>
</div>

{{-- <div class="formItem">
    <p>
        <input type="password" placeholder="PASSWORD" id="password">
        <span class="field-icon">
            <i toggle="#password-field" class="mdi mdi-eye toggle-password"></i>
        </span>
    </p>
</div> --}}

<!-- メインカルーセル（slick.js） -->
<div class="main-carousel-slick">
    <div><a href="#"><img class="img" src="/images/mall_top/main_carousel.png"></a></div>
    <div><a href="#"><img class="img" src="/images/mall_top/main_carousel2.png"></a></div>
    <div><a href="#"><img class="img" src="/images/mall_top/main_carousel3.png"></a></div>
</div>

<div style="margin:0 10%">
    <!-- 複数画像カルーセル（slick.js）ここから -->
    <div class="five-slick qmm-slick">
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
    </div>
    <!-- 複数画像カルーセル（slick.js）ここまで -->
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

<!-- cssのみで作るアコーディオン -->
<section class="accordion">
    <input id="block-01" type="checkbox" class="toggle">
    <label class="Label" for="block-01">不思議の国のアリス</label>
    <div class="content">
        <p>【不思議の国のアリスの内容が表示します。】<br>
        アリスは川辺でおねえさんのよこにすわって、なんにもすることがないのでとても退屈（たいくつ）しはじめていました。一、二回はおねえさんの読んでいる本をのぞいてみたけれど、そこには絵も会話もないのです。「絵や会話のない本なんて、なんの役にもたたないじゃないの」とアリスは思いました。</p>
    </div>
    <input id="block-02" type="checkbox" class="toggle">
    <label class="Label" for="block-02">坊ちゃん</label>
    <div class="content">
        <p>【坊ちゃんの内容が表示します。】<br>
        親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。弱虫やーい。と囃したからである。小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、この次は抜かさずに飛んで見せますと答えた。（青空文庫より）</p>
    </div>
    <input id="block-03" type="checkbox" class="toggle">
    <label class="Label" for="block-03">徒然草</label>
    <div class="content">
        <p>【徒然草の内容が表示します。】<br>
        つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）</p>
    </div>
</section>


<div class="card m-5">
    <div class="card-header">メール送信</div>
    <div class="card-body">
        <form method="post" action="{{ route('mail.send') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">件名</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="mb-3">
                <label for="contents" class="form-label">内容</label>
                <textarea class="form-control" id="contents" name="contents" style="min-height:15em"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">送信する</button>
            </div>
        </form>
    </div>
</div>

<!-- カード情報入力フォーム -->
<form action="xxxxxxxxx(遷移先URL)" method="POST" name="card_form"> <div>カード番号:<input type="text" name="card_number"></div> <div>有効期限(年):<input type="text" name="expire_year"></div> <div>有効期限(月):<input type="text" name="expire_month"></div> <div>セキュリティコード:<input type="text" name="cvc"></div> <div>カード名義:<input type="text" name="name"></div>
    <input type="button" name="btn" value="送信" onClick="send();"> <!-- 取得したトークン等をセットするhidden項目 -->
    <input type="hidden" name="token" value="">
    <input type="hidden" name="masked_card_number" value=""><input type="hidden" name="valid_until" value="">
    <input type="hidden" name="fingerprint" value="">
    <input type="hidden" name="hc" value="">
</form>

@endsection
@section("script")
<script type="text/javascript" src="https://sandbox.paygent.co.jp/js/PaygentToken.js" charset="UTF-8"></script>
    <script>
        function showModal() {
            $('.modal').modal({
                centered: false
            }).modal('show');
        }

        // function send() {
        //     var form = document.card_form;
        //     var paygentToken = new PaygentToken();
        //     paygentToken.createToken(
        //         '52026',
        //         'live_000000000000000000000000', {
        //             card_number:form.card_number.value,
        //             expire_year:form.expire_year.value,
        //             expire_month: form.expire_month.value,
        //             cvc:form.cvc.value,
        //             name:form.name.value
        //         },
        //         execPurchase
        //         //PaygentTokenオブジェクトの生成
        //         //第1引数:マーチャントID //第2引数:トークン生成鍵 //第3引数:クレジットカード情報
        //         //クレジットカード番号 //有効期限-YY //有効期限-MM //セキュリティーコード //カード名義
        //         //第4引数:コールバック関数(トークン取得後に実行)
        //     );
        // }

        function send() {
            var form = document.card_form;
            var paygentToken = new PaygentToken();
            paygentToken.createToken(
                '52026',
                'test_ybX25bW3BbOfXzi07nKCsVf0', {
                    card_number: 4111111111111111,
                    expire_year: 27,
                    expire_month: 11,
                    cvc: 123,
                    name: "test taro"
                },
                execPurchase
                //PaygentTokenオブジェクトの生成
                //第1引数:マーチャントID //第2引数:トークン生成鍵 //第3引数:クレジットカード情報
                //クレジットカード番号 //有効期限-YY //有効期限-MM //セキュリティーコード //カード名義
                //第4引数:コールバック関数(トークン取得後に実行)
            );
        }

        send();

        function execPurchase(response) {
            var form = document.card_form;
            if (response.result == '0000') { //トークン処理結果が正常の場合
                //<!-- カード情報入力フォームから、入力情報を削除。(入力されたカード情報を、送信しないようにする。)--> 
                form.card_number.removeAttribute('name');
                form.expire_year.removeAttribute('name');
                form.expire_month.removeAttribute('name');
                form.cvc.removeAttribute('name');
                form.name.removeAttribute('name');
                //<!-- 予め用意したhidden項目にcreateToken()から応答されたトークン等を設定。--> 
                form.token.value = response.tokenizedCardObject.token;
                form.masked_card_number.value = response.tokenizedCardObject.masked_card_number;
                form.valid_until.value = response.tokenizedCardObject.valid_until;
                form.fingerprint.value = response.tokenizedCardObject.fingerprint;
                form.hc.value = response.hc;
                //<!-- カード情報入力フォームを submit。--> form.submit();

                //send();
                console.log(response);
            } else {
                console.log(response.result);
                //<!-- エラー時の処理をここに記述する -->
            }
        }
    </script>
@endsection
