<time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><i class="icon-time"></i> <?php echo sprintf(__('%s', 'roots'), get_the_date()); ?></time>
<?php the_tags('<div class="entry-tags"><i class="icon-tags"></i> ',', ','</div>'); ?>
<div class="entry-categories"><i class="icon-bookmark"></i> <?php echo get_the_category_list(', '); ?></div>
