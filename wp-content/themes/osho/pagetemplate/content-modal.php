<div class="modal fade form-popup" id="event_registration_form" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body form-content p-4">
                <div class="section-intro text-start mb-4">
                    <h2><?php the_field('registration_form_title', 'option'); ?><span class="modal_event_title"></span></h2>
                    <?php the_field('registration_form_subtitle', 'option'); ?>
                </div>
                <?php
                $form_html = do_shortcode('[contact-form-7 id="437" title="Registration Form"]');
                // Add the post title as a hidden field
                $form_html = str_replace('</form>', '<input type="hidden" class="event_title" name="event_title" value="" /></form>', $form_html);
                echo $form_html;
                ?>
            </div>
        </div>
    </div>
</div>