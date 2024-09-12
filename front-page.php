<?php
    get_header();
    $template_uri = get_template_directory_uri();
?>

<main class="page-index">
    <section class="sec-mv">
        <ul class="mv-slider js-mv-slider">
            <li class="mv-slider__item">
                <div class="mv-slider__img mv-slider__img--01">
                    <picture>
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-01-sp.webp" media="(max-width:834px)" type="image/webp">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-01-sp.jpg" media="(max-width:834px)">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-01.webp" type="image/webp">
                        <img src="<?php echo $template_uri; ?>/img/index/mv-01.jpg" alt="患者様とのコミュニケーションを大切に治療を進めます。">
                    </picture>
                </div>
            </li>
            <li class="mv-slider__item">
                <div class="mv-slider__img mv-slider__img--02">
                    <picture>
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-02-sp.webp" media="(max-width:834px)" type="image/webp">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-02-sp.jpg" media="(max-width:834px)">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-02.webp" type="image/webp">
                        <img src="<?php echo $template_uri; ?>/img/index/mv-02.jpg" alt="患者様とのコミュニケーションを大切に治療を進めます。">
                    </picture>
                </div>
            </li>
            <li class="mv-slider__item">
                <div class="mv-slider__img mv-slider__img--03">
                    <picture>
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-03-sp.webp" media="(max-width:834px)" type="image/webp">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-03-sp.jpg" media="(max-width:834px)">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-03.webp" type="image/webp">
                        <img src="<?php echo $template_uri; ?>/img/index/mv-03.jpg" alt="患者様とのコミュニケーションを大切に治療を進めます。">
                    </picture>
                </div>
            </li>
            <li class="mv-slider__item">
                <div class="mv-slider__img mv-slider__img--04">
                    <picture>
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-04-sp.webp" media="(max-width:834px)" type="image/webp">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-04-sp.jpg" media="(max-width:834px)">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-04.webp" type="image/webp">
                        <img src="<?php echo $template_uri; ?>/img/index/mv-04.jpg" alt="患者様とのコミュニケーションを大切に治療を進めます。">
                    </picture>
                </div>
            </li>
            <li class="mv-slider__item">
                <div class="mv-slider__img mv-slider__img--05">
                    <picture>
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-05-sp.webp" media="(max-width:834px)" type="image/webp">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-05-sp.jpg" media="(max-width:834px)">
                        <source srcset="<?php echo $template_uri; ?>/img/index/mv-05.webp" type="image/webp">
                        <img src="<?php echo $template_uri; ?>/img/index/mv-05.jpg" alt="患者様とのコミュニケーションを大切に治療を進めます。">
                    </picture>
                </div>
            </li>
        </ul>
        <div class="mv-heading">
            <h1 class="mv-heading__ttl"> 患者様との<br class="sp">コミュニケーションを<br class="sp">大切に治療を進めます。 </h1>
            <p> 正確な情報をきちんと説明して、<br> 安心して受診いただくことを<br class="sp">心がけています。 </p>
        </div>
        <div class="mv-sidebar">
            <div class="mv-sidebar__item">
                <div class="mv-sidebar__note">
                    <span>天台駅 徒歩1分</span>
                </div>
                <div class="mv-sidebar__logo">
                    <img src="<?php echo $template_uri; ?>/img/common/logo-sidebar.png" alt="fujiwara">
                </div>
                <div class="mv-sidebar__ct">
                    <p> 土曜診療<br> 駐車場多数あり </p>
                </div>
            </div>
            <div class="mv-sidebar__item">
                <div class="mv-sidebar__tel">
                    <span>043-307-3480</span> 受付 00:00 - 00:00 </div>
                <div class="mv-sidebar__btn">
                    <a href="" class="c-btn__01 c-btn__01--blue"><span>Web予約はこちら</span></a>
                    <a href="" class="c-btn__01"><span>求人について</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-about">
        <div class="about-bg"></div>
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">当院について</span>
                <span class="c-ft--en">About</span>
            </h2>
            <div class="about-block">
                <div class="about-block__img js-scrollin">
                    <div class="pull-left">
                        <img src="<?php echo $template_uri; ?>/img/index/about-img.jpg" alt="Belief">
                    </div>
                </div>
                <div class="about-block__ct c-txt__basic ">
                    <h3 class="about-block__ct-ttl js-scrollin">
                        <span class="c-ft--en">Belief</span>
                        <span class="c-ft--jp"> 患者様とのコミュニケーションや<br> カウンセリング、相談を大切に </span>
                    </h3>
                    <p class="js-scrollin"> 当院は、天台駅より徒歩1分の歯科医院です。<br> 私たちが大切にしている事は、患者様とのコミュニケーションやカウンセリング、相談を大切にして治療を進めていくという点です。<br> 正確な情報をきちんと説明して、安心して受診していだきたいと思っております。 </p>
                </div>
            </div>
        </div>
    </section>
   <section class="sec-features js-sec-features">
        <div class="inner">
            <h2 class="c-ttl__02 js-scrollin">6つの特徴</h2>
            <ul class="features-list js-features-list">
                <li class="features-list__item js-scrollin">
                    <div class="features-list__box">
                        <div class="features-list__img">
                            <img src="<?php echo $template_uri; ?>/img/index/features-img-01.jpg" alt="口腔外科学会認定医が高度な歯科治療を提供します">
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
                            <img src="<?php echo $template_uri; ?>/img/index/features-img-02.jpg" alt="患者様に正確な情報をご説明医師の説明責任を守ります">
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
                            <img src="<?php echo $template_uri; ?>/img/index/features-img-03.jpg" alt="高度医療機器を用いた診察">
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
                            <img src="<?php echo $template_uri; ?>/img/index/features-img-04.jpg" alt="通院しやすい立地と100台以上の駐車場">
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
                            <img src="<?php echo $template_uri; ?>/img/index/features-img-05.jpg" alt="予防・メインテナンスを重視します">
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
                            <img src="<?php echo $template_uri; ?>/img/index/features-img-06.jpg" alt="ベビーカーで診療室まで入っていただけます">
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
            <div class="flex-center js-scrollin">
                <a href="/about" class="c-btn__02"> 当院について詳しく見る </a>
            </div>
        </div>
    </section>
    <?php
    $srv_args = array('post_type' => 'oc_cpt_service', 'posts_per_page' => 10, 'post_status' => 'publish', 'orderby' => 'DESC');
    $srv_query = new WP_Query($srv_args);
    ?>
    <section class="sec-service">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">診療内容・料金表</span>
                <span class="c-ft--en">Service</span>
            </h2>
            <div class="heading-note c-txt__basic js-scrollin"> 口腔外科学会認定医である院長を中心に、各科の専門医・認定医の連携により、歯科全般の診療に対応いたします。<br> お口のことならなんでもご相談ください。 </div>
            <?php if($srv_query->have_posts()) : ?>
            <ul class="service-list">
                <?php while($srv_query->have_posts()) : $srv_query->the_post();
                $srv_id = get_the_ID();
                $srv_icon = wp_get_original_image_url(get_field('service_icon'));
                $srv_title = get_field('service_title');
                $srv_english = get_field('service_english'); ?>
                <li class="service-list__item js-scrollin">
                    <a href="<?php echo get_the_permalink($srv_id); ?>" class="service-list__box">
                        <div class="service-list__img">
                            <img src="<?php echo $srv_icon; ?>" alt="<?php echo get_the_title($srv_id); ?>">
                        </div>
                        <div class="service-list__ct">
                            <h3 class="service-list__ct-ttl">
                                <?php if($srv_title){ ?>
                                <span class="c-ft--jp pc"><?php echo get_the_title($srv_id); ?></span>
                                <span class="c-ft--jp sp"> <?php echo $srv_title; ?> </span>
                                <?php }else{ ?>
                                <span class="c-ft--jp"><?php echo get_the_title($srv_id); ?></span>
                                <?php } ?>
                                <span class="c-ft--en"><?php echo $srv_english; ?></span>
                            </h3>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; wp_reset_postdata(); ?>
            <div class="flex-center js-scrollin">
                <a href="<?php echo get_page_link(); ?>" class="c-btn__02">詳細内容はこちら</a>
                <a href="<?php echo get_page_link(); ?>" class="c-btn__02">料金表はこちら</a>
            </div>
        </div>
    </section>
    <section class="sec-greeting">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">院長挨拶</span>
                <span class="c-ft--en">Greeting</span>
            </h2>
            <div class="greeting-block">
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
                    <img src="<?php echo $template_uri; ?>/img/index/greeting-img.jpg" alt="挨拶の見出しが入ります挨拶の見出しが入ります">
                </div>
            </div>
        </div>
    </section>
    <?php 
    $nws_args = array('post_type' => 'post', 'posts_per_page' => 4, 'post_status' => 'publish', 'orderby' => 'DESC');
    $nws_query = new WP_Query($nws_args);
    ?>
    <section class="sec-news">
        <div class="inner">
            <div class="writing-block">
                <div class="writing-block__heading js-scrollin">
                    <h2 class="c-ttl__01 js-scrollin">
                        <span class="c-ft--jp">お知らせ</span>
                        <span class="c-ft--en">News</span>
                    </h2>
                </div>
                <div class="writing-block__ct">
                    <?php if($nws_query->have_posts()) : ?>
                    <ul class="news-list">
                        <?php while($nws_query->have_posts()) : $nws_query->the_post();
                        $nws_id = get_the_ID();
                        $nws_date = get_the_date('Y.m.d');
                        $nws_cate = get_the_terms($nws_id, 'category')[0]; ?>
                        <li class="news-list__item js-scrollin">
                            <a href="<?php echo get_the_permalink($nws_id); ?>">
                                <span class="news-list__date"><?php echo $nws_date; ?></span>
                                <span class="news-list__category"><?php echo $nws_cate->name; ?></span>
                                <p> <?php echo get_the_title($nws_id); ?> </p>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; wp_reset_postdata(); ?>
                    <div class="flex-end js-scrollin">
                        <a href="" class="c-btn__02">
                            <span>お知らせを見る</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-question">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin">
                <span class="c-ft--jp">よくある質問</span>
                <span class="c-ft--en">Q&A</span>
            </h2>
            <div class="question-list">
                <div class="question-list__item js-scrollin">
                    <div class="question-list__box c-txt__basic">
                        <div class="question-list__box-icon">
                            <img src="<?php echo $template_uri; ?>/img/common/question-item-01.png" alt="よくある質問">
                        </div>
                        <p>
                            <span class="c-fc--red">妊娠中</span>でも<br> 歯の治療はしてもらえる？ </p>
                    </div>
                </div>
                <div class="question-list__item js-scrollin">
                    <div class="question-list__box c-txt__basic">
                        <div class="question-list__box-icon">
                            <img src="<?php echo $template_uri; ?>/img/common/question-item-02.png" alt="よくある質問">
                        </div>
                        <p>
                            <span class="c-fc--red">他の医院で歯を抜くしかない</span><br> と言われたのだけど… </p>
                    </div>
                </div>
                <div class="question-list__item js-scrollin">
                    <div class="question-list__box c-txt__basic">
                        <div class="question-list__box-icon">
                            <img src="<?php echo $template_uri; ?>/img/common/question-item-03.png" alt="よくある質問">
                        </div>
                        <p>
                            <span class="c-fc--red">インプラント</span>ってどんな<br> 治療方法？ </p>
                    </div>
                </div>
            </div>
            <div class="heading-note c-al--c c-txt__basic js-scrollin"> 当院の設備や診療・治療内容についてなど、患者様よりよく寄せられる質問をまとめました。<br> この他にもご不明な点がございましたら、当院までお気軽にお問い合わせください。 </div>
            <div class="flex-center js-scrollin">
                <a href="" class="c-btn__02">よくある質問を見る</a>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>