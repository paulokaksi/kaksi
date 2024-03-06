<?php

/**
 * Title: Loop com artigos do blog com 3 colunas
 * Slug: kaksi/3-columns-blog-loop
 * Categories: text, about
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#abb7c226"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#abb7c226;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">Blog</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"4rem"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

		<!-- wp:post-title {"textAlign":"left","level":3} /-->

		<!-- wp:post-excerpt {"textAlign":"left","moreText":"Ler mais"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"Adicione texto ou blocos que são mostrados quando uma consulta não devolve resultados."} -->
		<p></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->