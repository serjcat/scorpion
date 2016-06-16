<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scorpion Computer Services | Contact Us</title>
	
	<?php include 'includes/head-includes.php'; ?>

<body class="other">

<?php include 'includes/header.php' ?>

<main class="cd-main-content">
	<section id="content">
		<div class="hero">
			<div class="container header text-center">
				<h2>Contact Us</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-lg-push-4">
				<form id="join-form" method="post" action="contact_form.php">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="firstName">First Name</label>
								<input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="email">Email Address</label>
								<input name="email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="phone">Phone Number</label>
								<input name="phone" type="text" class="form-control" id="phoneNum" placeholder="Phone Number">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="additionalInfo">Additional Information</label>
								<textarea name="message" type="text" class="form-control" id="message" placeholder="Enter Additional Information"></textarea>
							</div>
						</div>
					</div>
				  	<div class="form-group text-center">
				  		<button id="send" type="submit" class="btn btn-primary">Send</button>
				  	</div>
				</form>
			</div>
		</div>
	</section>
	<section class="alt">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 text-center">
					<strong>Los Angeles Office</strong><br>
					Email: <a href="usa@scorpioncomputerservices.com">Scorpion USA</a>
				</div>
				<div class="col-lg-4 text-center">
					<strong>Ireland Office</strong><br>
					Email: <a href="euro@scorpioncomputerservices.com">Scorpion Europe</a>
				</div>
				<div class="col-lg-4 text-center">
					<strong>Tokyo Office</strong><br>
	 				Email: <a href="japan@scorpioncomputerservices.com">Scorpion Japan</a>
	 			</div>
	 		</div><br>
	 		<div class="col-lg-12">
	 			<p class="text-center">
	 				Email: <a href="inquiry@scorpioncomputerservices.com">Scorpion Inquiry</a><br>Phone: (818) 237-9085
	 			</p>
			</div>
	 	</div>
	</section>
</main>


<?php include 'includes/footer.php' ?>


<script type="text/javascript">
	$('form').each(function() {
		$(this).validate({ // initialize the plugin
		    rules: {
		    	name: {
		    		required: true
		    	},
		        firstName: {
		            required: true
		        },
		        lastName: {
		            required: true
		        },
		        email: {
		        	required: true,
		        	myEmail: true
		        },
		        phone: {
		        	required: true,
					phoneUS: true
		        }
		    }
		});
	});
</script>

</body>
</html>
