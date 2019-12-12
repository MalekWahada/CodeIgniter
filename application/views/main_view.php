<html>
<head>
	<title>OneTool</title>
	<!-- Bootstrap JS, CSS, Jquery-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


	<!-- google recaptcha-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript">
		var onloadCallback = function() {
			grecaptcha.render('html_element', {
				'sitekey' : '6LdqcccUAAAAAN953Qr1I5PxU2ulWz2jVyK5oyNG'
			});
		};
	</script>


</head>
<body>
<div class="container col-md-4 col-md-offset-4">
	<br /><br /><br />
	<h3 align="center">OneTool</h3><br />
	<form method="post" action="<?php echo base_url();?>Main/form_validation">


				<div class="form-group">
					<label>Enter UserName</label>
					<input type="text" name="username" class="form-control" placeholder="e.g: root" />
					<span class="text-danger"><?php echo form_error("username")?></span>
				</div>
				<div class="form-group">
					<label>Enter Email</label>
					<input type="email" id="email" name="email" class="form-control" placeholder="e.g: root@gmail.com"/>
					<span class="text-danger"><?php echo form_error("email")?></span>
				</div>
		<div class="g-recaptcha" data-sitekey="6LdqcccUAAAAAN953Qr1I5PxU2ulWz2jVyK5oyNG"></div>
		<br/>
				<div class="form-group">
					<input type="hidden" name="hidden_id" />
					<input type="submit" id="register" name="register" value="register" class="btn btn-info"/>
				</div>

	</form>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
			async defer>
	</script>

	<!-- Email Verification -->
	<script>


		var typingTimer;                //timer identifier
		var doneTypingInterval = 5000;  //time in ms, 5 second for example
		var $input = $('#email');

		//on keyup, start the countdown
		$input.on('keyup', function () {
			clearTimeout(typingTimer);
			typingTimer = setTimeout(mailVerif, doneTypingInterval);
		});

		//on keydown, clear the countdown
		$input.on('keydown', function () {
			clearTimeout(typingTimer);
		});

		function mailVerif() {
			var mailAdd = document.getElementById("email");
			var API_Public_Key = "public_WXA5VGtUTXAvY2FoSVhjaWpzZEtWdz09";
			var settings = {
				"async": true,
				"crossDomain": true,
				"url": "https://api.debounce.io/v1/?api="+API_Public_Key+"&email="+mailAdd+"&photo=",
				"method": "GET",
				"headers": {}
			}

			$.ajax(settings).done(function (response) {
				console.log(response);
			});
			//console.log(mailAdd.value);
		}
	</script>

</div>
</body>
</html>
