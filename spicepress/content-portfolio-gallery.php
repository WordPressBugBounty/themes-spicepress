<?php
$post_type = 'spicepress_portfolio';
$tax = 'portfolio_categories';
$term_args = array('hide_empty' => true, 'orderby' => 'id');
$posts_per_page = get_theme_mod('portfolio_numbers_options', 4);
$tax_terms = get_terms($tax, $term_args);
$defualt_tex_id = get_option('spicepress_default_term_id');
$j = 1;
if (isset($_GET['tab'])) {
    $tab = $_GET['tab'];
}
if (isset($_GET['div'])) {
    $tab = $_GET['div'];
}
$portfolio_tmp_title = get_theme_mod('portfolio_tmp_title', __('Portfolio title', 'spicepress'));
$portfolio_tmp_desc = get_theme_mod('portfolio_tmp_desc', 'Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc dolor possim mei ludus efficiendi ei sea summo mazim ex.');
?>

<section class="portfolio-section padding-0 <?php if(is_page_template('template/template-portfolio-2-col-gallery.php') || is_page_template('template/template-portfolio-3-col-gallery.php') || is_page_template('template/template-portfolio-4-col-gallery.php')) {?>portfolio-gallery-template<?php } ?>">
    <div class="container<?php echo esc_attr(spicepress_container());?>">
        <!-- Section Title -->
        <?php if (!empty($portfolio_tmp_title) || !empty($portfolio_tmp_desc)): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <?php if (!empty($portfolio_tmp_title)): ?><h1 class="widget-title wow fadeInUp animated animated" data-wow-duration="500ms" data-wow-delay="0ms"><?php echo esc_html($portfolio_tmp_title); ?></h1>
                    <div class="widget-separator"><span></span></div><?php endif; ?>
                    <?php if (!empty($portfolio_tmp_desc)): ?><p class="wow fadeInDown animated"><?php echo esc_html($portfolio_tmp_desc); ?></p><?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- /Section Title -->
        <?php
            global $paged;
            $curpage = $paged ? $paged : 1;
            $args = array (
                    'post_status' => 'publish',
                    'post_type' => $post_type,
                    'posts_per_page' => $posts_per_page,
                    'paged' => $curpage,
                    'orderby' => 'DESC',
                    );
                    $portfolio_query = null;
                    $portfolio_query = new WP_Query($args);
                    if( $portfolio_query->have_posts() ):
                    ?>
                        <div class="row">

                                <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                                    $portfolio_target = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_target', true ));
                                    if(get_post_meta( get_the_ID(),'portfolio_link', true )) {
                                        $portfolio_link = get_post_meta( get_the_ID(),'portfolio_link', true );
                                    }
                                    else
                                    {
                                        $portfolio_link = '';
                                    }
                                    $class = '';
                                    if(is_page_template('template/template-portfolio-2-col-gallery.php')) {
                                        $class = 'col-md-6 col-sm-6 col-xs-12 portfolio-gallery';
                                    }
                                    if(is_page_template('template/template-portfolio-3-col-gallery.php')) {
                                        $class = 'col-md-4 col-sm-4 col-xs-12 portfolio-gallery';
                                    }
                                    if(is_page_template('template/template-portfolio-4-col-gallery.php')) {
                                        $class = 'col-md-3 col-sm-3 col-xs-12 portfolio-gallery';
                                    }
                                    if(is_page_template('template/template-portfolio-2-col-non-filter.php')) {
                                        $class = 'col-md-6 col-sm-6 col-xs-12';
                                    }
                                    if(is_page_template('template/template-portfolio-3-col-non-filter.php')) {
                                        $class = 'col-md-4 col-sm-4 col-xs-12';
                                    }
                                    if(is_page_template('template/template-portfolio-4-col-non-filter.php')) {
                                        $class = 'col-md-3 col-sm-3 col-xs-12';
                                    }

                                    echo '<div class="'.$class.'">';
                                    ?>

                                        <article class="post">
                                            <figure class="post-thumbnail">
                                                <?php the_post_thumbnail('full',array('class'=>'img-fluid'));
                                                if(has_post_thumbnail())
                                                {
                                                    $post_thumbnail_id = get_post_thumbnail_id();
                                                    $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
                                                }
                                                ?>
                                                <div class="thumbnail-showcase-overlay">

                                                    <div class="thumbnail-showcase-icons">

                                                            <?php if(isset($post_thumbnail_url)){ ?>
                                                            <a href="<?php echo esc_url($post_thumbnail_url); ?>"  data-lightbox="image" title="<?php the_title(); ?>" class="hover_thumb"><i class="fa-regular fa-image"></i></a>
                                                            <?php } ?>
                                                            <?php if(!empty($portfolio_link)) {?>
                                                            <a href="<?php echo esc_url($portfolio_link);?>" <?php if(!empty($portfolio_target)){ echo 'target="_blank"'; } ?> class="hover_thumb"><i class="fa fa-link"></i></a>
                                                            <?php } ?>

                                                    </div>

                                                </div>

                                            </figure>
                                            <?php  if(is_page_template('template/template-portfolio-2-col-non-filter.php') || is_page_template('template/template-portfolio-3-col-non-filter.php') || is_page_template('template/template-portfolio-4-col-non-filter.php') ) { ?>
                                            <header class="entry-header">
                                                <h4 class="entry-title"><?php if(!empty($portfolio_link)) {?>
                                                    <a href="<?php echo esc_url($portfolio_link);?>" <?php if(!empty($portfolio_target)){ echo 'target="_blank"'; } ?> class="hover_thumb"><?php the_title(); ?></a>
                                                    <?php } else the_title();  ?>
                                                </h4>
                                            </header>
                                            <div class="entry-content">
                                                <?php if(get_post_meta( get_the_ID(), 'portfolio_title_description', true )){ ?>
                                                <p><?php echo get_post_meta( get_the_ID(), 'portfolio_title_description', true ); ?></p>
                                                <?php } ?>
                                            </div><!-- .portfolio-caption -->
                                            <?php } ?>
                                        </article>
                                            <!-- .portfolio-image -->
                                        <?php echo '</div>'; ?>

                                <?php endwhile; ?>
                            </div>
                            <!-- Pagination -->
                            <div class="row justify-content-center pagination-gallery">
                                <?php
                                $total = $portfolio_query->found_posts;
                                $Webriti_pagination = new Webriti_pagination();
                                $Webriti_pagination->Webriti_page($curpage, $portfolio_query, $total, $posts_per_page);
                                ?>
                            </div>
                            <!-- /Pagination -->
                        <?php

                        wp_reset_query();
                    endif;?>
        </div><!-- .container -->

