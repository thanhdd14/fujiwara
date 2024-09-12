<?php
    $template_uri = get_template_directory_uri();
    $main_menu_args = array(
        'theme_location' => 'secondary',
        'menu_id'        => 'secondary',
        'container'      => '',
        'items_wrap' => '%3$s',
    );
?>
<footer id="footer">
    <div class="inner">
        <div class="footer-block js-scrollin">
            <div class="footer-block__note">
                <a href="" class="footer-logo">
                    <img src="<?php echo $template_uri; ?>/img/common/footer-logo.png" alt="DENTAL CLINIC AOKI">
                </a>
                <p class="mbpc-69 mbsp-36 address-cusotm"> 〒263-0016　<br class="sp">千葉県千葉市稲毛区天台１丁目４−１２<br>
                    <span>千葉都市モノレール天台駅から徒歩1分</span>
                </p>
                <table class="footer-calendar">
                    <tr>
                        <th>診療時間</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                        <th>日</th>
                    </tr>
                    <tr>
                        <td><span>09:00</span><span>13:00</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span>ー</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span><span>09:00</span><span>13:00</span></span></td>
                        <td><span>ー</span></td>
                    </tr>
                    <tr>
                        <td><span>14:00</span><span>18:00</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span>ー</span></td>
                        <td><span class="dots">●</span></td>
                        <td><span><span>09:00</span><span>13:00</span></span></td>
                        <td><span>ー</span></td>
                    </tr>
                </table>
                <p>
                    <small> 木曜・日曜・祝日は休診となります。<br class="sp">学会などにより休診となる場合もございます。<br> 受付は各診療終了時間30分前までとなります。 </small>
                </p>
            </div>
            <div class="footer-block__contact">
                <div class="footer-contact">
                    <span class="footer-contact__ttl">ご予約やご質問は<br class="sp">お気軽にご連絡ください</span>
                    <p> 当院は予約制となっております。<br>
                        <span class="c-fc--red">ご来院の前にご予約をお願いいたします。</span>
                    </p>
                    <a href="tel:0433073480" class="footer-contact__tel pc">
                        <small>お電話でのご予約はこちら</small>
                        <span>043-307-3480</span>
                    </a>
                    <a href="tel:0433073480" class="c-btn__02 c-btn__02--tel sp mbsp-12">
                        <span>043-307-3480</span>
                    </a>
                    <a href="" class="c-btn__02 c-btn__02--blue">お問い合わせはこちら</a>
                </div>
            </div>
        </div>
        <div class="footer-maps js-scrollin">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.8425901929486!2d140.11066057597083!3d35.631606872603385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022848fc5f77abb%3A0xa0d2909f9b8f575e!2z44CSMjYzLTAwMTYg5Y2D6JGJ55yM5Y2D6JGJ5biC56iy5q-b5Yy65aSp5Y-w77yR5LiB55uu77yU4oiS77yR77yS!5e0!3m2!1sja!2sjp!4v1726037074195!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <ul class="footer-menu">
        <?php wp_nav_menu($main_menu_args); ?>
    </ul>
    <div class="copyright"> © ふじわら歯科 天台 </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
