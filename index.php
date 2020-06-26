<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="finals.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="header">
		<h4><center>For any general inquiries, please fill in the following contact form:</center></h4>
	</div>
	<form name="contact_form" method="POST" action="execution.php">
	<div class="row">
		<div class="main_data_form">
			<div class="col-1 col-s-1">
				<label for="name" id="lab">Name*</label><br>
				<input class="form_input" type="text" name="Name" required><br><br>
				<label for="email" id="lab">Email*</label><br>
				<input class="form_input" type="text" name="Email" required><br><br>
				<label for="subject" id="lab">Subject*</label><br>
				<input class="form_input" type="text" name="subject" required><br>
			</div>
			<div class="col-2 col-s-2">
				<label for="message" id="lab">Message*</label><br>
				<textarea class="form_input messg_area" name="message" required></textarea><br>
			</div>
		</div>
	</div>	
		<div class="footer">
			<input type="submit" name="Submit" value="Send">
		</div>
	</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="validation.js"></script>
</html>