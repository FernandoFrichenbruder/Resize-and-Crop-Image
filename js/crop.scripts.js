(function($){
	$(document).ready(function(){
		function updateCoords(c)
		{
			$('#x').val(c.x);
			$('#y').val(c.y);
			$('#w').val(c.w);
			$('#h').val(c.h);
		};

		function checkCoords()
		{
			if (parseInt($('#w').val())) return true;
			alert('Please select a crop region then press submit.');
			return false;
		};


		$('#upload').on('submit', function(e){
			e.preventDefault();

			var url  = $(this).attr('action'),
				data = new FormData($(this)[0]);

			$.ajax({
			  type: "POST",
			  url: url,
			  data: data,
			  enctype: 'multipart/form-data',
              processData: false,
              contentType: false,
			  success: function(data){
			  		  	
			  	$('#cropbox').attr('src','php/'+data);
			  	$('#path').attr('src','php/'+data);
			  	$('#cropbox').Jcrop();
			  	$('.crop-area').slideDown();



			  },
			  error: function(error){
			  	$('.alert').text('Erro ao subir a imagem!').addClass('text-danger');
			  }
			});
		//console.log(data)
		});

		// $('#crop').on('submit', function(e){
		// 	e.preventDefault();

		// 	return checkCoords();

		// 	var data = new FormData($(this)[0]),
		// 		url = $(this).attr('action');

		// 	$.ajax({
		// 		type: "POST",
		// 		url: url,
		// 		enctype: 'multipart/form-data',
		// 		processData: false,
		// 		contentType: false,
		// 		sucess: function(data) {
		// 			console.log(data);
		// 		},
		// 		error: function(error) {
		// 			console.log('errou');
		// 		}
		// 	})
		// });


		


		
	});
})(jQuery)