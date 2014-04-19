<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		main.php
* @Package:		GetSimple
* @Action:		Main page for the 9buttons
*
*****************************************************/

# Get this theme's settings based on what was entered within it's plugin. 
# This function is in functions.php 
Innovation_Settings();
include('header.php'); 
?>
<div class="wrapper-main">
	<div id="horiz-block1" class="horiz-block">
		<div class="right-col">
			<div class="main-block rounded custom-foxtrot">
				<script type="text/javascript" src="<?php get_theme_url(); ?>/js/swfobject.js"></script>
				<center><div id="oblapics">  
					<a href="http://reporterr.org/" title="Платформа для тестирования мобильных приложений">http://sportlive.kz/9buttons/data/uploads/partners/reporterr.png</a>
					<a href="http://prodengi.kz" title="Банки и страховые компании Казахстана">http://sportlive.kz/9buttons/data/uploads/partners/prodengi.gif</a>
					<a href="http://www.kaznetmedia.kz/" title="Казнетмедиа">http://sportlive.kz/9buttons/data/uploads/partners/kaznetmedia.png</a>
					<a href="http://mblog.kz" title="Марат Шакен">http://sportlive.kz/9buttons/data/uploads/partners/mblog.jpg</a>
					<a href="http://apkdev.tumblr.com" title="Нетривиальные вопросы разработки">http://sportlive.kz/9buttons/data/uploads/partners/4androids.png</a>
					<a href="http://sportlive.kz" title="SportLive.kz - Живи спортом!">http://sportlive.kz/9buttons/data/uploads/partners/sportlive.jpg</a>  
				</div></center>
				<script type="text/javascript">
					var flashvars = {};
					flashvars.mode = 'images';
					eTagz = document.getElementById('oblapics').getElementsByTagName('A');
					flashvars.thumbcloud = '<images>';
					for (var i = 0; eTagz[i]; ++i)
						flashvars.thumbcloud += '<image href=\'' + eTagz[i].getAttribute('href')+ '\' target=\'_blank\'>'+ eTagz[i].innerHTML + '</image>';
					delete eTagz;
					flashvars.thumbcloud += '</images>';

					var params = {};
					params.wmode = 'transparent';
					params.bgcolor = '#FFFFFF';
					params.allowscriptaccess = 'always';

					var attributes = {};
					attributes.id = 'oblapics';
					attributes.name = 'thumbcloud';
					swfobject.embedSWF('http://sportlive.kz/9buttons/widgets/photowidget.swf', 'oblapics', '300', '300', '9.0.0', false, flashvars, params, attributes);
				</script>
			</div>
		</div>
		<div class="left-col-big" id="aboutus">
			<div class="main-block rounded custom-india">
				<article>
					<section>
						<h1><?php get_page_title(); ?></h1>
						<?php get_page_content(); ?>
						<a href="javascript:onFeedback();" id="btn-feedback" >Напишите нам и мы ответим</a>
						<?php getPageContent('contacts'); ?>
						<script type='text/javascript'>initContacts();</script>				
					</section>
				</article>
			</div>
		</div>
	</div>
	<div id="horiz-block2" class="horiz-block">
		<div class="right-col">
			<div class="main-block rounded custom-bravo">
				<article>
					<section>
						<center><a href="http://sportlive.kz/9buttons/index.php?id=projects#sportlive"><img alt="sportlive.kz" src="http://sportlive.kz/9buttons/data/uploads/projects/sportlive/sportlive.jpg" title="Новости казахстанского спорта" /></a></center>
					</section>
				</article>
			</div>
		</div>
		<div id="horiz-block3" class="horiz-block-left">
			<div class="right-half">
				<div class="main-block rounded custom-mike">
					<article>
						<section>
							<center><a href="http://sportlive.kz/9buttons/index.php?id=projects#carexpenses"><img alt="Car expenses" src="http://sportlive.kz/9buttons/data/uploads/projects/carexpenses/CarExpenses.jpg" title="Учёт расходов на машину" /></a></center>
						</section>
					</article>
				</div>
			</div>
			<div class="left-half">
				<div class="main-block rounded custom-echo">
					<article>
						<section>
							<center><a href="http://sportlive.kz/9buttons/index.php?id=projects#newsbox"><img alt="NewsBox" src="http://sportlive.kz/9buttons/data/uploads/projects/newsbox/NewsBox.jpg" title="Агрегатор новостей" /></a></center>
						</section>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
