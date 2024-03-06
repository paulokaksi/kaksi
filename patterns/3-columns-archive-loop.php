<?php

/**
 * Title: Loop dos arquivos com 3 colunas
 * Slug: kaksi/3-columns-archive-loop
 * Categories: text, about
 * Viewport width: 1400
 */
?>

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
	<!-- wp:group -->
	<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"isLink":true} /-->

			<!-- wp:post-excerpt {"excerptLength":30} /-->

			<!-- wp:group {"style":{"typography":{"fontSize":"14px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex"}} -->
			<div class="wp-block-group" style="font-size:14px"><!-- wp:post-author {"showAvatar":false,"showBio":false,"isLink":true} /-->

				<!-- wp:post-date {"isLink":true} /-->

				<!-- wp:post-terms {"term":"category"} /-->

				<!-- wp:post-terms {"term":"post_tag"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:query -->