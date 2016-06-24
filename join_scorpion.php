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
				<form id="joinForm" method="post" action="join_scorpion_form.php">
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
								<input name="phone" class="form-control" id="phone" placeholder="Phone Number">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">Add Resume</label>
								<input id="resume" name="resume" type="file" class="file">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="location">Location</label>
								<input name="location" type="text" class="form-control" id="location" placeholder="Location">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="expertise">Top 5 Expertise Areas</label>
								<input name="expertise" type="text" class="form-control" id="expertise" placeholder="1."><br>
								<input name="expertise" type="text" class="form-control" id="expertise" placeholder="2."><br>
								<input name="expertise" type="text" class="form-control" id="expertise" placeholder="3."><br>
								<input name="expertise" type="text" class="form-control" id="expertise" placeholder="4."><br>
								<input name="expertise" type="text" class="form-control" id="expertise" placeholder="5.">
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
		        }
		    }
		});
	});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=firstName]').val(); 
		var user_lname  	= $('input[name=lastName]').val();
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
		var user_location  	= $('input[name=location]').val();
		var user_exp1		= $('input[name=exp1]').val();
		var user_exp2		= $('input[name=exp2]').val();
		var user_exp3		= $('input[name=exp3]').val();
		var user_exp4		= $('input[name=exp4]').val();
		var user_exp5		= $('input[name=exp5]').val();
		var user_ptime		= $('input[name=ptime]').val();
		var user_ftime		= $('input[name=ftime]').val();
		var user_hours		= $('input[name=hours]').val();
		var attach_file     = $('input[name=file_attach]')[0].files[0];
        var user_message    = $('textarea[name=message]').val();

        //everything looks good! proceed...
        if(proceed) 
        {
			$(".loading-img").show(); //show loading image
			$(".submit_btn").hide(); //hide submit button
			//data to be sent to server			
			var post_data = new FormData();    
			post_data.append( 'userName', user_name );
			post_data.append( 'userLName', user_lname );
			post_data.append( 'userEmail', user_email );
			post_data.append( 'userPhone', user_phone );
			post_data.append( 'userLocation', user_location );
			post_data.append( 'userExp1', user_exp1 );
			post_data.append( 'userExp2', user_exp2 );
			post_data.append( 'userExp3', user_exp3 );
			post_data.append( 'userExp4', user_exp4 );
			post_data.append( 'userExp5', user_exp5 );
			post_data.append( 'userPTime', user_ptime );
			post_data.append( 'userFTime', user_ftime );
			post_data.append( 'userHours', user_hours );
			post_data.append( 'userMessage',user_message);
			post_data.append( 'file_attach', attach_file );
			//instead of $.post() we are using $.ajax()
			//that's because $.ajax() has more options and can be used more flexibly.
			$.ajax({
			  url: 'join_scorpion_form.php',
			  data: post_data,
			  processData: false,
			  contentType: false,
			  type: 'POST',
			  dataType:'json',
			  success: function(data){
					//load json data from server and output message     
					if(data.type == 'error')
					{
						output = '<div class="error">'+data.text+'</div>';
					}else{
						output = '<div class="success">'+data.text+'</div>';
						//reset values in all input fields
						$('#contact_form input').val(''); 
						$('#contact_form textarea').val(''); 
					}
					$("#result").hide().html(output).slideDown(); //show results from server
					$(".loading-img").hide(); //hide loading image
					$(".submit_btn").show(); //show submit button
			  }
			});
					$("#result").hide().html(output).slideDown(); //show results from server
					$(".loading-img").hide(); //hide loading image
					$(".submit_btn").show(); //show submit button
        }
    });
});
</script>

</body>
</html>
