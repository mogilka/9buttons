// speed in milliseconds
var cloudSpeed = 90;
// set the default position
var cloudCurrent = 0;
// set the direction
var cloudDirection = 'h';

function bgscroll() {
    // 1 pixel row at a time
	cloudCurrent -= 1;
   
    // move the background with backgrond-position css properties
    $('#clouds').css("backgroundPosition", (cloudDirection == 'h') ? cloudCurrent + "px 0" : "0 " + cloudCurrent + "px");
}

//Calls the scrolling function repeatedly
setInterval("bgscroll()", cloudSpeed); //TODO запустить!!!

var nextHash;

$(document).ready(function() {

    var rotateAngle = 0;
    setInterval(function() {
        rotateAngle += 0.15;
        jQuery("#sun").rotate(rotateAngle);
    }, 290);

/*
    setInterval(function() {
        jQuery("#droid").animate({ marginTop: 20 }, 2000);
        jQuery("#droid").animate({ marginTop: 0 }, 2000);

        jQuery("#ios").animate({ marginTop: 20 }, 2000);
        jQuery("#ios").animate({ marginTop: 0 }, 2000);
    });
*/

	$('.navigation a').click(function(){
		nextHash = $(this).attr('href');
		$.scrollTo($($(this).attr('href')), 1100, {easing: 'easeInOut', onAfter: function() {window.location.hash = nextHash}});
		$('.navigation li').removeClass('active');
		$(this).parent().addClass('active');
		//window.location.hash = $(this).attr('href');
		return false;
	});
    
    	
	//check if a hash is set
	theHash = window.location.hash;
	temp = theHash.split('#');
	if(temp[1]) {
		$('.navigation li').removeClass('active');
		$('.navigation a[href="#'+temp[1]+'"]').parent().addClass('active');
	}
	
	//prettyPhoto for the portfolio
//	$('a.prettyPhoto').prettyPhoto();
	
	//shadows for images
	$('img.shadows').before($('<img src="<?php get_theme_url(); ?>/images/sidebar-pic-shadow-top.png" alt="" />'));
	$('img.shadows').after($('<img src="<?php get_theme_url(); ?>/images/sidebar-pic-shadow-bottom.png" alt="" class="bottom-shadow" />'));
});


function initContacts() {
	var inputs = document.getElementsByTagName('input');
	for (var i = 0; i < inputs.length; i++) {
		var itype = inputs[i].type;
		var ivalue = inputs[i].value;
		if ('submit' == itype && 'Отправить' == ivalue) { //TODO не везде может работать
			inputs[i].className += ' btn large custom-alpha';
			inputs[i].id = 'p01-contact1_bsend';
		}
	}
    
    document.getElementById('p01-contact1').action = "#contacts";
}

/**
 * Делимся ссылкой
 * @param net имя социальной сети
 * @param text текст сообщения
 * @param title заголовок сообщения
 * @param url адрес ссылки
 */
function share(net, text, title, url) {
	var webtitle = encodeURIComponent(title);
	var share_text = encodeURIComponent(text);
	var picture = encodeURIComponent('http://9buttons.kz/data/uploads/logo.png');
	var itemURL = encodeURIComponent(url);
	var netUrl = '';
	
	if ('facebook' == net) {
		netUrl  = 'http://www.facebook.com/sharer.php?s=100';
		netUrl += '&p[title]=' + webtitle;
		netUrl += '&p[summary]=' + share_text;
		netUrl += '&p[url]=' + itemURL;
		netUrl += '&p[images][0]=' + picture;
	} else if ('twitter' == net) {
		netUrl  = 'http://twitter.com/share?';
		netUrl += 'text=' + share_text + ' ' + webtitle + ' @reportErrOrg';
		netUrl += '&url=' + itemURL;
		netUrl += '&counturl=' + itemURL;
	} else if ('odnoklassniki' == net) {
		netUrl  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
		netUrl += '&st.comments=' + share_text + ' ' + webtitle;
		netUrl += '&st._surl=' + itemURL;
	} else if ('vkontakte' == net) {
		netUrl  = 'http://vkontakte.ru/share.php?';
		netUrl += 'url=' + itemURL;
		netUrl += '&title=' + webtitle;
		netUrl += '&description=' + share_text;
		netUrl += '&image=' + picture;
		netUrl += '&noparse=true';
	} else if ('mailru' == net) {
		netUrl  = 'http://connect.mail.ru/share?';
		netUrl += 'url=' + itemURL;
		netUrl += '&title=' + webtitle;
		netUrl += '&description=' + share_text;
		netUrl += '&imageurl=' + picture;
	} else if ('linkedin' == net) {
		netUrl  = 'http://www.linkedin.com/shareArticle?mini=true';
		netUrl += '&url=' + itemURL;
		netUrl += '&title=' + webtitle;
		netUrl += '&summary=' + share_text;
		netUrl += '&source=9buttons';
	} else if ('googleplus' == net) {
		netUrl  = 'https://m.google.com/app/plus/x/?v=compose';
		netUrl += '&content=' + itemURL;
	}
    window.open(netUrl, '', 'toolbar=0,status=0,width=626,height=436');
	return false;
}
