<?php
    global $post;
    $template_uri = get_template_directory_uri();
    $pfx_title = get_field('page_title_prefix', 'option');
    $slug = get_post_field('post_name', get_post());
    $page_title = empty($post) ? (empty($slug) ? 'ページ' : $slug) : $post->post_title;
    $title = ( empty($pfx_title) ? (get_bloginfo('name') . '：') : $pfx_title ) .
        ( empty($page_title) ? '' : $page_title );

    $fontawesome_link = '';
    $fontawesome_url = get_field('fontawesome_url', 'options');
    $fontawesome_sum = get_field('fontawesome_sum', 'options');
    $fontawesome_crs = get_field('fontawesome_crs', 'options');
    if (! empty($fontawesome_url)) {
        $fontawesome_link = '<link rel="stylesheet" href="' . $fontawesome_url . '"';
        if (! empty($fontawesome_sum)) {
            $fontawesome_link .= ' integrity="' . $fontawesome_sum . '"';
        }
        if (! empty($fontawesome_crs)) {
            $fontawesome_link .= ' crossorigin="' . $fontawesome_crs . '"';
        }
        $fontawesome_link .= '>';
    }
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
<?php
if (! empty($fontawesome_link)) {
    echo $fontawesome_link;
}

    wp_head();
?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
    /*
    -- If you want breadcrumbs the same on every page, you can use the breadcrumb pack
    -- to add it here. Otherwise, you can make the call within Page templates, if the
    -- pages behave differently with respect to the breadcrumbs [e.g., some page that
    -- does not want the breadcrumbs displayed.
    --
    --    echo oc_breadcrumbs();
    --
    */
    $main_menu_args = array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary',
        'container'      => '',
        'items_wrap' => '%3$s',
        'walker'         => new OC_Custom_Menu_Walker()
    );
?>
    <header id="header" class="top-page">
        <a href="<?php echo home_url('/'); ?>" class="header-logo">
            <img src="<?php echo $template_uri; ?>/img/common/logo.png" alt="fujiwara">
        </a>
        <a href="tel:0433073480" class="header-tel sp-tb">
            <img src="<?php echo $template_uri; ?>/img/common/icon-tel.png" alt="tel">
        </a>
        <nav class="header-nav">
            <div class="header-nav__tel pc-tb">
                <a href="tel:0433073480">043-307-3480</a>
                <p>受付 00:00 - 00:00</p>
            </div>
            <ul class="header-nav__menu">
                <?php wp_nav_menu($main_menu_args); ?>
            </ul>
            <div class="header-nav__btn pc-tb">
                <a href="" class="c-btn__01 c-btn__01--blue">Web予約</a>
                <a href="" class="c-btn__01">求人情報</a>
            </div>
            <div class="header-contact sp-tb">
                <div class="header-contact__box">
                    <p> 当院は予約制となっております。<br>
                        <span class="c-fc--red">ご来院の前にご予約をお願いいたします。</span>
                    </p>
                    <a href="tel:0433073480" class="c-btn__02 c-btn__02--tel">
                        <span>043-307-3480</span>
                    </a>
                    <a href="" class="c-btn__02 c-btn__02--blue">お問い合わせはこちら</a>
                </div>
            </div>
        </nav>
        <span class="js-mobile">
            <span></span>
        </span>
    </header>
