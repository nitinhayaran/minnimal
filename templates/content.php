<?php if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="article-container">
<?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('index'); ?>>
    <div class="entry-meta">
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>

    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>

  </article>
<?php endwhile; ?>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="post-nav">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>

<?php endif; ?>
