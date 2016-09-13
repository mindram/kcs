<html>
	<head>
		<title>Kaunas Coding</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('a#daugiau_maziau').click(function(){
				$.ajax({
					url: "funkcijos.php",
					type: 'GET',
					dataType: 'html',
					data: "functionName=testas&vaisius=obuolys",
					success: function (rezultatas) {
						if (rezultatas == 'klaida: obuolys'){
							alert('Įvyko klaida');
						} else {
							$('#container').html(rezultatas);
						}
					}
				});
			});
		});
		</script>
	</head>
	<body onresize="menu_resize()">
		<div id="container">
			<p>Paspausk mane: <a id="daugiau_maziau" href="#">čia</a></p>
		</div>
	</body>
</html>