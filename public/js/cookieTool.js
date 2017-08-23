$(document).ready(function() {

	if(getCookieValue('contrato') == undefined)	{
		setCookie('contrato','true');
	}

	if(getCookieValue('contrato') == "true") {
		$('#top-bar-wrap').attr('hidden','hidden');
	}

});


function hideTopBar() {
	setCookie('contrato','true');
	$('#top-bar-wrap').attr('hidden','hidden');
}

function getCookieValue(key) 
{
	var cokies = document.cookie.split(';');
	var result;
	$.each(cokies, function(i,v) {
		var values = v.split('=');
		var k = values[0];
		var val = values[1];
		if (k == key) {
			result = val;
		}
	});
	return result;
}

function setCookie(key,value,expire)
{
	document.cookie = key+'='+value;
}

function eraseCookie(name) {
		 document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

