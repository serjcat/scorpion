<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Walter O'Brien, Scorpion, Scorpion, CBS, Drama, ConciergeUp" />
	<meta name="description" content="Think Tank for Hire">
	<title>Scorpion</title>
	<?php include 'includes/head-includes.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>
<main class="cd-main-content">
	<section class="cd-hero">
		<ul class="cd-hero-slider autoplay">
			<li class="cd-bg-video selected">
				<div class="cd-full-width">
					<h2>You've Come to the Right Place.</h2>
					<p>We are the real company behind the Scorpion portrayed in the CBS television show, <em>&lt;/Scorpion&gt;</em>. In real life, we solve any funded need.</p>
					<a href="#intake-form" class="cd-btn">Contact Us</a>
				</div> <!-- .cd-full-width -->
				<div class="cd-bg-video-wrapper" data-video="./videos/scorpion">
				<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
			<li>
				<div class="cd-full-width">
					<h2>About Walter O'Brien</h2>
					<p>Walter O'Brien (hacker name: "Scorpion") was designated a child prodigy after scoring 197 on an IQ test at age nine.</p>
					<a href="#intake-form" class="cd-btn">Contact Us</a>
				</div>
			</li>
			<li>
				<div class="cd-full-width">
					<h2>Introducing ScenGen</h2>
					<p>ScenGen is a Scenario Generator and one of Scorpion's latest and most profound artificial intelligence inventions.</p>
					<a href="#intake-form" class="cd-btn">Contact Us</a>
				</div> <!-- .cd-half-width -->
				
			</li>
			<li>
				<div class="cd-full-width">
					<h2><img src="./images/conciergeup.png" alt="Concierge Up" width="400" /></h2>
					<p>ConciergeUp.com is powered by Scorpion, a 25 year old highly organized think tank of high end professionals, scientists and project managers with an extraordinary track record of accomplishments, references, video testimonials, government certifications and national award credentials.</p>
					<a href="#intake-form" class="cd-btn">Contact Us</a>
				</div> <!-- .cd-full-width -->
			</li>
		</ul> <!-- .cd-hero-slider -->
		<ul class="cd-slider-navigation cd-slider-arrows-block-js">
			<li><a href="#0" class="cd-next cd-next-js">Next</a></li>
			<li><a href="#0" class="cd-prev cd-prev-js">Prev</a></li>
		</ul> <!-- cd-slider-navigation -->
		<ol class="cd-slider-nav cd-slider-controls cd-slider-dots-block-js">
			<li class="selected"><a href="#0"><em>Item 1</em></a></li>
			<li><a href="#0"><em>Item 2</em></a></li>
			<li><a href="#0"><em>Item 3</em></a></li>
			<li><a href="#0"><em>Item 4</em></a></li>
			<!-- other list items here -->
		</ol> <!-- .cd-slider-controls -->
	</section> <!-- .cd-hero -->
	<section id="content" class="about alt">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 text-justify robot-text">
					<h1>About the Real Scorpion</h1>
					<p>Scorpion is a Business Solution Provider utilizing a specialist rather than generalist approach. During our 20+ years experience, we have gathered together a team of World Class Experts. These high caliber individuals have decades of experience working together to deliver robust, high quality solutions.</p>
					<p>Our specialists are experienced in maintaining long term focus while delivering tactical short term solutions to dramatically lower your total cost of ownership (TCO) for the lifetime of your systems. Our core competencies include due diligence, architecture, process, quality assurance and regulatory compliance systems to solve hard IT problems. We have earned the trust of our clients who retain us for years as their strategic partner and trusted adviser in an IT General Counsel role.</p>
				</div>
				<div class="robot-about">
					<img src="./images/robot-about.jpg" width="600" alt="About Scorpion" />
				</div>
			</div>
		</div>
	</section>
	<section id="intake-form">
		<div class="container-flex">
			<div class="child examples-fund">
				<div class="child-content">
					<h2>Examples of Funded Needs:</h2>
					<div class="owl-carousel">
						<div>Assess your risk of data loss or cyber security issues</div>
						<div>Get help buying or starting a new business</div>
						<div>Modernize your business processes to increase profits</div>
						<div>Research a medical issue, missing family member or your business's</div>
						<div>Invent, patent and sell a new product idea you've had</div>
					</div>
				</div>
			</div>
			<div class="form-area child">
				<div class="child-content">
					<div class="row">
						<h3>We Can Help with any Funded Need, Wish or Problem</h3>
						<p>There is a lot of information and links here about our press, testimonials and history.  Before your explore, please share with us your interests.  There's no obligation...</p>
					</div>
					<div class="row">
						<form id="home-form" method="post" action="intake-form.php">
							<div class="form-group">
								<label for="needs">Please share with us your need</label>
								<textarea id="message" name="message" class="form-control form-move" rows="3" placeholder="Tell us your need..." required></textarea>
							</div>
							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" type="text" class="form-control form-move" name="name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<input id="email" type="email" class="form-control form-move" name="email" placeholder="Email">
							</div>
			
							<p class='text-center'>Please do not submit propietary or confidential information.</p>
						  	<div class="form-group text-center">
						  		<button type="submit" class="btn btn-default">Send</button>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="as-seen-on">
		<div class="container header text-center">
			<h2>Press Coverage</h2>
		</div>
		<div class="press">
			<div class="row">
				<div class="col-sm-3 text-center logo">
					<a href="./press-toc"><img src="./images/logos/inquistir.png" width="150" alt="Inquistir" /></a>
				</div>
				<div class="col-sm-3 text-center logo">
					<a href="./press-toc"><img src="./images/logos/entrepreneur.png" width="150" alt="Entrepreneur" /></a>
				</div>
				<div class="col-sm-3 text-center logo">
					<a href="./press-toc"><img src="./images/logos/cnbc.png" width="100" alt="CNBC" /></a>
				</div>
				<div class="col-sm-3 text-center logo">
					<a href="./press-toc"><img src="./images/logos/houston-chronicle.png"  width="150" alt="Houston Chronicle" /></a>
				</div>
			</div>
		</div>
	</section>
	<section id="benefits">
		<div class="container-flex">
			<div class="image child">
				<div class="child-content">
					<img src="./images/futuristic-hand.jpg" width="100%" alt="Scorpion" />
				</div>
			</div>
			<div class="benefits-list child">
				<div class="child-content">
					<h2>Customer Results</h2>
					<ul>
						<li>We saved $43 billion in opportunity risks over a five-year period.</li>
						<li>We achieved a 6000% increase in transaction processing speed.</li>
						<li>We invented an efficiency engine that performs 250 human years of work every 1.5 hrs with over 99% improvement over human error.</li>
						<li>We drove compliance risk to zero and passed SAS70 audits 100%.</li>
						<li>We achieved savings of $52 million per year through automation frameworks.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="testimonials" class="testimonials no-padding"> 
		<div class="container">
			<div class="header text-center">
				<h2>Testimonial Highlights</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#myModal">
	  					<img class="img-vid" src="./images/testimonials/testimonial-1.jpg" alt="Testimonial" height="100%" width="100%" />
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#testi2">
	  					<img class="img-vid" src="./images/testimonials/testimonial-2.jpg" alt="Testimonial" height="100%" width="100%" />
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#testi3">
	  					<img class="img-vid" src="./images/testimonials/testimonial-3.jpg" alt="Testimonial" height="100%" width="100%" />
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#testi4">
	  					<img class="img-vid" src="./images/testimonials/testimonial-4.jpg" alt="Testimonial" height="100%" width="100%" />
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#testi5">
	  					<img class="img-vid" src="./images/testimonials/testimonial-5.jpg" alt="Walter O'Brien Testimonial - CEO of Software Platform" height="100%" width="100%" />
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#testi6">
	  					<img class="img-vid" src="./images/testimonials/testimonial-6.jpg" alt="Testimonial" height="100%" width="100%" alt="Co-Founder of Online Retailer" />
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#testi7">
	  					<img class="img-vid" src="./images/testimonials/testimonial-7.jpg" alt="Testimonial - CTO of National Brokerage" height="100%" width="100%" />
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="testi">
					<a href="#" data-toggle="modal" data-target="#testi8">
	  					<img class="img-vid" src="./images/testimonials/testimonial-8.jpg" alt="Testimonial" height="100%" width="100%" />
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="what-we-do">
		<div class="container header text-center">
			<h2>What We Do</h2>
			<p>Scorpion serves clients with needs in information-technology design and architecture, cyber security and general strategic problem-solving.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 item">
				<div class="inner-item">
					<span class="icon"><i class="fa fa-line-chart"></i></span>
					<h3>Emerging</h3>
					<p>Solutions targeting startups, companies switching direction or entering new territory investors assessing investment opportunities.</p>
					<a href="./whatwedo" class="btn btn-secondary btn-small">Learn More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 item">
				<div class="inner-item">
					<span class="icon"><i class="fa fa-fighter-jet"></i></span>
					<h3>Tactical</h3>
					<p>Rapid solutions to immediate challenges within your company. “Deep Dive” root cause analysis, defect identification and resolution using proprietary tools and solutions.</p>
					<a href="./whatwedo" class="btn btn-secondary btn-small">Learn More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 item">
				<div class="inner-item">
					<span class="icon"><i class="fa fa-crosshairs"></i></span>
					<h3>Strategic</h3>
					<p>System Architecture & Design. Longer term solutions ensuring critical decisions start your major initiatives on the right track. Key hire selection.</p>
					<a href="./whatwedo" class="btn btn-secondary btn-small">Learn More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 item">
				<div class="inner-item">
					<span class="icon"><i class="fa fa-calendar-check-o"></i></span>
					<h3>Process & Management</h3>
					<p>The practical application of Quality and Processes disciplines that deliver permanent improvements to the maturity level of your organization.</p>
					<a href="./whatwedo" class="btn btn-secondary btn-small">Learn More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 item">
				<div class="inner-item">
					<span class="icon"><i class="fa fa-balance-scale"></i></span>
					<h3>Quality & Risk</h3>
					<p>Rapid problem resolution & stabilization for systems & operations projects turnaround. QA test automation techniques that save over 80% in cost and time.</p>
					<a href="./whatwedo" class="btn btn-secondary btn-small">Learn More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 item">
				<div class="inner-item">
					<span class="icon"><i class="fa fa-pencil-square-o"></i></span>
					<h3>Implementation</h3>
					<p>Project execution and ongoing support solutions for your initiatives. Customized, hands on training to ensure successful knowledge transfer to in-house staff.</p>
					<a href="./whatwedo" class="btn btn-secondary btn-small">Learn More</a>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- Modal -->
