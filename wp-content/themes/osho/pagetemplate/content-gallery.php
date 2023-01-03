<div class="row">
                <?php $gallery = array(
                    'post_type'         => 'galleries',
                    'posts_per_page'    => 3,
                    'orderby'           => 'date',
                    'order'             => 'DES',
                );
                $gallery_query = new WP_Query($gallery);
                if ($gallery_query->have_posts()) :
                    while ($gallery_query->have_posts()) : $gallery_query->the_post();
                ?>
                        <div class="col-lg-4">

                            <?php
                            $images = get_field('add_images');
                            if ($images) : ?>

                                <div class="gallery-card">
                                    <?php $gallery_rows = get_field('add_images'); ?>
                                    <span class="total-images"><?php echo $total_images = count($gallery_rows); ?> Photos</span>

                                    <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="image-preview" caption="caption">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                                    </a>
                                    <?php foreach ($images as $image) : ?>
                                        <div class="more-images" style="display:none">
                                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="image-preview" caption="caption">

                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>