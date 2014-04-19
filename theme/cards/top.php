<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		top.php
* @Package:		GetSimple
* @Action:		Logo and breadscrumbs block for the 9buttons
*
*****************************************************/
?>
	<header>
		<div class="header">
			<div class="wrapper">
				<a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a>
			</div>
		</div>
		<p class="breadcrumbs rounded custom-alpha" >
			<span class="wrapper">
				<a href="<?php get_site_url(); ?>">Главная</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
			</span>
		</p>
	</header>	
