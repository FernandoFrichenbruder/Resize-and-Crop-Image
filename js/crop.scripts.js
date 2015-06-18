(function($){
	$(document).ready(function(){
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
			  	$('.crop-area').slideDown();
			  },
			  error: function(error){
			  	$('.alert').text('Erro ao subir a imagem!').addClass('text-danger');
			  }
			});
		//console.log(data)
		});


		$('#cropbox').Jcrop({
		  aspectRatio: 1,
		  onSelect: updateCoords
		});


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
	});
})(jQuery)