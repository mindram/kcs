
      $(function () {		  
		  
		var callbackexpanded = false;
		var animation = false;

		$(".left_callback > .button").click(function(){
			if (animation == false) {
				animation = true;

				if (callbackexpanded == false) {
					$('#callback').animate({width: '405px'}, 650, function() {callbackexpanded = true;});
				} else {
					$("#callback").animate({width:"40px"}, 650, function() {callbackexpanded = false;});
				}
				animation = false;
			}
		});		
		
		
	
        $('form#callback_forma').on('submit', function (e) {

          e.preventDefault();
		  $data_s = 'functionName=atsiliepimas&' + $('form#callback_forma').serialize();
		  console.log($data_s);

          $.ajax({
            type: 'post',
            url: 'formpost.php',
            data: $data_s,
            success: function (rezultatas) {
			  $('#callback_rezultatas').html(rezultatas);
            }
          });
		  
        });		
		
		
		
      });