{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.womenJob')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '在宅副業ランキング！女性版')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <a name="top"><img src="{{ asset('/images/top.jpg') }}" class="top-pic"></img></a>
    <div class="box27">
        <span class="box-title">【女性限定】在宅副業ランキング</span>
        <ul>
            <a href="#ikukuru"><li>1位：3日で10万円!? 太パパ活アプリ決定版 <i class="fa fa-external-link"></i></li></a>
            <a href="#biscor"><li>2位：インフルエンサーデビュー!? ライブ配信で稼ぐ <i class="fa fa-external-link"></i></li></a>
            <a href="#moa"><li>3位：まるでLINE!? 専用アプリ通話・チャットで稼ぐ <i class="fa fa-external-link"></i></li></a>
            <a href="#charin"><li>4位：スキマ時間に!! SNS型お小遣い稼ぎ <i class="fa fa-external-link"></i></li></a>
        </ul>
    </div>
    <img src="{{ asset('/images/editor.jpg') }}" class="pic"></img>
    <!--ランキング-->
    <h1 class="ranking">【女性限定】在宅副業ランキング</h1>
    <!--イククル-->
    <a name="ikukuru" href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" target="_blank"><img src="{{ asset('/images/rank_no.1.jpg') }}" class="pic"></img></a>
    <div class="box26">
        <span class="box-title">P O I N T</span>
        <ul>
            <li class="li-top">リッチ<span class="text">太パパ多数登録！</span>だから、<span class="text">報酬金額が高い！</span></li>
            <li>デート・お食事で<span class="text">3日で10万円</span>も可能！</li>
            <li>約20年の運営実績、悪質男性ユーザーは即排除！</li>
            <li>身バレ防止！<span class="text">顔写真不要・仮名OK！</span></li>
        </ul>
    </div>
    <div class="app">
        <a class="shiny-btn" href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" target="_blank">公式アプリへ <i class="fa fa-external-link"></i></a>
    </div>
    <br>
    <!--ビスコール-->
    <a name="biscor" href="https://a-trade.jp/redirect/biscor?media=G16531" target="_blank"><img src="{{ asset('/images/biscor_rank.jpg') }}" class="pic"></img></a>
    <div class="box26">
        <span class="box-title">P O I N T</span>
        <ul>
            <li class="li-top"><span class="text">最大時給4,200円！</span></li>
            <li>今話題の<span class="text">ライブ配信デビュー!?</span> 顔出ししなくてもOK!!</li>
            <li><span class="text">好きな時間に好きな場所</span>でOK！</li>
            <li>ファンをGETして効率よく稼ごう！</li>
        </ul>
    </div>
    <div class="app">
        <a class="shiny-btn" href="https://a-trade.jp/redirect/biscor?media=G16531" target="_blank">公式ページへ <i class="fa fa-external-link"></i></a>
    </div>
    <br>
    <!--モア-->
    <a name="moa" href="https://a-trade.jp/redirect/moa?media=G16531" target="_blank"><img src="{{ asset('/images/rank_moa.jpg') }}" class="pic"></img></a>
    <div class="box26">
        <span class="box-title">P O I N T</span>
        <ul>
            <li class="li-top"><span class="text">最大時給3,600円！</span></li>
            <li>LINE感覚で<span class="text">お話するだけ!?</span> 悩み相談や暇つぶしに◎</li>
            <li>LINE感覚だから<span class="text">電車などの移動時間に！</span></li>
            <li>専用アプリだから<span class="text">完全身バレ防止！</span></li>
        </ul>
    </div>
    <div class="app">
        <a class="shiny-btn" href="https://a-trade.jp/redirect/moa?media=G16531" target="_blank">公式ページへ <i class="fa fa-external-link"></i></a>
    </div>
    <br>
    <!--チャリン-->
    <a name="charin" href="https://a-trade.jp/redirect/charin?media=G16531" target="_blank"><img src="{{ asset('/images/rank_charin.jpg') }}" class="pic"></img></a>
    <div class="box26">
        <span class="box-title">P O I N T</span>
        <ul>
            <li class="li-top"><span class="text">最大時給4,200円！</span></li>
            <li><span class="text">インスタ・ツイッターユーザー必見!?</span></li>
            <li>SNS感覚だから<span class="text">スキマ時間にOK！</span></li>
            <li>新規サービスの為、ユーザー絶賛募集中！</li>
        </ul>
    </div>
    <div class="app">
        <a class="shiny-btn" href="https://a-trade.jp/redirect/charin?media=G16531" target="_blank">公式ページへ <i class="fa fa-external-link"></i></a>
    </div>
    <br>
    <!--まとめ-->
    <img src="{{ asset('/images/footer_pic.jpg') }}" class="pic"></img>
    <a href="#top"><img src="{{ asset('/images/footer.jpg') }}" class="bottom-pic"></img></a>
@endsection