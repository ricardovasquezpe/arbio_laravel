$(document).ready(function(){
    $('#view-video').click(function(){
		 $(this).hide();
		 $('video')[0].setAttribute("controls","controls") 
    });
});
var $win = $(window);
$win.scroll(function() {
	if ($win.scrollTop() == 0) {

		if (!$(".navbar-collapse").hasClass("in")) {
			$("nav").removeClass("navbarcolor");
		}
	} else {
		$("nav").addClass("navbarcolor");
	}
});

$('a[href^="#"]').click(function(e) {
	var target = $(this).attr('href');
	var strip = target.slice(1);
	var anchor = $("section[id='" + strip + "']");

	e.preventDefault();

	y = (anchor.offset() || {
		"top" : NaN
	}).top;

	$('html, body').animate({
		scrollTop : (y - 60)
	}, 'slow');
});

$(window).on('load', function () {
	resizeSection();
});

$(document).ready(function () {
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
	resizeSection();
});

$(window).resize(function () {
	resizeSection();
});

function resizeSection() {
    var top = $( window ).height();
	$(".section-home").css('height', top);
}

function register(){
	$("#register_error_message").html(null);
	firstname = $("#first_name_reg").val();
	lastname  = $("#last_name_reg").val();
	email     = $("#email_reg").val();

	$.ajax({
		data : {
			_token    : $('meta[name="csrf-token"]').attr('content'),
			firstname : firstname,
			lastname  : lastname,
			email     : email
		},
		url : 'home/registerMethod',
		async : true,
		type : 'POST'
	}).done(
	function(data) {
		data = JSON.parse(data);
		if(data.status == true){
			$("#first_name_reg").val(null);
			$("#last_name_reg").val(null);
			$("#email_reg").val(null);
		}else{
			$("#register_error_message").html(data.msj);
		}
	});
}

function call_me_back(from){
	fullname = null;
	company  = null;
	phone    = null;
	if(from == 1){ //SECTION
		$("#schedule_section_error_message").html(null);
		fullname = $("#fullname_schedule_section").val();
		company  = $("#company_schedule_section").val();
		phone    = $("#phone_schedule_section").val();
	}else{ //MODAL
		$("#schedule_modal_error_message").html(null);
		fullname = $("#fullname_schedule_modal").val();
		company  = $("#company_schedule_modal").val();
		phone    = $("#phone_schedule_modal").val();
	}
	
	$.ajax({
		data : {
			_token    : $('meta[name="csrf-token"]').attr('content'),
			fullname : fullname,
			company  : company,
			phone    : phone,
			type     : from
		},
		url : 'home/callMeBackMethod',
		async : true,
		type : 'POST'
	}).done(
	function(data) {
		data = JSON.parse(data);
		if(data.status == true){
			if(from == 1){ //SECTION
				$("#fullname_schedule_section").val(null);
				$("#company_schedule_section").val(null);
				$("#phone_schedule_section").val(null);
			}else{ //MODAL
				$("#fullname_schedule_modal").val(null);
				$("#company_schedule_modal").val(null);
				$("#phone_schedule_modal").val(null);
			}
		}else{
			if(from == 1){ //SECTION
				$("#schedule_section_error_message").html(data.msj);
			}else{ //MODAL
				$("#schedule_modal_error_message").html(data.msj);
			}
		}
	});
}

function contact_us(){
	$("#contact_error_message").html(null);
	fullname = $("#fullname_contact").val();
	company  = $("#company_contact").val();
	phone    = $("#phone_contact").val();
	message  = $("#message_contact").val();

	$.ajax({
		data : {
			_token   : $('meta[name="csrf-token"]').attr('content'),
			fullname : fullname,
			company  : company,
			phone    : phone,
			message  : message
		},
		url : 'home/contactUsMethod',
		async : true,
		type : 'POST'
	}).done(
	function(data) {
		data = JSON.parse(data);
		if(data.status == true){
			$("#fullname_contact").val(null);
			$("#company_contact").val(null);
			$("#phone_contact").val(null);
			$("#message_contact").val(null);
		}else{
			$("#contact_error_message").html(data.msj);
		}
	});
}

function go_to_pricing(pricing){
	$.ajax({
		data : {
			_token  : $('meta[name="csrf-token"]').attr('content'),
			pricing : pricing
		},
		url : 'home/goToPricingPage',
		async : true,
		type : 'POST'
	}).done(
	function(data) {
		data = JSON.parse(data);
		if(data.status == true){
			window.location.href = data.url;
		}
	});
}