<?php
    /* Template Name: About */
    $template_uri = get_template_directory_uri();

    get_header();
?>
<main class="page-about">
    <section class="sec-heading">
        <div class="inner">
            <h1 class="c-ttl__01 c-al--c">
                <span class="c-ft--jp">当院について</span>
                <span class="c-ft--en">About</span>
            </h1>
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </section>
    <section class="sec-features">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">6つの特徴</span>
                <span class="c-ft--en">Features</span>
            </h2>
            <ul class="features-list js-features-list">
                <li class="features-list__item js-scrollin">
                    <div class="features-list__box">
                        <div class="features-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/index/features-img-01.jpg" alt="口腔外科学会認定医が高度な歯科治療を提供します">
                        </div>
                        <div class="features-list__ct">
                            <span class="features-list__ct-count">01</span>
                            <h3 class="features-list__ct-ttl"> 口腔外科学会認定医が<br> 高度な歯科治療を提供します </h3>
                            <p> 設備や技術の面から一般の歯科医院では難しい親知らずの抜歯や、口腔内の粘膜にあるできものの治療、嚢胞の摘出などの<span class="c-fc--red">口腔外科治療も可能</span>です。 </p>
                        </div>
                    </div>
                </li>
                <li class="features-list__item js-scrollin">
                    <div class="features-list__box">
                        <div class="features-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/index/features-img-02.jpg" alt="患者様に正確な情報をご説明医師の説明責任を守ります">
                        </div>
                        <div class="features-list__ct">
                            <span class="features-list__ct-count">02</span>
                            <h3 class="features-list__ct-ttl"> 患者様に正確な情報をご説明<br> 医師の説明責任を守ります </h3>
                            <p> 当院で１番大切にしているのは患者様とのコミュニケーションです。また患者様が鏡では見ることのできない口腔内を写真で確認していただき、<span class="c-fc--red">ご納得いただける治療を心がけております。</span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="features-list__item js-scrollin">
                    <div class="features-list__box">
                        <div class="features-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/index/features-img-03.jpg" alt="高度医療機器を用いた診察">
                        </div>
                        <div class="features-list__ct">
                            <span class="features-list__ct-count">03</span>
                            <h3 class="features-list__ct-ttl"> 高度医療機器を用いた診察 </h3>
                            <p> 歯科用CT、口腔内スキャナー、口腔内カメラを導入しており、通常のレントゲンでは確認できない微細な部位を確認しての治療が可能です。より<span class="c-fc--red">精密な検査と正確な診断、質の高い医療を提供</span>いたします。 </p>
                        </div>
                    </div>
                </li>
                <li class="features-list__item js-scrollin">
                    <div class="features-list__box">
                        <div class="features-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/index/features-img-04.jpg" alt="通院しやすい立地と100台以上の駐車場">
                        </div>
                        <div class="features-list__ct">
                            <span class="features-list__ct-count">04</span>
                            <h3 class="features-list__ct-ttl"> 通院しやすい立地と<br> 100台以上の駐車場 </h3>
                            <p> 千葉都市モノレール天台駅から徒歩1分で、商業施設(skip天台)内に医院がある為、大きな駐車場がご利用いただけます。また<span class="c-fc--red">土曜日も診療</span>しておりますので、平日に治療に来れない方にもお越しいただけます。 </p>
                        </div>
                    </div>
                </li>
                <li class="features-list__item js-scrollin">
                    <div class="features-list__box">
                        <div class="features-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/index/features-img-05.jpg" alt="予防・メインテナンスを重視します">
                        </div>
                        <div class="features-list__ct">
                            <span class="features-list__ct-count">05</span>
                            <h3 class="features-list__ct-ttl"> 予防・メインテナンスを<br> 重視します </h3>
                            <p> 歯科治療においてブラッシングは非常に重要です。当院では治療だけでなく、<span class="c-fc--red">歯磨き指導や予防、メインテナンスに力を入れております。</span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="features-list__item js-scrollin">
                    <div class="features-list__box">
                        <div class="features-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/index/features-img-06.jpg" alt="ベビーカーで診療室まで入っていただけます">
                        </div>
                        <div class="features-list__ct">
                            <span class="features-list__ct-count">06</span>
                            <h3 class="features-list__ct-ttl"> ベビーカーで診療室まで<br> 入っていただけます </h3>
                            <p> 小さなお子様連れの方にも来ていただけるように、診療室は広めに設計し、<span class="c-fc--red">ベビーカーのまま診療室に入っていただけます。</span>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-hospital">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">院内紹介</span>
                <span class="c-ft--en">Hospital</span>
            </h2>
            <ul class="clinic-list js-clinic-list">
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-01.jpg" alt="立地">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">立地</h3>
                            <p> 横浜市営地下鉄ブルーラインとグリーンラインが通るセンター北駅より徒歩3分。地元の方はもちろん、遠方からの患者様にも通いやすい、便利な立地です。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-02.jpg" alt="受付">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">受付</h3>
                            <p> 常に気持ちよくご来院いただけるよう、スタッフ一同心がけております。ご不明点や心配なことがございましたら、お気軽におたずねください。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-03.jpg" alt="清潔で衛生的な環境">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">清潔で衛生的な環境</h3>
                            <p> 院内の空気の清浄化や換気はもちろん、診療スペース・共用部分の消毒・除菌を徹底し、常に清潔な環境づくりを目指しております。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-04.jpg" alt="落ち着ける空間">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">落ち着ける空間</h3>
                            <p> 医療機関を受診する際には、緊張される方も多いと思います。インテリアや待合スペースの配置など、落ち着ける空間づくりを心がけております。 </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-facility">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">設備紹介</span>
                <span class="c-ft--en">Facility</span>
            </h2>
            <div class="facility-heading c-txt__basic js-scrollin">
                <img srcset="<?php echo $template_uri; ?>/img/about/facility-img.jpg" alt="予防・メインテナンスを重視します">
                <h3 class="facility-heading__ttl">歯科用CT</h3>
                <p> 治療の第一歩は、<br class="sp">的確な診断からはじまります。<br> 最新の歯科用CTで撮影した<br class="sp">三次元画像を元に、<br class="sp">患者様のお口の状態を正確に把握し、<br> 最良の治療方針をご提案いたします。 </p>
            </div>
            <ul class="clinic-list clinic-list--02">
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-05.jpg" alt="口腔内カメラ">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">口腔内カメラ</h3>
                            <p> 見えにくい口腔内を、細部まで鮮明に映し出すことができる歯科用カメラです。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-06.jpg" alt="モニター">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">モニター</h3>
                            <p> 口腔内の状態を「見える化」し、歯科治療そして予防への意識を高めることができます。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-07.jpg" alt="滅菌器">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">滅菌器</h3>
                            <p> 安心して治療を受けていただけるよう、医療器具の徹底した衛生管理を行っております。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img srcset="<?php echo $template_uri; ?>/img/about/img-08.jpg" alt="完全個室診察室">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">完全個室診察室</h3>
                            <p> プライバシーに配慮した、完全個室の診察室もございます。 </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-greeting">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">院長挨拶</span>
                <span class="c-ft--en">Greeting</span>
            </h2>
            <div class="greeting-block mbpc-73 mbsp-77">
                <div class="greeting-block__ct c-txt__basic js-scrollin">
                    <h3 class="greeting-block__ct-ttl">
                        <span class="c-ft--en">Eigo</span>
                        <span class="c-ft--jp">挨拶の見出しが入ります挨拶の見出しが入ります</span>
                    </h3>
                    <p> ここには挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。挨拶の本文が入ります。 </p>
                    <p class="greeting-block__ct-name">
                        <strong>院長　藤原 亘</strong>
                    </p>
                </div>
                <div class="greeting-block__img js-scrollin">
                    <img srcset="<?php echo $template_uri; ?>/img/index/greeting-img.jpg" alt="挨拶の見出しが入ります挨拶の見出しが入ります">
                </div>
            </div>
            <div class="flex-center js-scrollin">
                <a href="" class="c-btn__02">詳しく見る（著者情報ページへ）</a>
            </div>
        </div>
    </section>
    <section class="sec-staff">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">スタッフ紹介</span>
                <span class="c-ft--en">Staff</span>
            </h2>
            <ul class="staff-list">
                <li class="staff-list__item js-scrollin">
                    <div class="staff-list__img">
                        <img srcset="<?php echo $template_uri; ?>/img/about/staff-01.jpg" alt="丸山先生(仮)">
                    </div>
                    <div class="staff-list__ct c-txt__basic">
                        <h3 class="staff-list__ct-ttl">
                            <small>矯正歯科医</small> 丸山先生(仮) </h3>
                        <ul class="tag-list">
                            <li><span>XXXXXX学会専門医</span></li>
                            <li><span>XXXXXX学会会員</span></li>
                            <li><span>XXXXXX学会会員</span></li>
                        </ul>
                        <p> 紹介文やひとことなどダミーが入ります。紹介文やひとことなどダミーが入ります。紹介文やひとことなどダミーが入ります。紹介文やひとことなどダミーが入ります。紹介文やひとことなどダミーが入ります。紹介文やひとことなどダミーが入ります。 </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php
    get_footer();
?>