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
		console.log(data);
		if(data.pass == true){
			//redirect();
		}else{
			//error
		}
	});
}