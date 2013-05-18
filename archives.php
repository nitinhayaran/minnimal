<?php
/*
Template Name: Archives
*/
?>
<div id="container">
	<div id="content" role="main">
		<div class="archives">
		<?php
		  $months = $wpdb->get_results("SELECT DISTINCT MONTH(post_date) AS month , YEAR(post_date) AS year FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month, year ORDER BY post_date DESC");
		  $posts = $wpdb->get_results("SELECT id, post_title, MONTH(post_date) AS month , YEAR(post_date) AS year FROM $wpdb->posts WHERE post_status = 'publish' and post_type = 'post' ORDER BY post_date DESC");
		  foreach($months as $this_month){ ?>
		  <div class="month">
		    <h2><?php echo date("F", mktime(0, 0, 0, $this_month->month, 1, $this_month->year)); ?> <?php echo $this_month->year; ?></h2>
		    <?php for ($i = 0; $i <= count($posts); $i++){?>
		      <?php if(($this_month->year == $posts[$i]->year)&&($this_month->month == $posts[$i]->month)){?>
		      <p><a href="<?php echo get_permalink($posts[$i]->id); ?>"><?php echo $posts[$i]->post_title; ?></a></p>
		      <?php } ?>
		    <?php } ?>
		  </div><!-- month -->
		  <?php } ?>
		</div><!-- archives -->
	</div><!-- #content -->
</div><!-- #container -->
