<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		tempate.php
* @Package:		GetSimple
* @Action:		Template for the 9buttons
*
*****************************************************/

include('header.php'); 
include('top.php');
?>
<div id="wrapper">
	<div id="main" class="clearfix">
		<div id="home">
			<ol id="steps">
				<li id="step1">
					<?php get_page_content(); ?>
					<?php getPageContent('contacts'); ?>
					<script type='text/javascript'>initContacts();</script>			
				</li>
				
				<li id="step2">
                    <?php get_i18n_gallery('projectsgallery'); ?>
				</li>
				
				<li id="step3">
					<?php getPageContent('partners'); ?>
				</li>
			</ol>
		</div>
	</div>
</div>

<div id="cloudsFore">
	<div class="inner">&nbsp;</div>
</div>
<div id="cloudsBack">
	<div class="inner">
        <a href="<?php get_site_url(); ?>#home" class="titles slider">О компании</a>
        <a href="<?php get_site_url(); ?>#step2" class="titles slider">Портфолио</a>
        <a href="<?php get_site_url(); ?>#step3" class="titles slider">Наши партнёры</a>
    </div>
</div>

<?php include('footer.php'); ?>
