<footer id="content-info" class="container" role="contentinfo">
  <?php dynamic_sidebar('sidebar-footer'); ?>
  <div>

    <ul class="social-links">
      <li><a class="twitter" href="http://www.twitter.com/nitinhayaran"><i class="twitter"></i></a></li>
      <li><a class="facebook" href="http://www.facebook.com/nitin.hayaran"><i class="facebook"></i></a></li>
      <li><a class="github" href="https://github.com/nitinhayaran"><i class="github"></i></a></li>
      <li><a class="email" href="#" onclick="this.href='mailto:' + 'nitinhayaran' + '@' + 'gmail.com'"><i class="email"></i></a></li>
    </ul>

  	<ul class="footer-links">
  		<li><a href="<?php echo home_url(); ?>/about/">About</a></li>
  		<li><a href="<?php echo home_url(); ?>/archives/">Archives</a></li>
  		<li><a href="<?php echo home_url(); ?>/feed/">RSS Feed</a></li>
  	</ul>
  	&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>

  </div>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<script>
	$(document).ready(function() {
	  $('pre[lang]').each(function(i, e) {
	  	// $(e).wrapInner('<code />');
	  	var s = $(e).html();
	  	// s = s.replace(/[&]/g,'&amp;');
	  	s = s.replace(/[<]/g,'&lt;');
	  	s = s.replace(/[>]/g,'&gt;');
	  	$(e).html('<code>'+s+'</code>');
	  	hljs.tabReplace = '    '; // 4 spaces
	  	hljs.highlightBlock(e)
	  });
	  //$('pre.js').each(function(i, e) {hljs.highlightBlock(e)});
	});
</script>
<!--[if lte IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js" type="text/javascript"></script>
<![endif]-->
<?php wp_footer(); ?>
