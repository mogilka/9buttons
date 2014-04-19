<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php get_page_clean_title(); ?> &raquo; <?php get_site_name(); ?> &raquo; <?php get_i18n_component('tagline'); ?></title>
<?php if(gst_get_themesettings('favicon')):?>
<link rel="icon" type="image/png" href="<?php echo gst_get_themesettings('favicon');?>">
<?php endif;?>

<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/jstackmenu.css" type="text/css" />

<link rel="stylesheet" href="<?php get_theme_url(); ?>/js/poshytip/src/tip-yellow/tip-yellow.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/js/poshytip/src/tip-violet/tip-violet.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/js/poshytip/src/tip-darkgray/tip-darkgray.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/js/poshytip/src/tip-skyblue/tip-skyblue.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/js/poshytip/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/js/poshytip/src/tip-twitter/tip-twitter.css" type="text/css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/js/poshytip/src/tip-green/tip-green.css" type="text/css" />

<?php get_header();?>
<script src="http://9buttons.kz/theme/voll/js/jquery.js"></script>
<script src="http://9buttons.kz/theme/voll/js/jquery-ui-1.7.2.custom.min.js"></script>
<script src="http://9buttons.kz/theme/voll/js/jquery.easing.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/lib.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/jstackmenu.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/poshytip/src/jquery.poshytip.js" type="text/javascript"></script>

<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/jquery.autogrow.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/jquery.cycle.all.min.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/jquery.pagify.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/jquery-ui.sort.min.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/supersized.3.2.6.min.js" type="text/javascript"></script>
<script src="<?php get_site_url(); ?>plugins/i18n_gallery/js/supersized.shutter.min.js" type="text/javascript"></script>

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
