<?php

function pixelstudio_menu($parent) {
	$data = all_pages();     
    $items = array();
	$counter = 0;
    $miclasses = array(
            'custom-foxtrot',
            'custom-echo',
            'custom-juliet',
            'custom-lima',
            'custom-india',
            'custom-charlie',
            'custom-alpha',
            'custom-november',
            'custom-kilo',
            'custom-bravo',
            'custom-golf',
            'custom-hotel',
            'custom-mike',
            'custom-delta',
            'custom-oscar'
    );
	foreach($data as $block) {
        $miclass = 'btn large '.$miclasses[$counter];
		if ($counter == 0) {	
			echo '<li class="active '.$miclass.'"><a href="#'.$block['slug'].'">'.$block['title'].'</a><span class="top"></span><span class="bottom"></span></li>';
		} else {
			echo '<li class="'.$miclass.'"><a href="#'.$block['slug'].'">'.$block['title'].'</a><span class="top"></span><span class="bottom"></span></li>';
		}
		$counter++;
	}
}

function pixelstudio_pages() {
	
	$data = all_pages();     
	    
    $items = array();
	
	foreach($data as $block) {
	
		if($block['slug'] != 'index' && $block['slug'] != 'portfolio' && $block['slug'] != 'contacts' && $block['slug'] != 'partners') {
	
			echo '<div class="item" id="'.$block['slug'].'">';
			echo '<h1 class="grid_6">'.$block['title'].'</h1><div class="clear"></div>';
			echo '<div class="grid_4">'.$block['content'].'</div>';
			
			$sidebar = gst_getsidebar($block['slug']);
			
			echo '<div class="grid_2">'.$sidebar['content'].'</div>';
			echo '<div class="clear"></div>';
			echo '</div>';
		
		}
				
	}
	
}

function all_pages($id = null,$xml=false) {

	$menu_extract = '';
    global $PRETTYURLS;
    global $SITEURL;
        
    $path = GSDATAPAGESPATH;
    $dir_handle = @opendir($path) or die("Unable to open $path");
    $filenames = array();
    while ($filename = readdir($dir_handle)) {
    	$filenames[] = $filename;
    }
    closedir($dir_handle);
        
    $count="0";
    $pagesArray = array();
    if (count($filenames) != 0) {
        foreach ($filenames as $file) {
            if ($file == "." || $file == ".." || is_dir(GSDATAPAGESPATH . $file) || $file == ".htaccess"  ) {
                // not a page data file
           } else {
										$data = getXML(GSDATAPAGESPATH . $file);
                    if ($data->menuStatus != '') {
                        $pagesArray[$count]['menuStatus'] = $data->menuStatus;
                        $pagesArray[$count]['menuOrder'] = $data->menuOrder;
                        $pagesArray[$count]['menu'] = $data->menu;
                        $pagesArray[$count]['parent'] = $data->parent;
                        $pagesArray[$count]['title'] = $data->title;
                        $pagesArray[$count]['url'] = $data->url;
                        $pagesArray[$count]['private'] = $data->private;
                        $pagesArray[$count]['pubDate'] = $data->pubDate;
                        $pagesArray[$count]['iconname'] = $data->iconname;
                        $pagesArray[$count]['tagline'] = $data->tagline;
                        $pagesArray[$count]['content'] = stripslashes(htmlspecialchars_decode($data->content, ENT_QUOTES));
                        $count++;
                    }
                }
            }
        }
        
        $pagesSorted = subval_sort($pagesArray,'menuOrder');
        if (count($pagesSorted) != 0) { 
            $count = 0;
            if (!$xml){
            foreach ($pagesSorted as $page) {
                    $text = (string)$page['menu'];
                    $pri = (string)$page['menuOrder'];
                    $parent = (string)$page['parent'];
                    $title = (string)$page['title'];
                    $slug = (string)$page['url'];
                    $menuStatus = (string)$page['menuStatus'];
                    $private = (string)$page['private'];
					$pubDate = (string)$page['pubDate'];
					$iconname = (string)$page['iconname'];
					$tagline = (string)$page['tagline'];
					$content = (string)$page['content'];
                    
                    $url = find_url($slug,$parent);
                    
                    $specific = array("slug"=>$slug,"url"=>$url,"parent_slug"=>$parent,"title"=>$title,"menu_priority"=>$pri,"menu_text"=>$text,"menu_status"=>$menuStatus,"private"=>$private,"pub_date"=>$pubDate, "iconname"=>$iconname, "tagline"=>$tagline, "content"=>$content);
                    
                    if ($id == $slug) { 
                        return $specific; 
                        exit; 
                    } else {
                    
                        $menu_extract[] = $specific;
                    }
                
            } 
            return $menu_extract;
            } else {
            $xml = '<?xml version="1.0" encoding="UTF-8"?><channel>';    
            foreach ($pagesSorted as $page) {
                    $text = $page['menu'];
                    $pri = $page['menuOrder'];
                    $parent = $page['parent'];
                    $title = $page['title'];
                    $slug = $page['url'];
                    $pubDate = $page['pubDate'];
                    $menuStatus = $page['menuStatus'];
                    $private = $page['private'];
                   	
                    $url = find_url($slug,$parent);
                    
                    $xml.="<item>";
                    $xml.="<slug><![CDATA[".$slug."]]></slug>";
                    $xml.="<pubDate><![CDATA[".$pubDate."]]></pubDate>";
                    $xml.="<url><![CDATA[".$url."]]></url>";
                    $xml.="<parent><![CDATA[".$parent."]]></parent>";
                    $xml.="<title><![CDATA[".$title."]]></title>";
                    $xml.="<menuOrder><![CDATA[".$pri."]]></menuOrder>";
                    $xml.="<menu><![CDATA[".$text."]]></menu>";
                    $xml.="<menuStatus><![CDATA[".$menuStatus."]]></menuStatus>";
                    $xml.="<private><![CDATA[".$private."]]></private>";
                    $xml.="</item>";
                    
            }
            $xml.="</channel>";
            return $xml;
            }
        }
    }
    
