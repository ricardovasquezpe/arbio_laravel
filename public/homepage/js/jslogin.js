function login(){
	$("#error_message").html(null);
	username = $("#username").val();
	password = $("#password").val();

	$.ajax({
		data : {
			_token   : $('meta[name="csrf-token"]').attr('content'),
			username : username,
			password : password,
		},
		url : 'login/loginMethod',
		async : true,
		type : 'POST'
	}).done(
	function(data) {
		data = JSON.parse(data);
		if(data.status == true){
			window.location.href = data.url;
		}else{
			$("#error_message").html(data.msj);
		}
	});
}