<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Flat_Thirteen
 * @since WP FlatThirteen 1.3
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>	
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<header class="entry-header">	
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		</header><!-- .entry-header -->
		<?php endif; ?>
	
	<div class="entry-meta">
	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
	<?php echo get_avatar( get_the_author_meta('ID') ); ?>
</a>
<span><?php the_author_posts_link(); ?></span>
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'flatthirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'flatthirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flatthirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'flatthirteen' ) . '</span>', __( 'One comment so far', 'flatthirteen' ), __( 'View all % comments', 'flatthirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		
	</footer><!-- .entry-meta -->
</article><!-- #post -->
