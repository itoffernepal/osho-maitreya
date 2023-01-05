<?php get_header('2'); ?>
<div class="not-found">
    <div class="container">
        <section class="error-404 not-found text-center">
            <div class="container">
                <h2 style="font-size:85px">4<span style="color:#E84D2E; margin: 0px 10px;"><i
                            class="far fa-smile"></i></span>4</h2>
                <div class="page-content">
                    <p><?php the_field('content','option');?>
                    <?php 
                $button = get_field('link','option');
                if( $button ): 
                    $button_url = $button['url'];
                    $button_title = $button['title'];
                    ?>
                        <a
                            href="<?php echo esc_url($button_url);?>"><?php echo esc_html($button_title);?></a>
                        <?php endif;?>
                        </p>

                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>