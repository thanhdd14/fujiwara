<?php
    /* Template Name: Price */
    $template_uri = get_template_directory_uri();

    get_header();

    $prc_option = get_field('price_option');
?>
<main class="page-price">
    <section class="sec-heading">
        <div class="inner">
            <h1 class="c-ttl__01 c-al--c">
                <span class="c-ft--jp">料金表</span>
                <span class="c-ft--en">Price</span>
            </h1>
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                <li><span>料金表</span></li>
            </ul>
        </div>
    </section>
    <section class="sec-price">
        <div class="inner">
            <?php if($prc_option){ ?>
            <div class="price-list">
                <?php foreach($prc_option as $key => $value){ ?>
                <div class="price-list__item js-scrollin">
                    <span class="price-list__ttl"><?php echo $value['gx_name']; ?></span>
                    <div class="price-list__ct c-txt__basic">
                        <?php if($value['gx_desc']){
                            echo $value['gx_desc'];
                        } ?>
                        <?php if($value['gx_option']){ ?>
                        <table>
                            <?php foreach($value['gx_option'] as $kr => $result){ ?>
                            <tr>
                                <td><?php echo $result['name']; ?></td>
                                <td>
                                    <?php if($result['price'] === '保険適応'){ ?>
                                    <span class="c-fc--blue"><?php echo $result['price']; ?></span>
                                    <?php }else{ ?>
                                    <span>
                                        <?php echo $result['price']; ?>
                                        <?php if($result['tax']){ ?>
                                        <small><?php echo $result['tax']; ?></small>
                                        <?php } ?>
                                    </span>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <?php } ?>
                    </div>
                </div>
                <div class="price-list__item js-scrollin">
                    <span class="price-list__ttl">診療名</span>
                    <div class="price-list__ct c-txt__basic">
                        <table>
                            <tr>
                                <td><?php echo $value['gx_content']; ?></td>
                                <td>
                                    <?php if($value['gx_insure']){
                                    $j = 1;
                                    foreach($value['gx_insure'] as $kr => $result){ ?>
                                    <span <?php echo ($j == 1) ? 'class="c-fc--blue"' : ''; ?>><?php echo $result['price'] ?></span>
                                    <?php $j++; }
                                    } ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="sec-difference">
        <div class="inner">
            <h2 class="c-ttl__01 mbpc-64 js-scrollin">
                <span class="c-ft--jp">保険診療と自費診療の違いについて</span>
                <span class="c-ft--en">Difference</span>
            </h2>
            <div class="difference-block">
                <div class="difference-block__img js-scrollin">
                    <img src="./img/price/img-01.jpg" alt="保険診療と自費診療の違いについて">
                </div>
                <div class="difference-block__ct c-txt__basic js-scrollin">
                    <p> よく保険治療と自費治療の違いは「治療する部位や被せたりする材料の違いだけ」という誤った認識が蔓延しています。 </p>
                    <p> もちろん、材料や使用する機器などが違うというのは事実ですが、一番大きな違いは「時間」の要素が大きなウェイトを占めております。 </p>
                    <p> 歯科医師は、虫歯の取り残しがないように「丁寧」に、歯を削り過ぎないように「慎重」に、虫歯が再発しないように「確実」に、治療をします。 </p>
                    <p> 歯科技工士は精度良くそして審美的な歯を作成するため必要な工程を漏れなく丁寧に行います。 </p>
                    <p> それらの結果、皆様の歯が長持ちする事に繋がっていきます。 </p>
                    <p> 保険診療、自費診療どちらが良いという事はございません。患者様の経済状況や価値観によって変化する物だと思います。私達はその選択の手助けとなるように正しい情報を提供致します。 </p>
                    <p> 少しでも疑問に思う事がございましたらお気軽にご相談ください。 </p>
                    <div class="difference-block__ct-note">
                        <p> 歯科矯正、入れ歯、インプラントなど保険適用外の診療については、医療費控除の対象となります。 </p>
                        <p> 高額自費診療となるものについては、デンタルローンがご利用いただけます。 </p>
                    </div>
                    <p> ご不明な点は、お気軽に受付までご相談ください。 </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-payment">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin mbpc-44">
                <span class="c-ft--jp">お支払い方法</span>
                <span class="c-ft--en">Payment</span>
            </h2>
            <div class="heading-note c-txt__basic js-scrollin"> 当院では、現金でのお支払いのほかに、クレジットカードでお支払いいただけます。 </div>
            <div class="payment-list">
                <div class="payment-list__item js-scrollin">
                    <div class="payment-list__box c-txt__basic">
                        <div class="payment-list__box-icon">
                            <img src="./img/common/question-item-04.png" alt="現金">
                        </div>
                        <h3 class="payment-list__box-ttl">現金</h3>
                        <p> 当院受付での現金でのお支払い </p>
                    </div>
                </div>
                <div class="payment-list__item js-scrollin">
                    <div class="payment-list__box c-txt__basic">
                        <div class="payment-list__box-icon">
                            <img src="./img/common/question-item-05.png" alt="クレジットカード">
                        </div>
                        <h3 class="payment-list__box-ttl">クレジットカード</h3>
                        <p> クレジットカードでもお支払い可能です </p>
                        <img src="./img/common/card.png" alt="card" width="167">
                    </div>
                </div>
            </div>
            <div class="payment-note js-scrollin">
                <p> 矯正治療やインプラントなどの<br class="sp">自由診療では健康保険は使えませんが、<br>
                    <span class="c-fc--red">高額治療費は医療費控除の対象</span><br class="sp">となります。 </p>
            </div>
            <div class="payment-box js-scrollin">
                <span class="payment-box__ttl">医療費控除について</span>
                <p> ご自身または生計を共にするご家族の医療費が1年間で合計10万円以上かかった場合、確定申告を行うことで一定金額の所得控除を受けることができ、それにより税金が減税（還付）される制度です。<br> 歯科医院での治療費は一部を除き、医療費控除の対象です。保険診療はもちろん、自費治療、矯正治療も対象となります。<br> 詳しくは国税庁のホームページ「<a href="">医療費を支払った時（医療費控除）</a>」をご参照ください。 </p>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>