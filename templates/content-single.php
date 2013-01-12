<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <footer>
      <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <div class="entry-meta-single">
        <?php get_template_part('templates/entry-meta-single'); ?>
      </div>
    </footer>
    <nav id="nav-single">
      <h3 class="assistive-text"><?php _e( 'Post navigation', 'roots' ); ?></h3>
      <div class="nav-previous"><?php previous_post_link('<span class="link">Previous</span><span class="post-title">%link</span>'); ?></div>
      <div class="nav-next"><?php next_post_link('<span class="link">Next</span><span class="post-title">%link</span>'); ?></div>
    </nav><!-- #nav-single -->
    <div class="entry-related">
      <?php wp_related_posts()?>
    </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
