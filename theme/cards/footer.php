<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.php
* @Package:		GetSimple
* @Action:		Footer block for the 9buttons
*
*****************************************************/
?>
	<footer class="clearfix" >
		<?php get_footer(); ?>
	 	<div class="wrapper">
			<div class="left">&copy; <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a> &nbsp;Казахстан, Алматы &nbsp;+7 702 714-31-21</div>
			<div class="right">Powered by <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
		</div>
	</footer>
</body>
</html>
