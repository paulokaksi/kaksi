<?php

/**
 * Title: Header Hero
 * Slug: kaksi/header-hero
 * Categories: banner, header, featured
 * Viewport width: 1400
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-wide-right-focus.svg","dimRatio":0,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-wide-right-focus.svg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:pattern {"slug":"kaksi/header-menu"} /-->
        <!-- wp:columns {"verticalAlignment":"center","className":"flex-grow"} -->
        <div class="wp-block-columns are-vertically-aligned-center flex-grow"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary","fontSize":"gigantic"} -->
                <h1 class="wp-block-heading has-custom-primary-color has-text-color has-link-color has-gigantic-font-size">Título com proposta de valor</h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Aqui deve escrever uma ou duas frases com um total de 130 caracteres, que detalhem o texto da proposta de valor acima apresentada.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Chamada para ação</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:cover -->