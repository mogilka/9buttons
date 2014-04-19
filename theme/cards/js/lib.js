function setEqualHeight(columns) {
	var etalon = 0;
	columns.each(
		function() {
			currentHeight = $(this).height();
			if (currentHeight > etalon)
				etalon = currentHeight;
		}
	);
//	alert(tallestcolumn);
	columns.height(etalon);
	$(".main-block > div").height(etalon);
}

function setEqualHeight2(columns, tallest) {
	tallest = tallest || true;
	var etalon = 0;
	columns.each(
		function() {
			currentHeight = $(this).height();
			if (tallest) {
				if (currentHeight > etalon)
					etalon = currentHeight;
			} else {
				if (currentHeight < etalon)
					etalon = currentHeight;
			}
		}
	);
//	alert(tallestcolumn);
	columns.height(etalon);
	$(".main-block > div").height(etalon);
}

function onClickMessage() {
	if ("block" == document.getElementById('p01-contact1_bsend').style.display) return;
	if (document.getElementById('p01-contact1_field1').value.length > 0) return;
	$("#p01-contact1_field1").height(50);
	var divs = document.getElementsByTagName('div');
	for (var i = 0; i < divs.length; i++) {
		var icls = divs[i].className;
		if ('field fieldcaptcha' == icls)
			divs[i].style.display = "block";
	}
	document.getElementById('p01-contact1_bsend').style.display = "block";

	frm = $("#aboutus");
	frmh = frm.height();
	frm.height(frmh + 50);
	setEqualHeight($("#horiz-block1 > div"));
}

function onBlurMessage() {
	if (document.getElementById('p01-contact1_field1').value.length > 0) return;
	$("#p01-contact1_field1").height(18);
	var divs = document.getElementsByTagName('div');
	for (var i = 0; i < divs.length; i++) {
		var icls = divs[i].className;
		if ('field fieldcaptcha' == icls)
			divs[i].style.display = "none";
	}
	document.getElementById('p01-contact1_bsend').style.display = "none";

	frm = $("#aboutus");
	frmh = frm.height();
	frm.height(frmh - 50);
	setEqualHeight($("#horiz-block1 > div"));
}

function initContacts() {
//	fmesg = document.getElementById('p01-contact1_field1');
//	fmesg.onclick = onClickMessage;
//	fmesg.onblur = onBlurMessage;

	var inputs = document.getElementsByTagName('input');
	for (var i = 0; i < inputs.length; i++) {
		var itype = inputs[i].type;
		var ivalue = inputs[i].value;
		if ('submit' == itype && 'Отправить' == ivalue) { //TODO не везде может работать
			inputs[i].className += ' btn large custom-india';
			inputs[i].id = 'p01-contact1_bsend';
		}
	}
}

function onFeedback() {
	document.getElementById('btn-feedback').style.display = "none";
	document.getElementById('lbl-feedback').style.display = "block";
	document.getElementById('p01-contact1').style.display = "block";
	document.getElementById('phone-feedback').style.display = "none";

	frm = $("#aboutus");
	frmh = frm.height();
	frm.height(frmh + 100);

	setEqualHeight($("#horiz-block1 > div"));
}