</section><!-- .page-builder -->

<!-- /Portfolio Section -->

<script type="text/javascript">
    jQuery('.lightbox').hide();
    jQuery('#lightbox').hide();
    jQuery(".tab .nav-link ").click(function (e) {e.preventDefault();
        jQuery("#lightbox").remove();
        var h = decodeURI(jQuery(this).attr('href').replace(/#/, ""));
        var tjk = "<?php the_title(); ?>";
        var str1 = tjk.replace(/\s+/g, '-').toLowerCase();
        var pageurl = "<?php
                 $structure = get_option('permalink_structure');
                 if ($structure == '') {
                     echo esc_url(get_permalink()) . "&tab=";
                 } else {
                     echo esc_url(get_permalink()) . "?tab=";
                 }
                 ?>" + h;
        jQuery.ajax({url: pageurl, beforeSend: function () {
                jQuery(".tab-content").hide();
                jQuery("#myDiv").show();
            }, success: function (data) {
                jQuery(".tab-content").show();
                jQuery('.lightbox').remove();
                jQuery('#lightbox').remove();
                jQuery('#wrapper').html(data).find('#myTabContent');
            }, complete: function (data) {
                jQuery("#myDiv").hide();
            }
        });
        if (pageurl != window.location) {
            window.history.pushState({path: pageurl}, '', pageurl);
        }
        return false;
    });
</script>
<?php
get_footer();
