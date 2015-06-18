(function($){
	$(document).ready(function(){
		$('#upload').on('submit', function(e){
			e.preventDefault();

			var url  = $(this).attr('action'),
				data = $(this).serialize();

			$.ajax({
			  type: "POST",
			  url: url,
			  data: data,
			  success: function(data){
			  	console.log("success");
			  	console.log(data);
			  },
			  error: function(error){
			  	alert('Não foi possível fazer o upload');
			  }
			});
		});
	});
})(jQuery)