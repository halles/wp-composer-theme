<?php get_header(); ?>

	<section id="content" class="index">

	<?php if (have_posts()) : ?>

		<ol id="post-list">

		<?php while (have_posts()) : the_post(); ?>

			<li class="post-item">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<footer class="post-info">
					<abbr class="published" title=""><?php the_time('j/m/Y'); ?> @ <?php the_time('g:i a'); ?></abbr>
					<address class="vcard author">
						Por <a class="url fn" href="<?php the_author_meta('user_url'); ?>"><?php the_author(); ?></a>
					</address>
					<div class="post-category">
						Publicado en<br/> <?php the_category(', '); ?>
					</div>
					<div class="post-tag">
						<?php the_tags('Tags<br/>', ', ', ''); ?>
					</div>

					<div class="post-comments">
						<?php comments_popup_link('Sin Comentarios ›', '1 Comentario ›', '% Comentarios ›'); ?>
					</div>

					<div class="post-meta">
						<?php if ( $user_ID ) : ?><span><?php edit_post_link(); ?></span><?php endif; ?>
					</div>
				</footer>

				<header>
					<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
				</header>

				<div class="post-content">
					<?php the_content('Continuar leyendo este artículo ››'); ?>
				</div>
			</article>
			</li>

			<?php comments_template(); ?>

		<?php $featured = false; endwhile; ?>

		</ol>

		<?php if(function_exists('wp_paginate')) wp_paginate(); ?>

	<?php else : ?>

		<h2 class="center">Sorry, busqué y busqué pero no, eso que buscas aquí no está.</h2>

	<?php endif; ?>

	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div id="pag-below" class="pagination">
			<div class="pag-previous">
				<?php next_posts_link( __( '‹‹ Artículos Anteriores' ) ); ?>
			</div>
			<div class="pag-next">
				<?php previous_posts_link( __( 'Artículos Nuevos ››' ) ); ?>
			</div>
		</div>
	<?php endif; ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
