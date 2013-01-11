<time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo sprintf(__('%s', 'roots'), get_the_date()); ?></time>
<!-- <p class="byline author vcard"><?php echo __('Written by', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p> -->
<div>
  <?php the_tags('<div class="entry-tags">',', ','</div>'); ?>
</div>
