<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>お問い合わせ｜ゑびすフードファクトリー</title>
    <link rel="stylesheet" href="css/contact.css?<?= time() ?>">
</head>
<body>
    <?php require('include/header.php'); ?>
    <div class="catch">
        <h2>お問い合わせ<span>Contact us</span></h2>
    </div>
    <div class="breadcrumblist">
        <ul>
            <li><a href="https://ebisu-gp.jp/factory/">TOP</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </div>
    <section class="contact">
        <h3>お問い合わせフォーム</h3>
        <p class="contact-info">商品についてや弊社の事業についてなど、お気軽にお問い合わせください。</p>
        <div class="wrap">
            <form class="inner" action="">
                <div class="row">
                    <div class="title">お名前<span>【必須】</span></div>
                    <div class="field">
                        <input type="text" placeholder="山田 太郎" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">フリガナ<span>【必須】</span></div>
                    <div class="field">
                        <input type="text" placeholder="ヤマダ タロウ" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">企業名・店舗名</div>
                    <div class="field">
                        <input type="text" placeholder="(株)〇〇食品サービス">
                    </div>
                </div>
                <div class="row">
                    <div class="title">メールアドレス<span>【必須】</span></div>
                    <div class="field">
                        <input type="email" placeholder="〇〇〇〇〇〇@example.com" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">お電話番号<span>【必須】</span></div>
                    <div class="field">
                        <div class="input-wrap">
                            <input class="short" type="text" placeholder="000" required>
                        </div>
                        <div class="input-wrap">
                            <input class="short" type="text" placeholder="000" required>
                        </div>
                        <input class="short l" type="text" placeholder="000" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">郵便番号<span>【必須】</span></div>
                    <div class="field">
                        <div class="input-wrap">
                            <input id="zipcode1" class="short" type="text" placeholder="000" required>
                        </div>
                        <input id="zipcode2" class="short l" type="text" placeholder="000" required>
                        <div id="getAddress" class="zip-btn">郵便番号から住所を入力</div>
                    </div>
                </div>
                <div class="row">
                    <div class="title pref">都道府県<span>【必須】</span></div>
                    <div class="field">
                        <div class="select-wrap">
                            <select id="pref_name">
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="title">ご住所<span>【必須】</span></div>
                    <div class="field">
                        <input id="address" type="text" placeholder="〇〇市〇〇町0-00-0" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">お問い合わせ分類<span>【必須】</span></div>
                    <div class="field radio">
                        <input type="radio" name="type" id="type_1" value="1" checked><label for="type_1" class="radio-btn">商品について</label>
                        <input type="radio" name="type" id="type_2" value="2"><label for="type_2" class="radio-btn">OEMについて</label>
                        <input type="radio" name="type" id="type_3" value="3"><label for="type_3" class="radio-btn">その他</label>
                    </div>
                </div>
                <div class="row up">
                    <div class="title">お問い合わせ内容<span>【必須】</span></div>
                    <div class="field">
                        <textarea placeholder="お問い合わせ内容をご入力ください。" required></textarea>
                    </div>
                </div>
                <div class="privacypolicy">
                    <div class="title">個人情報保護方針（プライバシーポリシー）</div>
                    <div class="title">この方針における個人情報等の定義</div>
                    <p>個人情報とは、当社が取扱う情報のうち、お客様個人を識別できる情報をいい、お客様のお名前、ご住所、お電話番号、メールアドレス、ご勤務先、お問い合わせ内容等、これらのうち1つまたは複数を組み合わせることにより、お客様個人を特定、識別する事のできる情報をいいます。個人データ当社が取扱うお客様の個人情報のうち、特定の個人を検索できるよう整理された情報をいい、コンピュータの検索機能により検索が可能なもの、もしくは一定の規則に従い、目次、索引等を付すことにより容易に検索が可能な状態においているものをいいます。保有個人データ当社が取扱うお客様の個人データのうち、当社自らが作成、整理したデータであって、当社において、情報の開示や内容訂正等の権限を有するものをいいます。ただし、保有期間が6ヶ月以内のもの、その他法令に定めるものを除きます。</p>
                    <div class="title">個人情報の収集</div>
                    <p>当社は、適法かつ公正な手段により、個人情報を収集いたします。</p>
                    <div class="title">個人情報の利用</div>
                    <p>当社は、お客様から個人情報をご提供いただく場合には、法令に定める場合を除き、あらかじめ、その利用目的を明示いたします。<br>当社は、法令に定める場合を除き、お客様よりご提供いただいた個人情報を、当社が明示した利用目的の範囲内で、業務の遂行上必要な限りにおいて使用いたします。<br>当社は、業務の遂行上、お客様の個人情報を、第三者との間で共同利用し、または、その取扱いを第三者に委託する場合があります。この場合、当社は、当該第三者において、お客様の個人情報を厳正に取扱うよう、適正な監督を行います。</p>
                    <div class="title">個人データの第三者提供</div>
                    <p>当社は、法令および次項に定める場合を除き、お客様の個人データを、あらかじめお客様の同意を得ることなく、第三者に提供または開示いたしません。<br>当社は、業務の遂行上やむをえず、お客様の同意を得ないで、お客様の個人データを第三者に提供させていただく場合があります。この場合、お客様からのお申出があれば、法令に従い、第三者への提供を停止いたします。</p>
                    <div class="title">保有個人データの安全管理対策等</div>
                    <p>個人情報の紛失、破壊、改ざんおよび漏えい等を防止するため、不正アクセス、コンピュータウイルス等に対する合理的な対策を講じます。</p>
                    <div class="title">保有個人データの開示・訂正・利用停止等</div>
                    <p>当社は、お客様に関する保有個人データについて、お客様ご自身がその開示・訂正・利用停止等を求める権利を有していることを認識し、お客様よりこれらの要求があった場合には、法令に従い、速やかに対応いたします。</p>
                    <div class="title">個人情報の保護に関する規定等の策定・実施等</div>
                    <p>当社は、この方針を実行するため、お客様の個人情報の保護に関する内部規定を策定し、これを当社役職員その他関係者に周知徹底させて実施いたします。また、これを継続的に維持し、必要な改善をしてまいります。</p>
                    <div class="title">この方針の適用および改定</div>
                    <p>この方針の内容は、当ウェブサイト掲載日より適用いたします。また、この方針は、法令等の要請その他当社が必要と認めた場合に予告なく改定する場合があります。</p>
                </div>
                <div class="submit-btn">
                    <button class="factory-btn" type="submit">個人情報保護方針に同意して送信する</button>
                </div>
            </form>
        </div>
    </section>
    <?php require('include/contact.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/contact.js?<?= time() ?>"></script>
</body>
</html>