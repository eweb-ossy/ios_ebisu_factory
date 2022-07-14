<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>ゑびすフードファクトリー</title>
    <link rel="stylesheet" href="css/index.css?<?= time() ?>">
</head>
<body>
    <?php require('include/header.php'); ?>

    <div class="mv">
        <!-- data-caption="<p>コメント</p><p>コメント</p>" <p>〜</p>　2つまで -->
        <div class="slide-main">
            <div class="slide">
                <img src="images/top_mv_photo_01.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ</p><p>商品づくり。</p>">
            </div>
            <div class="slide">
                <img src="images/top_mv_photo_02.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ2</p><p>コメント2。</p>">
            </div>
            <div class="slide">
                <img src="images/top_mv_photo_03.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ3</p><p>コメント3。</p>">
            </div>
            <div class="slide">
                <img src="images/top_mv_photo_04.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ4</p><p>コメント4</p>">
            </div>
            <div class="slide">
                <img src="images/top_mv_photo_05.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ5</p><p>コメント5</p>">
            </div>
            <div class="slide">
                <img src="images/top_mv_photo_06.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ6</p><p>コメント6</p>">
            </div>
            <div class="slide">
                <img src="images/top_mv_photo_07.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ7</p><p>コメント7。</p>">
            </div>
            <div class="slide">
                <img src="images/top_mv_photo_08.jpg" loading="lazy" alt="" data-caption="<p>地元の魅力を詰め込んだ8</p><p>コメント8。</p>">
            </div>
        </div>
        <div id="mv_caption" class="slide-main-on-text">
            <p>地元の魅力を詰め込んだ</p>
            <p>商品づくり。</p>
        </div>
        <div class="slide-main-on-btn">
            <a class="factory-btn" href="products.html">商品情報はこちら</a>
        </div>
    </div>
    <div class="mv-slide-thumbnail">
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_01.png" loading="lazy" alt="" id="aa">
        </div>
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_02.png" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_03.png" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_04.png" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_05.png" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_06.png" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_07.png" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/top_mv_photo_thumbnail_08.png" loading="lazy" alt="">
        </div>
    </div>

    <section class="information">
        <div class="inner">
            <h2>お知らせ<span>INFORMATION</span></h2>
            <div class="block">
                <div class="info-header">
                    <div class="title news">最新情報</div>
                    <a href="news.html">一覧</a>
                </div>
                <a href="news_detail.html" class="info-content">
                    <div class="date">0000.00.00</div>
                    <div class="body">新着情報が入ります。新着情報が入ります。新着情報が入ります。新着情報が入ります。</div>
                </a>
                <a href="news_detail.html" class="info-content">
                    <div class="date">0000.00.00</div>
                    <div class="body">新着情報が入ります。新着情報が入ります。新着情報が入ります。新着情報が入ります。</div>
                </a>
                <a href="news_detail.html" class="info-content">
                    <div class="date">0000.00.00</div>
                    <div class="body">新着情報が入ります。新着情報が入ります。新着情報が入ります。新着情報が入ります。</div>
                </a>
            </div>
            <div class="block">
                <div class="info-header">
                    <div class="title campaign">キャンペーン</div>
                    <a href="">一覧</a>
                </div>
                <a href="" class="info-content">
                    <div class="date">0000.00.00</div>
                    <div class="body">新着情報が入ります。新着情報が入ります。新着情報が入ります。新着情報が入ります。</div>
                </a>
                <a href="" class="info-content">
                    <div class="date">0000.00.00</div>
                    <div class="body">新着情報が入ります。新着情報が入ります。新着情報が入ります。新着情報が入ります。</div>
                </a>
                <a href="" class="info-content">
                    <div class="date">0000.00.00</div>
                    <div class="body">新着情報が入ります。新着情報が入ります。新着情報が入ります。新着情報が入ります。</div>
                </a>
            </div>
        </div>
    </section>

    <section class="product">
        <div class="inner">
            <h2>商品情報<span>PRODUCT</span></h2>
            <p>ゑびすキッチンでは、関村牧場の「漢方和牛」<br class="for-sp">「漢方三元豚」を使用した商品を製造・販売しています。</p>
            <div class="logo">14種類の漢方飼料で育った<img src="images/logo_brand_column.svg" loading="lazy" alt="漢方和牛＆漢方三元豚 ダイチ"></div>
            <div class="row">
                <a href="products.html" class="block">新商品</a>
                <a href="products.html" class="block">ハム・ソーセージ</a>
                <a href="products.html" class="block">調理加工食品</a>
            </div>
            <a href="" class="factory-btn">オンラインショップ　EBISU KITCHENはこちら</a>
        </div>
    </section>

    <section class="recipe">
        <h2>カンタン！おいしい！レシピ</h2>
        <a href="recipe.html" class="factory-btn">レシピの詳細はこちら</a>
    </section>

    <section class="policy">
        <div class="inner">
            <h2>大切にしていること<span>POLICY</span></h2>
            <div class="row left">
                <div class="policy-img">
                    <img src="images/top_policy_img_01.png" loading="lazy" alt="安心安全トレーサビリティ">
                </div>
                <div class="policy-text">
                    <h3>安心安全トレーサビリティ</h3>
                    <p>食材の生産・原材料・流通経路を追跡できる仕組み「トレーサビリティ」は、長年地域と繋がり活動してきたゑびすグループでは、当時から続けてきたあたりまえのことでもあります。こだわりのお肉や新鮮な野菜のおいしさを活かした安心・安全な食をお届けします。</p>
                    <a href="important.html#policy1" class="factory-btn">詳しくはこちら</a>
                </div>
            </div>
            <div class="row right">
                <div class="policy-text">
                    <h3>栄養と健康</h3>
                    <p>ゑびすファクトリーで作られる商品は、全て化学調味料不使用&無添加。商品の元となる原料は、その安全性や栄養・おいしさに折り紙つきの、地元の食材が中心です。地域との繋がりを地盤に、食べる人の健康を第一に考え、安心・安全を徹底した商品づくりを行なっています。</p>
                    <a href="important.html#policy2" class="factory-btn">詳しくはこちら</a>
                </div>
                <div class="policy-img">
                    <img src="images/top_policy_img_02.png" loading="lazy" alt="栄養と健康">
                </div>
            </div>
            <div class="row left">
                <div class="policy-img">
                    <img src="images/top_policy_img_03.png" loading="lazy" alt="安全管理">
                </div>
                <div class="policy-text">
                    <h3>安全管理</h3>
                    <p>機械やシステムの使い方はもちろん、スタッフ全員が安全に業務こなせるよう、マニュアルに沿って作業を行います。安心・安全な製品をお届けできるよう、現場の環境を整えることからしっかりと取り組んでいます。</p>
                    <a href="important.html#policy3" class="factory-btn">詳しくはこちら</a>
                </div>
            </div>
            <div class="row right">
                <div class="policy-text">
                    <h3>サステナビリティ</h3>
                    <p>地域社会との関わりを通じ、持続可能なフードロス削減や輸送時のCO2排出量削減を意識した取り組みを行なえるのは、原料の生産から加工・出荷までを一貫して行うゑびすグループの強みです。安心・安全な食材を無駄にしない活動を通じ、地域、そして日本のフードロス削減に貢献してまいります。</p>
                    <a href="important.html#policy4" class="factory-btn">詳しくはこちら</a>
                </div>
                <div class="policy-img">
                    <img src="images/top_policy_img_04.png" loading="lazy" alt="サステナビリティ">
                </div>
            </div>
        </div>
    </section>

    <section class="voice">
        <div class="inner">
            <h2>お客様の声<span>VOICE</span></h2>
            <div class="slide-voice">
                <div class="slide">
                    <div class="voice-box red">
                        <div class="title">食卓の主役として<br>重宝しています。<br>小学生の子供の大好物です！</div>
                        <div class="name">30代 女性</div>
                        <div class="body">お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="voice-box blue">
                        <div class="title">食卓の主役として<br>重宝しています。<br>小学生の子供の大好物です！</div>
                        <div class="name">30代 女性</div>
                        <div class="body">お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="voice-box yellow">
                        <div class="title">食卓の主役として<br>重宝しています。<br>小学生の子供の大好物です！</div>
                        <div class="name">30代 女性</div>
                        <div class="body">お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="voice-box red">
                        <div class="title">食卓の主役として<br>重宝しています。<br>小学生の子供の大好物です！</div>
                        <div class="name">30代 女性</div>
                        <div class="body">お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="voice-box blue">
                        <div class="title">食卓の主役として<br>重宝しています。<br>小学生の子供の大好物です！</div>
                        <div class="name">30代 女性</div>
                        <div class="body">お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="voice-box yellow">
                        <div class="title">食卓の主役として<br>重宝しています。<br>小学生の子供の大好物です！</div>
                        <div class="name">30代 女性</div>
                        <div class="body">お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="link">
        <div class="inner">
            <a href="">企業情報<span>COMPANY</span></a>
            <a href="about_oem.html">OEMについて<span>ABOUT OEM</span></a>
        </div>
    </section>

    <?php require('include/contact.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/index.js?<?= time() ?>"></script>
</body>
</html>