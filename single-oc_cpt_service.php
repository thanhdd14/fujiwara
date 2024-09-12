<?php
$template_uri = get_template_directory_uri();
$img_id   = get_post_thumbnail_id();
$img_url  = wp_get_attachment_url($img_id);

$author_id = $post->post_author;

$author_intro = '';
$author_clinic_title = '';
$author_public_title = '';
$author_img_url = '';
if ( ! empty($author_id) ) {
    $author_key = 'user_' . $author_id;
    $author_intro = get_field('oc_user_short_introduction', $author_key);
    $author_clinic_title = get_field('oc_user_clinic_title', $author_key);
    $author_public_title = get_field('oc_user_public_title', $author_key);
    $author_image = get_field('oc_user_avatar', $author_key);
    if (is_array($author_image)) {
        $author_img_url = $author_image['url'];
    }
}
$author_url = get_author_posts_url($author_id);
// Get user object
$author_obj = get_user_by( 'ID',  $author_id);
// Get user display name
$author_display_name = $author_obj->display_name;

get_header();

$srv_title = get_field('service_title');
$srv_english = get_field('service_english');

$sec1_title = get_field('service_sec1_title');
$sec1_image = wp_get_original_image_url(get_field('service_sec1_image'));
$sec1_desc = get_field('service_sec1_desc');

$sec2_title = get_field('service_sec2_title');
$sec2_image = wp_get_original_image_url(get_field('service_sec2_image'));
$sec2_option = get_field('service_sec2_option');

$sec3_title = get_field('service_sec3_title');
$sec3_image = wp_get_original_image_url(get_field('service_sec3_image'));
$sec3_option = get_field('service_sec3_option');

$sec4_title = get_field('service_sec4_title');
$sec4_option = get_field('service_sec4_option');

$sec5_title = get_field('service_sec5_title');
$sec5_image = wp_get_original_image_url(get_field('service_sec5_image'));
$sec5_option = get_field('service_sec5_option');

$no_sidebar = false;
if (have_posts()) :
    while (have_posts()) :
        the_post();
        $cat_name = '';
        $cats = get_the_category($post->ID);
        if (count($cats) > 0 && $cats[0]->name != 'Uncategorized') {
            $cat_name = $cats[0]->name;
            $cat_link = get_category_link($cats[0]);
        }
        if (get_field('no_sidebar', $post->ID)) {
            $no_sidebar = true;
        }
?>
<main class="page-periodontal">
    <section class="sec-heading">
        <div class="inner">
            <h1 class="c-ttl__01 c-al--c">
                <span class="c-ft--jp"><?php the_title(); ?></span>
                <span class="c-ft--en"><?php echo $srv_english; ?></span>
            </h1>
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </section>
    <section class="sec-periodontal">
        <div class="inner">
            <div class="periodontal-detail">
                <div class="periodontal-detail__item">
                    <h2 class="c-ttl__03"><?php echo $sec1_title; ?></h2>
                    <img src="<?php echo $sec1_image; ?>" alt="<?php echo $sec1_title; ?>">
                    <?php if($sec1_desc){
                        echo $sec1_desc;
                    } ?>
                </div>
                <div class="periodontal-detail__item">
                    <h2 class="c-ttl__03"><?php echo $sec2_title; ?></h2>
                    <img src="<?php echo $sec2_image; ?>" alt="<?php echo $sec2_title; ?>">
                    <?php if($sec2_option){ ?>
                    <div class="periodontal-detail--ol">
                        <?php foreach($sec2_option as $key => $result){ ?>
                        <h3 class="c-ttl__04"><?php echo $result['gx_name']; ?></h3>
                        <?php echo $result['gx_desc']; ?>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="periodontal-detail__item periodontal-detail__item--other">
                    <h2 class="c-ttl__03"><?php echo $sec3_title; ?></h2>
                    <img src="<?php echo $sec3_image; ?>" alt="<?php echo $sec3_title; ?>">
                    <?php if($sec3_option){
                    foreach($sec3_option as $key => $result){ ?>
                    <h3 class="c-ttl__04"><?php echo $result['gx_name']; ?></h3>
                    <?php echo $result['gx_desc']; ?>
                    <?php }
                    } ?>
                </div>
                <div class="periodontal-detail__item">
                    <h2 class="c-ttl__03"><?php echo $sec4_title; ?></h2>
                    <?php if($sec4_option){
                    foreach($sec4_option as $key => $result){
                    $sec4_img = wp_get_original_image_url($result['gx_image']); ?>
                    <h3 class="c-ttl__04"><?php echo $result['gx_name']; ?></h3>
                    <?php if($result['gx_image']){ ?>
                    <img src="<?php echo $sec4_img; ?>" alt="<?php echo $result['gx_name']; ?>">
                    <?php } ?>
                    <?php echo $result['gx_desc']; ?>
                    <?php }
                    } ?>
                </div>
                <div class="periodontal-detail__item">
                    <h2 class="c-ttl__03"><?php echo $sec5_title; ?></h2>
                    <img src="<?php echo $sec5_image; ?>" alt="<?php echo $sec5_title; ?>">
                    <?php if($sec5_option){ ?>
                    <div class="periodontal-detail--count">
                        <?php foreach($sec4_option as $key => $result){ ?>
                        <div class="periodontal-detail--count__item">
                            <h3 class="c-ttl__04"><?php echo $result['gx_name']; ?></h3>
                            <?php echo $result['gx_desc']; ?>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    endwhile;
endif;
get_footer();
?>