$(window).load(function(){
$('#searchicon').click(function(){
	$('#searchicon').fadeOut('slow');
	$('#loginicon').fadeOut('slow', function(){
		$('#searchform').fadeIn('slow');
	});
});
$('#loginicon').click(function(){
	$('#searchicon').fadeOut('slow');
	$('#loginicon').fadeOut('slow');
});



/*$(function(){
  $('#loginform_btn').hide().fadeIn('fast');
  $('#dashboardbtn').hide().fadeIn('fast');
  $('#signoutbtn').hide().fadeIn('fast');
});
$('#loginform_btn').click(function (e) {
    $('#loginform_btn').fadeOut('fast', function () {
        $('#loginform').fadeIn('fast');
    });
});

$('#signoutbtn').click(function (e) {
    $('#signoutbtn, #dashboardbtn').fadeOut('fast');
});
$('#dashboardbtn').click(function (e) {
    $('#signoutbtn, #dashboardbtn').fadeOut('fast');
});

document.getElementById('loginform_submit').onclick = function() {
        document.getElementById('loginform_form').submit();
    };
    
$("#field").keyup(function() {
		$("#x").fadeIn();
		if ($.trim($("#field").val()) == "") {
			$("#x").fadeOut();
		}
	});
	// on click of "X", delete input field value and hide "X"
	$("#x").click(function() {
		$("#field").val("");
		$(this).hide();
	});*/
});