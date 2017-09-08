		<div class="clear"></div><!-- /clear any floats -->
	</div><!-- /main-content -->
</div><!-- /wrap -->

<div id="footer-wrap">
	<footer id="footer" class="container">
		<nav id="footer-nav" class="clr without-logo">
			<div id="footer-logo">
				<a href="<?php echo home_url(); ?>/" title="<?php get_bloginfo( 'name' ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php get_bloginfo( 'name' ) ?>"></a>
			</div><!-- #footer-logo -->
			<?php
			// Footer Menu
			wp_nav_menu( array(
				'theme_location'	=> 'footer',
				'sort_column'		=> 'menu_order',
				'menu_class'		=> 'footer-nav-links',
				'fallback_cb'		=> false
			)); ?>
		</nav><!-- #footer-nav -->
		<div id="footer-copy" class="clr">Copyright <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a>
		</div><!-- #footer-copy -->
	</footer><!-- #ooter -->
</div><!-- #footer-wrap -->

<?php wp_footer(); // Footer hook, do not delete, ever ?>

<script src="//yandex.st/share/share.js" charset="utf-8"></script>
<!-- Yandex.Metrika counter --><script>(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter23670481 = new Ya.Metrika({id:23670481, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/23670481" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
</html>