function get_content($page){

	$item = array();

	$path = "data/pages";
    $thisfile = @file_get_contents('data/pages/'.$page.'.xml');
    $data = simplexml_load_string($thisfile);
    
    //print_r($data);
            
    $item['content'] = stripslashes(htmlspecialchars_decode($data->content, ENT_QUOTES));
    $item['title'] = $data->title;
    $item['pubDate'] = $data->pubDate;
    $item['url'] = $data->url;
    $item['private'] = $data->private;
    $item['parent'] = $data->parent;
    
    return $item;
    
}

function gst_getsidebar($parent) {
	
	$data = menu_data();     

	foreach($data as $block) {
						
		if ($block['parent_slug'] == $parent){
				
			return get_content($block['slug']);
		
		}
	}
	
}


function gst_childpages($parent, $orderby = 'title', $begin = 0, $end = 0) {

    $data = menu_data();     
    $parent = $parent;
    $output = array();
    
    if($orderby == 'title') {
    	usort($data, "cmp_title");
    }
    
    if($orderby == 'date') {
    	usort($data, "cmp_date");
    }
    
    $items = array();

	foreach($data as $block) {
				
		if ($block['parent_slug'] == $parent && $block['title'] != 'sidebar'){
		
			array_push($items, get_content($block['slug']));
		
		}
	}
	
	if($begin == 0 && $end == 0) {
		return $items;
	} else {
	
		$return = array();
		
		$return['total'] = count($items);
		$return['items'] = array_slice($items, $begin, $end);
	
		return $return;
	}
}

function cmp_title($a, $b) {
    if ($a['title'] == $b['title']) {
        return 0;
    }
    return ($a['title'] < $b['title']) ? -1 : 1;
}

function cmp_date($a, $b) {
    if (strtotime($a['pub_date']) == strtotime($b['pub_date'])) {
        return 0;
    }
    return (strtotime($a['pub_date']) > strtotime($b['pub_date'])) ? -1 : 1;
}



/* 
	we will put some default components in place to start the site off 

*/

//PixelStudio footer

$temp = getXML(GSDATAOTHERPATH.'components.xml');
			
$components = $temp->item;
			
$create = 1;
			
foreach($components as $component) {
	if($component->title == "PixelStudio footer" && $component->slug == 'pixelstudio_footer') {
		$create = 0;
	}
}
			
