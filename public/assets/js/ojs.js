// ojs.js

// Counter character in control
function countChar(val, max, min, colorok, colorerror, divname) {
	var len = val.value.length;
	if (len > max) {
		// val.value = val.value.substring(0, 10);
		$('#' + divname).text('Bạn đã nhập quá số ký tự cho phép').css({'color' : colorerror});
	} else if(len < min) {
		$('#' + divname).text('Số ký tự không thể ít hơn ' + min + ' ký tự').css({'color' : colorerror});
	} else {
		$('#' + divname).text('Số ký tự có thể nhập thêm: ' + (max - len) + ' ký tự').css({'color' : colorok});
	}
}
