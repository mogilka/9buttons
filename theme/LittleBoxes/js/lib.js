	
    jQuery(document).ready( function() {
		var stack = jQuery('#stack ul').stackmenu();
		jQuery('#stack .trigger').click( function() {
			stack.stackmenu('option', 'direction', 'bottom');
			stack.stackmenu('toggle');
		});
        $('.trigger').poshytip({
            className: 'tip-twitter',
            showTimeout: 1,
            alignTo: 'target',
            alignX: 'left',
            offsetY: 5,
            allowTipHover: false
        });        
	});

            $(function() {
                /* object to save the initial positions of each box */
                var divinfo = {"initial": []};
                /* index of the selected / clicked box */
                var current = -1;

                /* we save the index,top and left of each one of the boxes */
                $('#littleBoxes > div').each(function(){
                    var $this = $(this);
                    var initial = {
                                'index' : $this.index(),
                                'top'     : $this.css('top'),
                                'left'     : $this.css('left')
                    };
                    divinfo.initial.push(initial);
                });

                /* clcik event for the anchors inside of the boxes */
                $('#littleBoxes a.samewin').bind('click',function(e){
                        var $this         = $(this);
                        var $currentBox    = $this.parent();
                        /* set a z-index lower than all the other boxes,
                        to see the other boxes animation on the top*/
                        $currentBox.css('z-index','1');

                        /* if we are clicking on a expanded box : */
                        if(current == $currentBox.index()){
                            /* put it back (decrease width,height, and set the top and left like it was before).
                            the previous positions are saved in the divinfo obj*/
                            $currentBox.stop().animate({
                                    'top'         : divinfo.initial[$currentBox.index()].top,
                                    'left'        : divinfo.initial[$currentBox.index()].left,
                                    'width'     : '150px',
                                    'height'    : '150px'
                            },800,'easeOutBack').find('.boxcontent').fadeOut();


                            $('#littleBoxes > div').not($currentBox).each(function(){
                                var $ele         = $(this);
                                var elemTop     = divinfo.initial[$ele.index()].top;
                                var elemLeft     = divinfo.initial[$ele.index()].left;
                                $ele.stop().show().animate({
                                    'top'         : elemTop,
                                    'left'        : elemLeft,
                                    'opacity'    : 1
                                },800);
                            });
                            current = -1;
                            $(this).height('150px').css({lineHeight:"30px", paddingTop:"60px"});
                        }
                        /* if we are clicking on a small box : */
                        else{
                            /* randomly animate all the other boxes.
                            Math.floor(Math.random()*601) - 150 gives a random number between -150 and 450.
                            This range is considering the initial lefts/tops of the elements. It's not the exact right
                            range, since we would have to calculate the range based on each one of the boxes. Anyway, it
                            fits our needs...
                            */
                            $('#littleBoxes > div').not($currentBox).each(function(){
                                var $ele = $(this);
                                $ele.stop().animate({
                                    'top' : (Math.floor(Math.random()*601) - 150) +'px',
                                    'left': (Math.floor(Math.random()*601) - 150) +'px',
                                    'opacity':0
                                },800,function(){
                                    $(this).hide();
                                });
                            });

                            /* expand the clicked one. Also, fadeIn the content (boxcontent)
                            if you want it to fill the space of the littleBoxes container,
                            then these are the right values */
                            var newwidth     = 750;
                            var newheight     = 750;
                            $currentBox.stop().animate({
                                'top'     : '0px',
                                'left'    : '0px',
                                'width' : newwidth +'px',
                                'height': newheight+'px'
                            },800,'easeOutBack',function(){
                                current = $currentBox.index();
                                $(this).find('.boxcontent').fadeIn();
                            });
                            $(this).height('60px').css({lineHeight:"60px", paddingTop:"5px"});
                        }
                        e.preventDefault();
                });
            });

function initContacts() {
	var inputs = document.getElementsByTagName('input');
	for (var i = 0; i < inputs.length; i++) {
		var itype = inputs[i].type;
		var ivalue = inputs[i].value;
		if ('submit' == itype && 'Отправить' == ivalue) { //TODO не везде может работать
			inputs[i].className += ' btn large custom-bravo';
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
		netUrl += 'text=' + ' ' + webtitle + ' @9buttonskz @reportErrOrg ' + share_text;
		netUrl += '&url=' + itemURL;
		netUrl += '&counturl=' + itemURL;
	} else if ('odnoklassniki' == net) {
		netUrl  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
		netUrl += '&st.comments=' + webtitle + ' ' + share_text;
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
