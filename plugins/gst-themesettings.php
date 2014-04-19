<?php

/*
Name: GST ThemeSettings
Description: Allows themes to store and retrieve data
Version: 1.1.0
Author: Mattijs Naus / GetSimpleThemes
Author URI: http://www.getsimplethemes.com/
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile,
	'GST ThemeSettings',
	'1.1.0',
	'Mattijs Naus / GetSimpleThemes',
	'http://www.getsimplethemes.com/',
	'Description: Allows themes to store and retrieve data',
	'settings',
	'gst_theme_settings'
);

add_action('settings-sidebar','createSideMenu',array($thisfile,'GST ThemeSettings'));//puts an extra item in the sidebar

/* 
	gst_theme_settings()
	
	includes the "functions.php" file from the current active theme (so it can hook into the "theme_settings")
	and it implements the hook "theme_settings"
	
 */

function gst_theme_settings() {

	//find out what template is being used
	$thisfilew = GSDATAOTHERPATH .'website.xml';
	if (file_exists($thisfilew)) {
	
		$dataw = getXML($thisfilew);
		$TEMPLATE = $dataw->TEMPLATE;
		
		// include the functions.php page if it exists within the theme
		if (file_exists("../theme/".$TEMPLATE."/functions.php")) {
			include("../theme/".$TEMPLATE."/functions.php");	
		}
		
		//this will make sure the settings page provided within the theme's functions.php file is displayed
		exec_action('gst_theme_settings');
		
	}
	
}

/*
	
	gst_list_pages()
	
	returns an array of all pages including the private ones
	
*/

function gst_list_pages() {
	
	$path = GSDATAPAGESPATH;
	$dir_handle = @opendir($path) or die("Unable to open $path");
	$filenames = array();
	while ($filename = readdir($dir_handle)) {
	
		if($filename != "." && $filename != ".." && $filename != ".htaccess") {
		
			$thedata = getXML(GSDATAPAGESPATH.$filename);
		
			$temp = array();
			$temp['file'] = $filename;
			$temp['title'] = $thedata->title;
			
		
			$filenames[] = $temp;
				
		}
	}
	
	return $filenames;
}

/*
	
	gst_get_themesettings()
	
	if no parameter is passed loads saved theme data and returns an array
	if parameter is passed, the function will look for this variable and return it's value
	
*/

function gst_get_themesettings($name = '') {
	
	if($name == '') {
		
		//load existing data
		if(file_exists(GSDATAOTHERPATH."theme_settings.xml")) {
		
			$thedata = getXML(GSDATAOTHERPATH."theme_settings.xml");
		
			$themesettings = array();
		
			foreach($thedata->children() as $child) {
						
				$themesettings[$child->getName()] = $child;
			
			}
		
			return $themesettings;
		
		} else {
		
			return false;
		
		}
	
	} else {
		//looking for a single variable
		
		if(file_exists(GSDATAOTHERPATH."theme_settings.xml")) {
		
			$thedata = getXML(GSDATAOTHERPATH."theme_settings.xml");
			
			foreach($thedata->children() as $child) {
					
				if($child->getName() == $name) {
									
					return $child;
					
				} 
			
			}
			
			return false;
		
		} else {
			
			return false;
			
		}
	}
}


/*
	
	gst_save_themesettings(array)
	
	accepts an array (typically $_POST) and writes name/value pairs to the data file
	
*/

function gst_save_themesettings($arr) {
	
	if(file_exists(GSDATAOTHERPATH."theme_settings.xml")) {
			
		$xml = @new SimpleXMLExtended('<?xml version="1.0" encoding="UTF-8"?><item></item>');
			
		foreach($arr as $name => $value) {
			
			$note = $xml->addChild($name);
			$note->addCData($value);
			
		}	
			
		$xml->asXML(GSDATAOTHERPATH."theme_settings.xml");
			
	} else {
			
		//file doesn't exist, let's create it
		$xml = @new SimpleXMLExtended('<?xml version="1.0" encoding="UTF-8"?><item></item>');
			
		foreach($arr as $name => $value) {
			
			$note = $xml->addChild($name);
			$note->addCData($value);
			
		}	
			
		$xml->asXML(GSDATAOTHERPATH."theme_settings.xml");
			
	}
	
}

?>