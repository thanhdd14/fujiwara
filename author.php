<?php
    $author_id = get_queried_object_id();
    $user_key = 'user_' . $author_id;
    $template_uri = get_template_directory_uri();
    $img_url = $template_uri."/img/newes-unitec-logo.jpg";
    
   
    $twitter                = get_field('twitter' , $user_key);
    $instagram              = get_field('instagram' , $user_key);
    $facebook               = get_field('facebook' , $user_key);
    $youtube                = get_field('youtube' , $user_key);
    $chronology_title       = get_field('title' , $user_key);


    $author_name            = get_the_author_meta('display_name');
    $user_public_title      = get_field('oc_user_public_title', $user_key);
    $user_portrait_img      = get_field('oc_user_portrait', $user_key);
    $user_clinic_title      = get_field('oc_user_clinic_title', $user_key);
    $user_cover_img         = get_field('oc_user_cover_img', $user_key);
    $user_introduction      = get_field('oc_user_introduction', $user_key);
    $user_clinic_title      = get_field('oc_user_clinic_title', $user_key);
    $user_family_name_en    = get_field('oc_user_family_name_en', $user_key);
    $user_given_name_en     = get_field('oc_user_given_name_en', $user_key);
    $en_author_name         = $user_family_name_en . " " . $user_given_name_en;
    $user_career            = get_field('oc_user_career', $user_key);
    $user_qualification     = get_field('oc_user_qualification', $user_key);
    $user_scholarly_paper   = get_field('oc_user_scholarly_paper', $user_key);
    $user_conference        = get_field('oc_user_conference', $user_key);
    $user_hobby             = get_field('oc_user_hobby', $user_key);

if (! $user_cover_img) {
    $user_cover_img['url'] = $template_uri . '/img/chiba-default-image.jpg';
}

    get_header();
?>
<section class="author-section-top">
    <div class="container">
        <div class="row author-top">
            <div class="col-md-6 col-12">
                <img src="<?php echo $user_portrait_img['url']; ?>" alt="">
            </div>
            <div class="col-md-6 col-12">
                <p class="author-name"><?php echo $author_name; ?></p>
                <p class="en-author-name"><?php echo $en_author_name; ?></p>
                <p><?php echo $user_introduction; ?></p>
                <div class="sns-link">
                <?php if (!empty($twitter)) { ?>
                    <a href="<?php echo $twitter; ?>" target="_blank">
                        <img src="<?php echo $template_uri ?>/img/twitter.jpg" alt="">
                    </a>
                <?php } ?>
                <?php if (!empty($facebook)) { ?>
                    <a href="<?php echo $facebook; ?>" target="_blank">
                        <img class="facebook" src="<?php echo $template_uri ?>/img/facebook.jpg" alt="">
                    </a>
                <?php } ?>
                <?php if (!empty($instagram)) { ?>
                    <a href="<?php echo $instagram; ?> " target="_blank">
                        <img src="<?php echo $template_uri ?>/img/insta.jpg" alt="">
                    </a>
                <?php } ?>
                <?php if (!empty($youtube)) { ?>
                    <a href="<?php echo $youtube; ?> " target="_blank">
                        <img src="<?php echo $template_uri ?>/img/youtube.jpg" alt="">
                    </a>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-bottom">
<?php if($user_career): ?>
    <div class="container">
        <div class="career-box">
            <div class="title">経歴</div>
            <div class="chronology">
                <div>
                    <?php echo $user_career; ?>
                </div>
            </div>
            </div>
        </div> 
    </div>
<?php endif; ?>
    
<?php if($user_qualification):   ?>
    <div class="container">
        <div class="career-box">
            <div class="title">所属・資格</div>
            <div class="chronology">
                <?php
                   echo  $user_qualification ;
                ?> 
            </div>
            </div>
        </div> 
    </div>
<?php endif; ?>

<?php if($user_conference): ?>
    <div class="container">
        <div class="career-box">
            <div class="title">特集・紹介</div>
                <div class="chronology">
                    <?php echo $user_conference ?>
                </div>
            </div>
        </div> 
    </div>
<?php endif; ?>

<?php
   $default_image = get_field('archive_image', 'option');
   $default_img_url  = $default_image["url"];

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'author'         => $user_key,
    );
    $articles = new WP_Query($args);
    if ($articles->have_posts()) :
?>
    <div class="container">
        <div class="career-box">
            <div class="title">関連記事</div>
            <div class="chronology">
                <ul class="author-post-ul">
    <?php
        while ($articles->have_posts()) :
            $articles->the_post();
            $article_id = $post->ID;
            $img_url = get_the_post_thumbnail_url($article_id, 'large' );
            if (! $img_url) {
                $img_url = $default_img_url;
            }
            $article_date = get_the_date('Y.m.d', $article_id);
            $article_title = get_the_title($article_id);
            $categories = get_the_category();
    ?>
                <li class="author-post">
                    <a class="author-article article-link d-flex  flex-row justify-content-start align-items-start align-items-sm-center mb-3" href="<?php echo get_permalink($article_id); ?>">
                        <div class="d-flex author-post">
                            <div class="author-post-left">
                                <img src="<?php echo $img_url; ?>" alt="">
                            </div>
                            <div class="author-post-right">
                                <div class="cat-box">
                                <?php if($categories) {
                                    foreach($categories as $cat) { ?>
                                    <div><span>
                                <?php echo $cat->cat_name ; ?>
                                    </span></div>
                                <?php 
                                            }
                                        }
                                ?>
                                </div>
                                <p class="author-post-title "><?php echo $article_title; ?></p>
                                <span class="author-post-date"><?php echo $article_date; ?></span>
                            </div>
                            <!-- article-date  -->
                        </div>
                    </a>
                </li>
    <?php
        endwhile;
    ?>
    <?php
    endif;
    wp_reset_postdata();
    ?>
        
        
                </ul>
            </div>
        </div> 
    </div>
</section>
<?php
get_footer();
?>