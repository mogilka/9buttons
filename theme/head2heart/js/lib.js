var targetPos = 0;

$(document)['ready'](function () {
    function slideTo(targetid, slidediv, shiftval, unknwnval) {
        var step0 = 0;
        var step1 = 300; //150
        var step2 = 750; //500
        var step3 = 1800; //830

        $('#nav a.slider')['removeClass']('current');

        targetid = targetid.substr(targetid.indexOf('#'));
        switch (targetid) {
        case '#home':
            targetPos = (step0 * unknwnval) + 'px';
            break;;
        case '#step1':
            targetPos = (step1 * unknwnval) + 'px';
            $('#footer #nav .step1 a')['addClass']('current');
            break;;
        case '#step2':
            targetPos = (step2 * unknwnval) + 'px';
            $('#footer #nav .step2 a')['addClass']('current');
            break;;
        case '#step3':
            targetPos = (step3 * unknwnval) + 'px';
            $('#footer #nav .step3 a')['addClass']('current');
            break;;
        default:
            break;;
        };
//        alert(targetPos);
        $(slidediv)['animate']({
            scrollLeft: targetPos
        }, {
            duration: shiftval,
            easing: 'easeOutCubic',
            queue: false
        });
    };
    $('#header a.slider')['click'](function () {
        slideTo($(this)['attr']('href'), '#wrapper', 800, 1);
        slideTo($(this)['attr']('href'), '#cloudsFore', 1600, 0.1);
        slideTo($(this)['attr']('href'), '#cloudsBack', 1200, 0.7);
        return false;
    });
    $('#cloudsBack a.slider')['click'](function () {
        slideTo($(this)['attr']('href'), '#wrapper', 800, 1);
        slideTo($(this)['attr']('href'), '#cloudsFore', 1600, 0.1);
        slideTo($(this)['attr']('href'), '#cloudsBack', 1200, 0.7);
        return false;
    });
    $('#main a.slider')['click'](function () {
        slideTo($(this)['attr']('href'), '#wrapper', 800, 1);
        slideTo($(this)['attr']('href'), '#cloudsFore', 1600, 0.1);
        slideTo($(this)['attr']('href'), '#cloudsBack', 1200, 0.7);
        return false;
    });
    $('#nav a.slider')['click'](function () {
        slideTo($(this)['attr']('href'), '#wrapper', 800, 1);
        slideTo($(this)['attr']('href'), '#cloudsFore', 1600, 0.1);
        slideTo($(this)['attr']('href'), '#cloudsBack', 1200, 0.7);
        return false;
    });
});


function initContacts() {
	var inputs = document.getElementsByTagName('input');
	for (var i = 0; i < inputs.length; i++) {
		var itype = inputs[i].type;
		var ivalue = inputs[i].value;
		if ('submit' == itype && 'Отправить' == ivalue) { //TODO не везде может работать
			inputs[i].className += ' btn large custom-india';
			inputs[i].id = 'p01-contact1_bsend';
		}
	}

    var msgarea = document.getElementById('p01-contact1_field0');
//    msgarea.onclick = onClickMessage;
//    msgarea.onblur = onBlurMessage;
	msgarea.value = 'Если Вы оставите свой почтовый адрес или телефон, мы быстрее свяжемся с Вами по Вашему вопросу:\n\n';
}
