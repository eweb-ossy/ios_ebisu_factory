<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>商品情報｜ゑびすフードファクトリー</title>
    <link rel="stylesheet" href="css/product_detail.css?<?= time() ?>">
</head>
<body>
    <?php require('include/header.php'); ?>
    <div class="catch">
        <h2>商品情報<span>Products</span></h2>
    </div>
    <div class="breadcrumblist">
        <ul>
            <li><a href="https://ebisu-gp.jp/factory/">TOP</a></li>
            <li><a href="products.html">商品情報</a></li>
            <li><a href="product_detail.html">漢方和牛 ゴロゴロビーフシチュー</a></li>
        </ul>
    </div>
    <section class="product_detail">
        <div class="inner">
            <div class="product-title">
                <!-- ↓ new記載で「NEW」を表示 -->
                <div class="mark new"></div>
                <div class="title">漢方和牛 ゴロゴロビーフシュー</div>
            </div>
            <div class="product-img">
                <div id="product_slide" class="main">
                    <div class="slide">
                        <img src="images/product_detail_photo01.jpg" loading="lazy" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/product_detail_photo02.jpg" loading="lazy" alt="">
                    </div>
                </div>
            </div>
            <div class="product-text">
                <p>商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。商品説明文が入ります。</p>
                <div class="standard">
                    <div class="title">商品規格</div>
                    <p>0個入（000g）</p>
                </div>
                <div class="howto">
                    <div class="title">調理方法</div>
                    <p>レンジ調理</p>
                </div>
                <div class="jancode">
                    <div class="title">JANコード</div>
                    <p>0000000000000</p>
                </div>
                <div class="data">
                    <div class="title">原材料</div>
                    <p>鶏肉（国産）、豚脂、つなぎ（粉末状植物性たん白、パン粉、でん粉）、粉末卵白、チキンエキス、しょうゆ、砂糖、卵白、食塩、植物油脂、卵殻粉、酢、香辛料、衣（パン粉、植物油脂、でん粉、粉末卵白、コーンフラワー、食塩）、ソース（トマトソース）、揚げ油（パーム油、なたね油）／加工でん粉、増粘剤（加工でん粉、キサンタンガム）、酸化防止剤（ビタミンC、ビタミンE、ローズマリー抽出物）、調味料（アミノ酸等）、酸味料、甘味料（スクラロース）、香辛料抽出物、（一部に小麦・卵・乳成分・大豆・鶏肉・豚肉を含む）</p>
                </div>
            </div>
        </div>
    </section>
    <?php require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/product_detail.js?<?= time() ?>"></script>
</body>
</html>