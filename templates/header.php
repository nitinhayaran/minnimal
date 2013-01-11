<header id="banner" role="banner">
  <div class="container">
    <!-- <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a> -->
    <div class="social-header">
      <ul class="social-links">
        <li><a class="twitter" href="http://www.twitter.com/nitinhayaran"><i class="twitter"></i></a></li>
        <li><a class="facebook" href="http://www.facebook.com/nitin.hayaran"><i class="facebook"></i></a></li>
        <li><a class="github" href="https://github.com/nitinhayaran"><i class="github"></i></a></li>
        <li><a class="email" href="#" onclick="this.href='mailto:' + 'nitinhayaran' + '@' + 'gmail.com'"><i class="email"></i></a></li>
      </ul>
      <div class="social-content">
           <span class="hide twitter at-sign">@</span><!--
        --><span class="hide facebook facebook-com">facebook.com/</span><!--
        --><span class="hide github github-com">github.com/</span><!--
        --><span class="hide twitter email github facebook fname">nitin</span><!--
        --><span class="hide facebook dot">.</span><!--
        --><span class="hide twitter email github facebook lname">hayaran</span><!--
        --><span class="hide email at-email">@gmail.com</span>
      </div>
      <script>
        $(document).ready(function(){
          $('.social-links a').on('mouseenter',
            function(){
              var className = $(this).attr('class');
              $('.social-content span').each(function(){
                if( $(this).hasClass(className) ){
                  $(this).removeClass('hide');
                }else{
                  $(this).addClass('hide');
                }
              });
            }
          );
          $('.social-header').on('mouseleave', function(){
            $('.social-content span').each(function(){
              $(this).addClass('hide');
            });
          });
        });
      </script>
    </div>
    <div class="intro">
      <a href="<?php echo home_url(); ?>/"><img  src="https://api.twitter.com/1/users/profile_image?screen_name=nitinhayaran&size=bigger" alt=""></a>
      I am <a href="<?php echo home_url(); ?>/about/"><span class="focus pink">Nitin Hayaran</span></a>, a web and application designer/developer and founder of <a targer="_blank" href="http://www.23spaces.com"><span class="focus green">23Spaces</span></a>
    </div>
  </div>
</header>
