<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scorpion Computer Services | How We Work</title>
	<?php include 'includes/head-includes.php'; ?>
</head>
<body class="other">
<?php include 'includes/header.php'; ?>
<main class="cd-main-content">
	<section id="content">
		<div class="hero">
			<div class="container header text-center">
				<h2>How We Work</h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
				  <!-- Nav tabs -->
				  <ul id="sideTabs" class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active">
				    	<a href="#client" aria-controls="client" role="tab" data-toggle="tab">As a Client</a>
				    </li>
				    <li role="presentation">
				    	<a href="#startup" aria-controls="startup" role="tab" data-toggle="tab">As a Startup, needing incubation or funding</a>
				    </li>
				    <li role="presentation">
				    	<a href="#consultants" aria-controls="consultants" role="tab" data-toggle="tab">As a Consultant</a>
				    </li>
				    <li role="presentation"><a href="#ambassador" aria-controls="ambassador" role="tab" data-toggle="tab">As a Scorpion Ambassador</a></li>
				    <li role="presentation"><a href="#public" aria-controls="public" role="tab" data-toggle="tab">For Public Speaking Requests</a></li>
				    <li role="presentation"><a href="#expert" aria-controls="expert" role="tab" data-toggle="tab">For Expert Witness Services</a></li>
				  </ul>
				</div>
				<div class="col-lg-9 tab-content">
					<div role="tabpanel" class="tab-pane active" id="client">
						<h3>As a Client… Engaging Scorpion Computer Services</h3>
						<p>Our focus is in building a long term relationship with our Clients based on the value we bring and the respect that earns us the position of a Trusted Advisor.</p>
						<strong>What is our approach?</strong>
						<p>There are many ways we help firms beyond those listed in the "What we do" section. Talk to us and as we learn your business we will share possibilities, technologies and techniques that many of our clients previously were not aware of.</p>
						<p>We have many options on how you may wish to get to know us - here are some:</p>
						<strong>The Analysis</strong>
						<p>We can rapidly perform a 240-point inspection that uncovers and quantifies your current state. This analysis covers all aspects of software and the process supporting it. This will show you where you really stand right now.</p>
						<strong>The Lockdown</strong>
						<p>In less than a day we can enter a deep dive discussion with your best and brightest staff in order for us to understand the challenge and for your own people to assess whether we can add value or not.</p>
						<p>How do we engage the business and what is our billing model?</p>
						<p>We have found that each customer, their challenges and their potential differ. We are a flexible group and will simply do "what makes sense" for both parties.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="startup">
						<h3>As a Startup… Incubation, Tech Advisory Board, Board of Directors</h3> 
						<p>Key partners of Scorpion Computer Services have served as Chief Executive Officers, Members of the Tech Advisory Board and Members of the Board of Directors for various technology-driven businesses during incubation and emergent phases. This wealth of hands-on experience allows our partners to help guide companies skillfully through start-up and emergent phases, determining what business models, patentable technology, tools and techniques, and key personnel are required at various phases. We can also assess the effectiveness of web-site marketing, identifying key words that optimize hits.
						Do you have a great business concept or proposal AND you have the funding in place but need help with the execution?</p>
						<p><a href="./contactus.html">Submit Business Plan Here</a></p> 
						<p>Please note: We do not sign nondisclosure or confidentiality agreements in connection with submissions of business plans, proposals or resumes. You should only include information which you deem to be non-confidential. By submitting information to Scorpion Computer Services, you agree to the foregoing terms, and our terms of use. Our reputation depends on our professionalism and our ability to maintain the trust of those with whom we work. In appropriate circumstances, we will sign a reasonable non-disclosure agreement when we reach a point of mutual interest in moving forward.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="consultants" />
						<h3>As a Consultant… Our Portfolio of Affiliates</h3>
						<p>A network of supporting third party organizations and subject matter experts that extend the capability of the enterprise to cover multiple business scenarios. These key affiliates are reliable and proven business partners with specialized subject matter expertise and/or proven technologies.</p>
						<p>Do you have excellent technical skills and would like to be part of the SCS Team? If so, we’d like to receive your resume.</p> 
						<p><a href="./contactus.html">Submit Resume Here</a></p> 
					</div>
					<div role="tabpanel" class="tab-pane" id="ambassador">
						<h3>As a Scorpion Ambassador...</h3>
						<p>We pay finder’s fees for deals you find and refer to one of our companies or startups. Contact us if you are interested in learning how to earn commissions.</p> 
						<p><a href="./contactus.html">Become a Scorpion Ambassador!</a>
					</div>
					<div role="tabpanel" class="tab-pane" id="public">
						<h3>For Public Speaking Requests...</h3>
						<p>Scorpion Computer Services Experts are available on request to speak, answer questions and participate in panel discussions on any of our practice areas for corporate events or conferences.</p> 
						<p><a href="./contactus.html">Submit Request Here</a>
					</div>
					<div role="tabpanel" class="tab-pane" id="expert">
						<h3>For Expert Witness Services...</h3>
						<p>Scorpion Computer Services members have the ability to serve as expert witnesses regarding any of our practice areas. We can build a model to defend or explain the damages and risks of the case. We can explain to the court how these issues could have been reasonably mitigated or eliminated through effective due diligence, best practices, design, security and operational procedures. We can quantify the losses to the business for the case.</p> 
						<p><a href="./contactus.html">Submit Request Here</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include 'includes/footer.php'; ?>

<script type='text/javascript'>
function headerScroll() {
	if ($(this).scrollTop() > 50){  
		$('header').addClass("is-fixed");
	} 
	else{
   		$('header').removeClass("is-fixed");
	}
}

$(window).scroll(headerScroll);
</script>

</body>
</html>