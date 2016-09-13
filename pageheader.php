<?php
$user = 'root';
$pass = '';
$db = 'kcs';

$db = new mysqli('localhost', $user, $pass, $db);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>
		<div id="header">
			Headeris
		</div>
		<div id="meniu">
			<ul>
				<?php				
					$query = "SELECT pavadinimas, nuoroda, id FROM meniu_punktai";

					if ($result = $db->query($query)) {
						while ($row = $result->fetch_row()) {
							$nuoroda = $row[1];
							if($nuoroda==""){
								$nuoroda = "index.php?id=" . $row[2];
							}
							printf ("<li class='klase'><a href='%s'>%s</a></li>", $nuoroda, $row[0]); 
						}
						$result->close();
					}
				?>
			</ul>
		</div>