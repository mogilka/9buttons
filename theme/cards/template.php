<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		tempate.php
* @Package:		GetSimple
* @Action:		Publication page for the 9buttons
*
*****************************************************/

# Get this theme's settings based on what was entered within it's plugin. 
# This function is in functions.php 
Innovation_Settings();
include('header.php'); 
include('top.php');
?>
	<div class="wrapper clearfix">
		<div class="details rounded">
			<article>
				<section>
					<h1><?php get_page_title(); ?></h1>
					<?php get_page_content(); ?>
				</section>
			</article>
		</div>
	</div>
<?php include('footer.php'); ?>
