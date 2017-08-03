function login(){
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
			console.log("entro: ");
		}else{
			console.log("NO entro" + data.msj);
		}
	});
}