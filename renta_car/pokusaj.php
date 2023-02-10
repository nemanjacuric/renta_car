<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://smtpjs.com/v3/smtp.js"></script>  
	<script type="text/javascript">
		function sendEmail() {
			Email.send({
				Host: "smtp.gmail.com",
				Username : "ddukic998@gmail.com",
				Password : "iggv yxdl alfx hmyk",
				To : 'ddukic998@gmail.com',
				From : "ddukic998@gmail.com",
				Subject : "Duke",
				Body : "ker",
			})
			.then(function(message){
				alert("mail sent successfully")
			});
		}
	</script>
</head>
<body>  
	<form method="post">
		<input type="button" value="Send Email" onclick="sendEmail()"/>
	</form>  
</body>
</html>