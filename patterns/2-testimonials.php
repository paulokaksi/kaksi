<?php

/**
 * Title: Testemunhos com 2 colunas
 * Slug: kaksi/2-testimonials
 * Categories: text, about
 * Viewport width: 1400
 */
?>


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#abb7c226"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#abb7c226;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">Testemunhos</h2>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"backgroundColor":"custom-background"} -->
		<div class="wp-block-column has-custom-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:image {"width":"145px","height":"auto","sizeSlug":"large","linkDestination":"none","align":"center","className":"size-full"} -->
			<figure class="wp-block-image aligncenter size-large is-resized size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/john_doe.svg" alt="" style="width:145px;height:auto" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center">Nome e apelido</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Cargo</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Texto com citação de uma ou duas frases com um total de 130 caracteres.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"backgroundColor":"custom-background"} -->
		<div class="wp-block-column has-custom-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:image {"width":"145px","height":"auto","sizeSlug":"large","linkDestination":"none","align":"center","className":"size-full"} -->
			<figure class="wp-block-image aligncenter size-large is-resized size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/john_doe.svg" alt="" style="width:145px;height:auto" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center">Nome e apelido</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Cargo</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Texto com citação de uma ou duas frases com um total de 130 caracteres.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->