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
		if (testNumber == 11){
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

	$("#page-test form").submit(function() { //Change
		var th = $(this);
		//CHECK TEST
		var testCount = 0;
		$(function(){
			if ($('#q1-2').is(':checked')){
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
			if ($('#q5-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q6-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q7-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q8-3').is(':checked')) {
				testCount ++;
			}
			if ($('#q9-1').is(':checked')) {
				testCount ++;
			}
			if ($('#q10-4').is(':checked')) {
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

	$("#page-zapis form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "otpravka.php", //Change
			data: th.serialize()
		}).done(function() {
			$('form .button').css({display: "none"});
			$('.thanks').css({display: "block"});
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


});
