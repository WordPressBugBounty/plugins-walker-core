<?php

/**
 * Title: Blockpage PRO: Footer Minimal
 * Slug: walker-core/blockpage-footer-minimal
 * Categories: blockpage-footer, footer
 */
$walkercore_patterns_images = array(
    WALKER_CORE_URL . 'admin/images/blockpage/icon_map.png',
    WALKER_CORE_URL . 'admin/images/blockpage/icon_call.png',
    WALKER_CORE_URL . 'admin/images/blockpage/icon_msg.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"80px","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"nutral","layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group has-nutral-background-color has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":60} /-->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"3px"}},"textColor":"heading-color","fontSize":"xx-large"} -->
                <h3 class="wp-block-heading has-heading-color-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600;letter-spacing:3px;text-transform:uppercase"><?php echo esc_html_e('Blockpage', 'walker-core') ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"42px"}}},"textColor":"foreground","fontSize":"normal"} -->
            <p class="has-text-align-center has-foreground-color has-text-color has-normal-font-size" style="margin-top:42px;line-height:1.6"><?php echo esc_html_e('The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum&nbsp;for use in a type specimen book.', 'walker-core') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40"}}},"className":"footer-info-links","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group footer-info-links" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":43,"width":"13px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($walkercore_patterns_images[0]) ?>" alt="" class="wp-image-43" style="object-fit:contain;width:13px;height:22px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"is-style-list-style-no-bullet"} -->
                    <ul class="is-style-list-style-no-bullet" style="padding-right:0;padding-left:0"><!-- wp:list-item {"fontSize":"medium"} -->
                        <li class="has-medium-font-size"><a href="#"><?php echo esc_html_e('Metrotech Center, Brooklyn, NY 11201, USA', 'walker-core') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"5px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:5px"><!-- wp:image {"id":46,"width":"18px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($walkercore_patterns_images[1]) ?>" alt="" class="wp-image-46" style="object-fit:contain;width:18px;height:22px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"is-style-list-style-no-bullet"} -->
                    <ul class="is-style-list-style-no-bullet" style="padding-right:0;padding-left:0"><!-- wp:list-item {"fontSize":"medium"} -->
                        <li class="has-medium-font-size"><a href="#"><?php echo esc_html_e('+1 (012) 345-6789', 'walker-core') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":49,"width":"17px","height":"34px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($walkercore_patterns_images[2]) ?>" alt="" class="wp-image-49" style="object-fit:contain;width:17px;height:34px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"is-style-list-style-no-bullet"} -->
                    <ul class="is-style-list-style-no-bullet" style="padding-right:0;padding-left:0"><!-- wp:list-item {"fontSize":"medium"} -->
                        <li class="has-medium-font-size"><a href="#"><?php echo esc_html_e('email@example.com', 'walker-core') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"30px","bottom":"0rem"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}},"backgroundColor":"nutral","layout":{"type":"constrained","contentSize":"1280px"}} -->
    <div class="wp-block-group has-nutral-background-color has-background" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:30px;padding-right:var(--wp--preset--spacing--50);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0"}},"border":{"top":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;padding-top:0"><!-- wp:paragraph {"align":"center","textColor":"foreground"} -->
            <p class="has-text-align-center has-foreground-color has-text-color"><?php echo esc_html_e('Proudly powered by WordPress&nbsp;|&nbsp;Theme: Blockpage by&nbsp;WalkerWP.', 'walker-core') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#c3c2c2","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|40"}}},"className":"is-style-logos-only blockpage-socials "} -->
            <ul class="wp-block-social-links has-icon-color is-style-logos-only blockpage-socials"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div id="blockpage-cursor" class="wp-block-group"></div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div id="blockpage-scrolltop" class="wp-block-group"><!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-color","gradient":"primary-gradient","style":{"border":{"radius":"50%"}},"className":"blockpage-scrolltop-button is-style-button-hover-white-bgcolor"} -->
            <div class="wp-block-button blockpage-scrolltop-button is-style-button-hover-white-bgcolor"><a class="wp-block-button__link has-heading-color-color has-primary-gradient-gradient-background has-text-color has-background wp-element-button" style="border-radius:50%" rel="#"><?php echo esc_html_e('Scroll to to Top', 'walker-core') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->