if($create == 1) {
			
	$newitem = $temp->addChild('item');
			
	$newitem->addChild('title', 'PixelStudio footer');
	$newitem->addChild('slug', 'pixelstudio_footer');
	$newitem->addChild('value', '<div class="grid_2">
		
			<h2>Social networks</h2>
			
			<p>
				For all news and updates, join us on the social networks and stay tuned ! 
			</p>
			
			<div class="social">
			
				<a href=""><img src="<?php get_theme_url(); ?>/images/social/facebook.png" alt="Facebook" /></a>
				<a href=""><img src="<?php get_theme_url(); ?>/images/social/flickr.png" alt="Flickr" /></a>
				<a href=""><img src="<?php get_theme_url(); ?>/images/social/linkedin.png" alt="LinkedIn" /></a>
				<a href=""><img src="<?php get_theme_url(); ?>/images/social/skype.png" alt="Skype" /></a>
				<a href=""><img src="<?php get_theme_url(); ?>/images/social/rss.png" alt="rss" /></a>
				<a href=""><img src="<?php get_theme_url(); ?>/images/social/twitter.png" alt="Twitter" /></a>
			
			</div><!-- /.social -->
		
		</div>
		<div class="grid_2">
		
			<h2>Freelance work</h2>
			
			<p>
				I am currently available for freelance work, I can design for you a brand new website or create an awesome logo.
			</p>
			
			<p>
				Just <a href="">drop me an email</a> to get in touch !
			</p>
		
		</div>
		<div class="grid_2">
		
			<h2></h2>
		
			<p>
				
				This theme uses 100% valid
				HTML and CSS
				
			</p>
			
			<p>
			
				Copyright (c) 2010 Pixelstudio
			
			</p>
		
		</div>
		<div class="clear"></div>');
			
	XMLsave($temp, GSDATAOTHERPATH.'components.xml');
			
}


/* 
	
	Theme settings (utilizes the GST ThemeSettings plugin)

*/

add_action('gst_theme_settings','simplefolio_settings');//SimpleFolio settings page
        
function simplefolio_settings() {

	//check if we need to save/updates data
	if(isset($_POST) && count($_POST) > 0) {
			
		gst_save_themesettings($_POST);
		
		$datasaved = true;
		
	}
	
	$themesettings = gst_get_themesettings();
	
	?>
	
	<div class="blockTop">
		<h2>PixelStudio Theme Settings</h2>
	</div>
	<style type="text/css">
	
	.blockTop h2 {
		color:#000;
		font-size:22px;
	}
	
	#settings_form p {
		margin-bottom:10px;
		height:auto;
	}
	#settings_form h3 {
		color:#000;
		font-size:18px;
		margin-bottom:10px;
	}
	#settings_form label {
		text-transform: capitalize;
		font-size:13px;
		font-weight: normal;
		display:block;
		font-weight:bold;
		float:none;
		font-family: Arial, sans-serif;
	}
	#settings_form input.text, #settings_form select.text {
		float:none;
	}
	#settings_form input.submit {
		margin-top:20px;
	}
	p.updated {
		width:auto;
		padding:10px;
	}
	</style>
	<div class="blockContent">
		
		<?php if(isset($datasaved)):?>
		<p class="updated">
		Your theme settings have been successfully saved!
		</p>
		<?php endif;?>
				
		<form id="settings_form" action="" method="post" class="largeform">
			<h3>General Settings</h3>
			<p>
				<label>Favicon link</label>
				<input name="favicon" type="text" class="text" <?php if(isset($themesettings['favicon'])):?>value="<?php echo $themesettings['favicon'];?>"<?php endif;?> >
			</p>
			<p>
				<label>Sitename</label>
				<input name="sitename" type="text" class="text" <?php if(isset($themesettings['sitename'])):?>value="<?php echo $themesettings['sitename'];?>"<?php endif;?> >
			</p>
			<p>
				<label>Sitename font size (in pixels)</label>
				<input name="sitename-fontsize" type="text" class="text" <?php if(isset($themesettings['sitename-fontsize'])):?>value="<?php echo $themesettings['sitename-fontsize'];?>"<?php endif;?> >
			</p>
			
			<h3>Contact page settings</h3>
			<p>
				<label>Subject for message to site owner:</label>
				<input name="owneremail_subject" type="text" class="text" <?php if(isset($themesettings['owneremail_subject'])):?>value="<?php echo $themesettings['owneremail_subject'];?>"<?php endif;?> >
			</p>
			<p>
				<label>Subject for message to site user:</label>
				<input name="useremail_subject" type="text" class="text" <?php if(isset($themesettings['useremail_subject'])):?>value="<?php echo $themesettings['useremail_subject'];?>"<?php endif;?> >
			</p>
			<p>
				<label>Body text for message to site user:</label>
				<textarea name="useremail_body"><?php if(isset($themesettings['useremail_body'])) {echo $themesettings['useremail_body'];}?></textarea>
			</p>
			<p>
				<label>On-page confirmation message</label>
				<textarea name="confirmationmessage" style="height:150px;"><?php if(isset($themesettings['confirmationmessage'])) {echo $themesettings['confirmationmessage'];}?></textarea>
			</p>
			
			<p>
				<input type="submit" class="submit" value="Save Settings" />
			</p>
		</form>
	</div>
	
	<?php
}

/**
 * Innovation Parent Link
 *
 * This creates a link for a parent for the breadcrumb feature of this theme
 *
 * @param string $name - This is the slug of the link you want to create
 * @return string
 */
function Innovation_Parent_Link($name) {
	$file = GSDATAPAGESPATH . $name .'.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		$title = $p->title;
		$parent = $p->parent;
		$slug = $p->slug;
		echo '<a href="'. find_url($name,'') .'">'. $title .'</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; ';
	}
}

/**
 * Устанавливаем стиль body в зависимости от времени суток
 * @return имя css-класса
 */ 
function get_body_id() {
    date_default_timezone_set('Asia/Almaty');
    $curh = date('G');
    if ($curh >= 6 && $curh < 12)
        return 'morning';
    elseif ($curh >= 12 && $curh < 18)
        return 'day';
    elseif ($curh >= 18 && $curh < 24)
        return 'evening';
    elseif ($curh >= 0 && $curh < 6)
        return 'night';
    else
        return 'day';
}

/**
 * Инициализируем html-элементы в зависимости от времени суток
 * @param bodycss имя css-класса элемента body
 */ 
function init_day_time($bodycss) {
    echo get_component($bodycss);
}

?>
