<?php
                            $images = get_field('add_images');
                            if ($images) : ?>

                                <div class="gallery-card wow fadeIn">
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