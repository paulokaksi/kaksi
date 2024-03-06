<?php

/**
 * Title: Texto e multimédia à direita
 * Slug: kaksi/multimedia-text-right
 * Categories: text, about
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:media-text {"mediaLink":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.svg","mediaType":"image"} -->
	<div class="wp-block-media-text is-stacked-on-mobile">
		<figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.svg" alt="" /></figure>
		<div class="wp-block-media-text__content"><!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size">Título com proposta de valor</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">Subtítulo com descrição da proposta de valor</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Texto de uma ou duas frases com um total de 130 caracteres, que detalhem o conceito da proposta de valor acima apresentada.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Chamada para ação</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->