<?
/****************************************************
*
* @File: 		template.php
* @Package:		iGetSimple | www.get-simple.info
* @Action:		iPhone template for GetSimple
* @Created by:	Eddyfever | www.ieddy.nl | thnx to: Zegnåt
* @Version:	    BETA 1.0
*
*****************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php get_page_clean_title(); ?> &raquo; <?php get_site_name(); ?> &raquo; <?php get_i18n_component('tagline'); ?></title>
<link href="<?php get_theme_url(); ?>/images/homescreen.png" rel="apple-touch-icon" />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/main.css" />

<?php get_header(); ?>
<meta name="robots" content="index, follow" />

<script src='<?php get_theme_url(); ?>/scripts/jquery-1.3.2.min.js' type="text/javascript"></script>
<script src='<?php get_theme_url(); ?>/scripts/class.horinaja.jquery.js' type='text/javascript'></script>
<script src='<?php get_theme_url(); ?>/scripts/lib.js' type='text/javascript'></script>

<!-- 100% width in vertical and horizontal on iphone -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<!-- If using the horizontal slider pagination -->
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/horinaja.css" type="text/css" media="screen" />


<!-- script for menu -->
<script type="text/javascript">
//<![CDATA[
function ShowHide(){
$("#menubox").animate({"height": "toggle"}, { duration: 1000 });
}
//]]>
</script>
<!-- end script for menu -->

<!-- Horizontal slider (<li> elements in #featured will slide horizontal) -->
<script> $(document).ready(function(){
$('#featured').Horinaja({
capture:'featured',delai:0.3,
duree:5,pagination:false});
});
</script>
<!-- end Horizontal slider -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33074688-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<!-- Begin Wrapper -->
<div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header">
		 
		  <div id="titlebox">
		   <div class="contentin"> 
		    <a class="logo" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
		     <p class="tagline"><?php get_component('tagline'); ?></p>
		   </div>
		  </div>
		 
         <div id="menu" ><a onclick="ShowHide(); return false;" href="#">
         <img src="<?php get_theme_url(); ?>/images/menu.png" alt="menu" width="" height="" align="middle"/></a>
         </div> 
			  
		 </div>
		 <!-- End Header -->
		 
		 
		 <!-- Begin menubox -->
		 <div id="menubox">
		  <ul>
            <li class="index"><a href="<?php get_site_url(); ?>" title="Портфолио">Портфолио</a></li>
            <li class="partners"><a href="<?php get_site_url(); ?>?id=partners" title="Партнёры">Партнёры</a></li>
            <li class="contactus"><a href="<?php get_site_url(); ?>?id=contactus" title="Контакты">Контакты</a></li>
		   <div id="closebox"><a onclick="ShowHide(); return false;" href="#">
		   <img src="<?php get_theme_url(); ?>/images/close.png" alt="close" width="" height=""/></a></div>
		  </ul>
		 </div>
		 <!-- End menubox -->
		 
         
		 <!-- Begin Content -->
		 <div id="content">
		 <!-- .contentin is for padding the text and images -->
		  <div class="contentin">      
	       <h1><?php get_page_title(); ?></h1><br>
	        <p><?php get_page_content(); ?></p>
		     <div class="date"><small>Расскажите о нас друзьям:</small>
                <?php get_component('mobile_share'); ?>
		     </div><br>
		  </div>
		 
		 </div>
		 <!-- End Content -->
		 
		 <!-- Begin sidebar (is called sidebar because of the normal deafault GetSimple Theme and component -->
		 <div id="sidebar">
		  <div class="contentin">
            <?php get_component('collaboration'); ?>
		  </div>
		 </div>
		 <!-- End sidebar -->
		 
		 
		 <!-- Begin Footer, Link us back would be nice ;)-->
		 <div id="footer">
          <p>&copy; <?php echo date('Y'); ?>&nbsp;&nbsp;9buttons.kz &raquo; <?php get_i18n_component('tagline'); ?>
           <br><?php get_component('mobile_social'); ?>		
         </div>
		 <!-- End Footer -->
		 
</div>
<!-- End Wrapper -->
   
</body>
</html>