<div class="modal fade" id="sendForm" tabindex="-1" role="dialog" 
     aria-labelledby="something" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Additional Information
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="alert alert-success" role="alert">Your message has been sent.</div>
                <form id="popup-form" role="form" action="intake-form.php">
				<!-- This fields are taken from intake form but hidden -->
				<input id="nameHidden" type="hidden" class="form-control" name="name">
				<input id="emailHidden" type="hidden" class="form-control" name="email">
				<textarea type="hidden" id="messageHidden" name="message" class="form-control" style="display: none"></textarea>

                  <div class="form-group">
                  	<div id="fundedContainer">
	                    <label><input id="fundedNeed" type="radio" name="additionalInfo" value="I have a funded need, wish or problem"> I have a funded need, wish or problem</label>
	                    <div class="inline-form">
	                    	<label><input id="fundedDefault" class="fundedOption" type="radio" name="fundedOption" value="$5k - $100k"> $5k - $100k</label>
	                    	<label><input class="fundedOption" type="radio" name="fundedOption" value="$101k - $500k"> $101k - $500k</label>
	                    	<label><input class="fundedOption" type="radio" name="fundedOption" value="More than $500k"> More than $500k</label>
	                    </div>
	                </div>
	                <div id="otherOptions">
						<label><input id="unfunded" type="radio" name="additionalInfo" value="I have an unfunded need wish or problem"> I have an unfunded need wish or problem</label>
						<label><input id="workScorpion" type="radio" name="additionalInfo" value="I want to work for Scorpion"> I want to work for Scorpion</label>
						<label><input id="walterSpeaker" type="radio" name="additionalInfo" value="I want Walter as a speaker for my company, school or conference"> I want Walter as a speaker for my company, school or conference</label>
					</div>
                  </div>
				  <div class="form-group">
					  <label for="phone">Phone:</label>
					  <input type="text" class="form-control" id="phone" name="phone">
				  </div>
                  <p class="text-center">
                  	<button type="submit" class="btn btn-primary">Submit</button>
                  </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="3FNruJh-M40"></div>
		</div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="testi8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="V67YqbZfUjk"></div>
		</div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="testi7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="vd35wTHCNe0"></div>
		</div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="testi6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="CKplPiyJfWk"></div>
		</div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="testi5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="300BFZRlf4E"></div>
		</div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="testi3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="ssR0HIa4EBA"></div>
		</div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="testi4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="SDsPhQcsvzc"></div>
		</div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="testi2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="youtube-container">
   			<div class="youtube-player" data-id="rbghPqoCw4g"></div>
		</div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>

<!-- Slider -->
<script type='text/javascript' src='./js/slider/main.min.js'></script>
<!-- Owl Carousel -->
<script src="./js/owl.carousel.min.js"></script>
<script type='text/javascript'>
//Examples of Funded	
$(function(){ 
	$(".owl-carousel").owlCarousel({
		autoplay: true,
		items: 1,
		loop: true
	});
});
</script>
</body>
</html>
