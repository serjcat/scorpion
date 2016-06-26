//targets each tag form
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
	        	phoneRule: true,
	        	minlength: 8
	        },
	        additionalInfo: {
	        	required: true
	        },
	        resume: {
	        	required: true,
	        	accept: "application/pdf, application/msword, text/plain"
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
	    },
	    messages: {
	    	resume: {
	    		accept: "Please attach a valid format. PDF & .DOC are the only accepted formats."
	    	}
	    }
	});
});
// create your custom rule
jQuery.validator.addMethod("myEmail", function(value, element) {
    return this.optional( element ) || ( /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}$/i.test( value ) && /^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/.test( value ) );
}, 'Please enter valid email address.');

jQuery.validator.addMethod('phoneRule', function(value) { return (value.match(/^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}(\s*(ext|x)\s*\.?:?\s*([0-9]+))?$/)); }, 'Please enter a valid phone number (Intl format accepted + ext: or x:)');

// start document ready
$(function(){ 

//Smooth scroll on click
$('a[href*="#"]:not([href="#"])').click(function() {
	if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
			return false;
		}
	}
});
 
//Tabs
$('#sideTabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
	
// cd hero slider arrow fix
$('.cd-slider-arrows-block-js .cd-next-js').on('click', function(e){
	e.preventDefault();
	var $dot_selected = $('.cd-slider-dots-block-js li.selected');
	if( $dot_selected.is(':last-child') ){
		$('.cd-slider-dots-block-js li:first-child a').click();
	}
	else{
		$dot_selected.removeClass('selected').next().click();
	}
});

$('.cd-slider-arrows-block-js .cd-prev-js').on('click', function(e){
	e.preventDefault();
	var $dot_selected = $('.cd-slider-dots-block-js li.selected');
	if( $dot_selected.is(':first-child') ){
		$('.cd-slider-dots-block-js li:last-child a').click();
	}
	else{
		$dot_selected.removeClass('selected').prev().click();
	}
});

// menu side close when click elsewhere
$('.menu-side-js, .menu-button-js').on('click', function(e){
	e.stopPropagation();
});

$('html').on('click', function(){
	if( $('body').hasClass('show-menu') ){
		$('.menu-side-js .close-button-js').click();
	}
});

// news line visiblity
function news_line_visibility(){
	var block_offset = $('#as-seen-on').offset().top;
	var scroll_top = $(window).scrollTop();
	var window_inner_height = window.innerHeight;
	var news_line_height = $('.ticker').height();
	if( block_offset + news_line_height <= scroll_top + window_inner_height ){
		$('.ticker').addClass('show');
	}
	else{
		$('.ticker').removeClass('show');
	}
}

news_line_visibility();

$(window).bind('scroll resize', function(){
	news_line_visibility();
});
// navbar visiblity
function navbar_visibility(){
	var block_offset = $('#intake-form').offset().top;
	var scroll_top = $(window).scrollTop();
	var window_inner_height = window.innerHeight;
	var news_line_height = $('.navbar').height();
	if( block_offset + news_line_height <= scroll_top + window_inner_height ){
		$('header').addClass('is-fixed');
	}
	else{
		$('header').removeClass('is-fixed');
	}
}

navbar_visibility();

$(window).bind('scroll resize', function(){
	navbar_visibility();
});

function formAjax() {
	// Get the form.
	var form = $('#home-form');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
 
		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function() {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			//$(formMessages).text(response);

			if( form.valid() ) {
				// Pop-up Second Form
				$("#sendForm").modal();

			}

			//set values into variables
			var name = $('#name').val();
			var email = $('#email').val();
			var messHid = $('#message').val();
			$("#nameHidden").attr("value", name);
			$("#emailHidden").attr("value", email);
			$("#messageHidden").attr("value", messHid);
			
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}

		});
	});
}

formAjax();

$('#fundedContainer').change(function () {
    $("#fundedNeed").prop("checked", true);
});
$('#fundedNeed').change(function () {
	$("#fundedDefault").prop("checked", true);
});

$('#otherOptions').change(function () {
	$(".fundedOption").prop("checked", false);
});


}); // end document ready

//
// The Automatic Ticker
//
$('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 25000,
    //gap in pixels between the tickers
    gap: 100,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 500,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true,
    pauseOnHover: true
});

//
// Scroll / Fixed Header
//
function headerScroll() {
	if ($(this).scrollTop() > 50){  
		$('header').addClass("is-fixed");
	} 
	else{
   		$('header').removeClass("is-fixed");
	}
}
$(window).scroll(headerScroll);

//
// Load YouTube iFrame ONLY if clicked on
//
function labnolThumb(id) {
    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
} 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}
(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();