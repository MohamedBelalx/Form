$(function(){
	$('.name').blur(function(){
		
		if($(this).val().length <= 3){
			$('#name-alert').fadeIn('300');
			$(this).css('border','1px solid red');
			$(this).css('box-shadow','0 0 0 0.2rem rgba(215, 44, 44, 0.3)');
		}else{
			$('#name-alert').fadeOut('50');
			$(this).css('border','1px solid lightgreen');
			$(this).css('box-shadow','0 0 0 0.2rem rgba(136, 211, 140, 0.3)');
			
		}
	});
	
		$('.mail').blur(function(){
		
		if($(this).val().length <= 3){
			$('#mail-alert').fadeIn('300');
			$(this).css('border','1px solid red');
			$(this).css('box-shadow','0 0 0 0.2rem rgba(215, 44, 44, 0.3)');
		}else{
			$('#mail-alert').fadeOut('50');
			$(this).css('border','1px solid lightgreen');
			$(this).css('box-shadow','0 0 0 0.2rem rgba(136, 211, 140, 0.3)');
		}
	});
	
		$('.phone').blur(function(){
		
		if($(this).val().length < 11){
			$('#phone-alert').fadeIn('300');
			$(this).css('border','1px solid red');
			$(this).css('box-shadow','0 0 0 0.2rem rgba(215, 44, 44, 0.3)');
		}else{
			$('#phone-alert').fadeOut('50');
			$(this).css('border','1px solid lightgreen');
			$(this).css('box-shadow','0 0 0 0.2rem rgba(136, 211, 140, 0.3)');
		}
	});
	// Disable to submit form if min. requierments not find
	
	$('.reg').submit(function(e){
		if(($('.name').val().length <= 3)){
		   e.preventDefault();
		   }
		if($('.phone').val().length < 11){
			e.preventDefault();
		}
	});


	
	
	
});
