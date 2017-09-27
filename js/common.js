$(function() {

	if(window.matchMedia('(min-width: 768px)').matches)
	{
		$('.sect-5 .title').matchHeight();
		$('.sect-5 ul').matchHeight();
	}


	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		navText: ['&#xf104;','&#xf105;'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			}
		}
	})

	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,

		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});

	$(".day").select2({
		dropdownCssClass: "sel-day"
	});

	$(".time").select2({
		dropdownCssClass: "sel-time"
	});


	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches
	var testNumber;

	$(".next").click(function(){
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//activate next step on progressbar using the index of next_fs
		testString = $(".test-top span").text();
		testNumber = parseInt(testString);
		if (testNumber == 51){
			$(".test-top").css('display', 'none')
		}
		else{
			testNumber ++;
			$(".test-top span").text(testNumber);
		}


		//show the next fieldset
		next_fs.show();
		current_fs.hide();

	});

	$(".previous").click(function(){

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//de-activate current step on progressbar
		testString = $(".test-top span").text();
		testNumber = parseInt(testString);
		testNumber --;
		$(".test-top span").text(testNumber);

		//show the previous fieldset
		previous_fs.show();
		current_fs.hide();
	});

	$(".submit").click(function(){
		return false;
	})

	var clock = $('.counter').FlipClock(4930,{
		countdown: true,
		language: 'russian'
	});


	$('.bt-form').click(function(){
		$('form .formname').val($(this).data("form"));
	})

	//E-mail Ajax Send
	$("#page-home form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "otpravka.php", //Change
			data: th.serialize()
		}).done(function() {
			$('form .button').css({display: "none"});
			$('.thanks').css({display: "block"});
			$.ajax({
				type: "POST",
				url: "send.php", //Change
				data: th.serialize()
			});
			setTimeout(function() {
				// Done Functions
				$('form .button').css({display: "block"});
				$('.thanks').css({display: "none"});
				th.trigger("reset");
				$.magnificPopup.close();
				window.location.replace("tripwire.html");
			}, 2000);
		});
		return false;
	});

	//E-mail Ajax Send
	$("#page-home-en form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "otpravka.php", //Change
			data: th.serialize()
		}).done(function() {
			$('form .button').css({display: "none"});
			$('.thanks').css({display: "block"});
			$.ajax({
				type: "POST",
				url: "send.php", //Change
				data: th.serialize()
			});
			setTimeout(function() {
				// Done Functions
				$('form .button').css({display: "block"});
				$('.thanks').css({display: "none"});
				th.trigger("reset");
				$.magnificPopup.close();
				window.location.replace("thank.html");
			}, 2000);
		});
		return false;
	});

	$("#page-test form").submit(function() { //Change
		var th = $(this);
		//CHECK TEST
		var testCount = 0;
		$(function(){
			if ($('#q1-1').is(':checked')){
				testCount ++;
			}
			if ($('#q2-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q3-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q4-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q5-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q6-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q7-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q8-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q9-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q10-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q11-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q12-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q13-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q14-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q15-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q16-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q17-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q18-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q19-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q20-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q21-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q22-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q23-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q24-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q25-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q26-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q27-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q28-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q29-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q30-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q31-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q32-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q33-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q34-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q35-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q36-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q37-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q38-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q39-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q40-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q41-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q42-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q43-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q44-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q45-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q46-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q47-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q48-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q49-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q50-3').is(':checked')) {
				testCount ++;
			}
			$("#page-test #test-res").val(testCount);
			var testMail = $("#page-test .pd-l").val();
			$("#page-test #test-mail").val(testMail);
		});
    
		$.ajax({
			type: "POST",
			url: "test.php", //Change
			data: th.serialize()
		}).done(function() {    
			setTimeout(function() {
				window.location.replace("zapis.html");
			}, 500);
		});
		return false;
	});

	$("#page-test-en form").submit(function() { //Change
		var th = $(this);
		//CHECK TEST
		var testCount = 0;
		$(function(){
			if ($('#q1-1').is(':checked')){
				testCount ++;
			}
			if ($('#q2-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q3-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q4-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q5-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q6-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q7-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q8-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q9-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q10-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q11-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q12-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q13-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q14-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q15-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q16-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q17-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q18-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q19-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q20-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q21-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q22-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q23-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q24-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q25-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q26-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q27-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q28-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q29-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q30-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q31-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q32-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q33-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q34-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q35-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q36-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q37-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q38-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q39-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q40-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q41-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q42-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q43-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q44-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q45-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q46-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q47-2').is(':checked')) {
				testCount ++;
			}
			if ($('#q48-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q49-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q50-3').is(':checked')) {
				testCount ++;
			}
			$("#page-test-en #test-res").val(testCount);
			var testMail = $("#page-test-en .pd-l").val();
			$("#page-test-en #test-mail").val(testMail);
		});
    
		$.ajax({
			type: "POST",
			url: "../en/test.php", //Change
			data: th.serialize()
		}).done(function() {    
			setTimeout(function() {
				window.location.replace("zapis.html");
			}, 500);
		});
		return false;
	});

	$("#page-zapis form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "otpravka.php", //Change
			data: th.serialize()
		}).done(function() {
			$('form .button').css({display: "none"});
			$('.thanks').css({display: "block"});
			$.ajax({
				type: "POST",
				url: "send.php", //Change
				data: th.serialize()
			});
			setTimeout(function() {
				// Done Functions
				$('form .button').css({display: "block"});
				$('.thanks').css({display: "none"});
				th.trigger("reset");
				window.location.replace("tripwire.html");
			}, 500);
		});
		return false;
	});

	$("#page-zapis-en form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "otpravka.php", //Change
			data: th.serialize()
		}).done(function() {
			$('form .button').css({display: "none"});
			$('.thanks').css({display: "block"});
			$.ajax({
				type: "POST",
				url: "send.php", //Change
				data: th.serialize()
			});
			setTimeout(function() {
				// Done Functions
				$('form .button').css({display: "block"});
				$('.thanks').css({display: "none"});
				th.trigger("reset");
				window.location.replace("thank.html");
			}, 500);
		});
		return false;
	});

	$('.body-ru .sect-11 .p-more').click(function(){
		$(this).siblings('p').toggleClass('active');
		if ($(this).siblings('p').hasClass('active')) {
			$(this).text('Свернуть');
		} else {
			$(this).text('Читать далее');
		}

	});

	$('.body-en .sect-11 .p-more').click(function(){
		$(this).siblings('p').toggleClass('active');
		if ($(this).siblings('p').hasClass('active')) {
			$(this).text('Less');
		} else {
			$(this).text('Read more');
		}

	});
	/*$("form").submit(function() {
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "otpravka.php", //Change
			data: th.serialize()
		}).done(function() {

		});	
		return false;
	});*/


});
