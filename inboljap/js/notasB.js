$(document).ready(function(){
			$('#form').hide();
			$('#form1').hide();
			$('#form2').hide();
			$('#form3').hide();
		$('#bim').click(function(){
			$('#form').show(1000);
			$('#form1').hide();
			$('#form2').hide();
			$('#form3').hide();
		});
		$('#bim1').click(function(){
			$('#form1').show(1000);
			$('#form').hide();
			$('#form2').hide();
			$('#form3').hide();
		});
		$('#bim2').click(function(){
			$('#form2').show(1000);
			$('#form1').hide();
			$('#form').hide();
			$('#form3').hide();
		});
		$('#bim3').click(function(){
			$('#form3').show(1000);
			$('#form1').hide();
			$('#form2').hide();
			$('#form').hide();
		});
	});