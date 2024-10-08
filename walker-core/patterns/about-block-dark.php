<?php

/**
 * Title: About Block Dark
 * Slug: walker-core/about-block-dark
 * Categories: walkercore-patterns
 */
$walkercore_patterns_images = array(
    WALKER_CORE_URL . 'admin/images/patterns-media/pattern_image.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","textColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-background-color has-background-alt-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"2px"}},"textColor":"light-shade","fontSize":"small"} -->
                <h5 class="wp-block-heading has-text-align-left has-light-shade-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:2px;text-transform:uppercase">Sub Header Text</h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"foreground-alt","fontSize":"xxx-large"} -->
                <h1 class="wp-block-heading has-text-align-left has-foreground-alt-color has-text-color has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:normal;font-weight:600">Section Heading Text</h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:paragraph {"align":"left"} -->
                <p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Read More</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image {"align":"wide","id":325,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url($walkercore_patterns_images[0]) ?>" alt="" class="wp-image-325" /></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->