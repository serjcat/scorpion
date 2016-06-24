<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scorpion Computer Services | Join Scorpion</title>
	<?php include 'includes/head-includes.php'; ?>
</head>
<body class="other">
<?php include 'includes/header.php'; ?>
<main class="cd-main-content">
	<section id="content">
		<div class="hero">
			<div class="container header text-center">
				<h2>Join Scorpion</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-lg-push-4">
				<form id="joinForm" method="post" action="join_scorpion_form.php" enctype="multipart/form-data">
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
						<div class="col-sm-12">
							<div class="form-group">
								<label for="email">Email Address</label>
								<input name="email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="phone">Phone Number</label>
								<input name="phone" class="form-control" id="phone2" placeholder="Phone Number">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="location">Location</label>
								<input name="location" type="text" class="form-control" id="location" placeholder="Location">
							</div>
	
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="control-label">Add Resume</label>
								<input id="resume" name="resume" type="file" class="file">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="expertise">Top 5 Expertise Areas</label>
								<input name="expertise1" type="text" class="form-control" id="expertise" placeholder="1."><br>
								<input name="expertise2" type="text" class="form-control" id="expertise" placeholder="2."><br>
								<input name="expertise3" type="text" class="form-control" id="expertise" placeholder="3."><br>
								<input name="expertise4" type="text" class="form-control" id="expertise" placeholder="4."><br>
								<input name="expertise5" type="text" class="form-control" id="expertise" placeholder="5.">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="partTime"><small>Part Time Hourly Rate</small></label>
								<input name="partTime" type="text" class="form-control" id="partTime" placeholder="Your Hourly Rate">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="fullTime"><small>Full Time Hourly Rate</small></label>
								<input name="fullTime" type="text" class="form-control" id="partTime" placeholder="Your Full Time Rate">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="totalWeekly"><small>Total Weekly Hours</small></label>
								<input name="totalWeekly" type="text" class="form-control" id="totalWeekly" placeholder="Weekly Hours Available">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="additionalInfo">Additional Information</label>
								<textarea name="additionalInfo" type="text" class="form-control" id="additionalInfo" placeholder="Enter Additional Information"></textarea>
							</div>
						</div>
					</div>
				  	<div class="form-group text-center">
				  		<button type="submit" class="btn btn-primary">Send</button>
				  	</div>
				</form>
			</div>
		</div>
	</section>
</main>

<div id="form-messages"></div>

<?php include 'includes/footer.php'; ?> 

<script type="text/javascript">
	$('form').each(function() {
		$(this).validate({ // initialize the plugin
		    rules: {
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
		        },
		        message: {
		        	required: true
		        },
		        resume: {
		        	required: true
		        },
		        location: {
		        	required: true
		        },
		        expertise1: {
		        	required: true
		        },
		        expertise2: {
		        	required: true
		        }
		    }
		});
	});
</script>

</body>
</html>
