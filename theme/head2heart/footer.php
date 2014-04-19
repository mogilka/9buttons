<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.php
* @Package:		GetSimple
* @Action:		Footer for the 9buttons
*
*****************************************************/
?>

<div id="footer">
	<div class="inner clearfix">
        <?php get_footer(); ?>
		<div id="share">
<!--			<span id="facebook">
                <script src="http://connect.facebook.net/ru_RU/all.js#xfbml=1"></script>
                <fb:like send="false" layout="button_count" width="" show_faces="false" action="recommend"></fb:like>
            </span> -->
            <span id="gplusone"><g:plusone size="medium"></g:plusone></span>
            <span id="twitter">
                <a href="http://twitter.com/share" class="twitter-share-button" data-lang="ru">Tweet</a>
                <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
            </span>
		</div>
		<ul id="nav" class="clearfix">
			<li><a href="<?php get_site_url(); ?>#home" title="Step 1" class="btn middle slider custom-alpha">О компании</a></li>
			<li><a href="<?php get_site_url(); ?>#step2" title="Step 2" class="btn middle slider custom-foxtrot">Портфолио</a></li>
			<li><a href="<?php get_site_url(); ?>#step3" title="Step 3" class="btn middle slider custom-echo">Наши партнёры</a></li>
		</ul>
		<div class="credits">
			<p class="clearfix">
				<span class="copyright clearfix">
                &copy; <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a>
				<br />Казахстан, Алматы &nbsp;+7 702 714-31-21
			</span>
		</div>
	</div>
</div>
</body>
</html>
