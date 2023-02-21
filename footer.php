<?php
	global $globalkorenamake;
?>
 
<nav id="footer">
        <div class="container">
            <div class="pull-right fnav">
                <ul class="footer-social">
				
<?php if($globalkorenamake['social-media-icons']['facebook']): ?>
                    <li><a target="_blank" href="<?php echo $globalkorenamake['social-media-icons']['facebook']; ?>"><i class="fa fa-facebook" title="Facebook"></i></a></li>
<?php endif; ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['youtube']; ?>" target="_blank"><i class="fa fa-youtube" title="Youtube"></i></a></li>
<?php if($globalkorenamake['social-media-icons']['google-plus']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['google-plus']; ?>"><i class="fa fa-google-plus" title="GooglePlus"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['twitter']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['twitter']; ?>" target="_blank"><i class="fa fa-twitter" title="Twitter"></i></a></li>
<?php endif; ?>				
<?php if($globalkorenamake['social-media-icons']['linkedin']): ?>  
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin" title="Linkedin"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['instagram']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['instagram']; ?>" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['github']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['github']; ?>" target="_blank"><i class="fa fa-github" title="GitHub"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['flickr']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['flickr']; ?>" target="_blank"><i class="fa fa-flickr" title="Flickr"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['pinterest']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest" title="Pinterest"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['reddit']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['reddit']; ?>" target="_blank"><i class="fa fa-reddit" title="reddit"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['marker']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['marker']; ?>"arget="_blank"><i class="fa fa-map-marker" title="FTCI, Sadar hospital road, Feni"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['tumblr']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['tumblr']; ?>" target="_blank"><i class="fa fa-tumblr" title="Tumblr"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['skype']): ?>
                    <li><a href="<?php echo $globalkorenamake['social-media-icons']['skype']; ?>" target="_blank"><i class="fa fa-skype" title="Skype"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['yahoo']): ?>
                     <li><a href="<?php echo $globalkorenamake['social-media-icons']['yahoo']; ?>" target="_blank"><i class="fa fa-yahoo" title="Yahoo"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['rss']): ?>
                     <li><a href="<?php echo $globalkorenamake['social-media-icons']['rss']; ?>" target="_blank"><i class="fa fa-rss" title="Rss"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['android']): ?>
                     <li><a href="<?php echo $globalkorenamake['social-media-icons']['android']; ?>" target="_blank"><i class="fa fa-android" title="Android"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['share']): ?>
                     <li><a href="<?php echo $globalkorenamake['social-media-icons']['share']; ?>" target="_blank"><i class="fa fa-share" title="Share"></i></a></li>
<?php endif; ?>
<?php if($globalkorenamake['social-media-icons']['number']): ?>
                    <li><a title="<?php echo $globalkorenamake['social-media-icons']['number']; ?>"><i class="fa fa-phone" ></i></a></li><?php echo $globalkorenamake['social-media-icons']['number']; ?>
<?php endif; ?>
                </ul>
            </div>
            <div class="pull-left fnav">
                <p>&copy; All Right Reserved <?php the_time('Y'); ?> By <?php echo $globalkorenamake['footer-copyright']; ?> 
<?php if($globalkorenamake['social-media-icons']['fdpage']): ?>
				<a target="_blank"  href="<?php echo $globalkorenamake['social-media-icons']['fdpage']; ?>">facebook page</a></p>
<?php endif; ?>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


	
	<?php wp_footer(); ?>
  </body>
</html>