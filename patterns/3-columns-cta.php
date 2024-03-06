<?php

/**
 * Title: Chamada para ação com 3 colunas
 * Slug: kaksi/3-columns-cta
 * Categories: text, about
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#abb7c226"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#abb7c226;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">Título</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"},"padding":{"right":"0","left":"0"},"blockGap":{"left":"4rem"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.svg" alt="" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"left","level":3} -->
			<h3 class="wp-block-heading has-text-align-left">Título</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Texto de uma ou duas frases com um total de 130 caracteres, que detalhem o conceito da proposta de valor acima apresentada.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Chamada para ação</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.svg" alt="" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"left","level":3} -->
			<h3 class="wp-block-heading has-text-align-left">Título</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Texto de uma ou duas frases com um total de 130 caracteres, que detalhem o conceito da proposta de valor acima apresentada.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Chamada para ação</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.svg" alt="" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"left","level":3} -->
			<h3 class="wp-block-heading has-text-align-left">Título</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Texto de uma ou duas frases com um total de 130 caracteres, que detalhem o conceito da proposta de valor acima apresentada.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Chamada para ação</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->