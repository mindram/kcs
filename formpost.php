<?php
$user = 'root';
$pass = '';
$db = 'kcs';

$db = new mysqli('localhost', $user, $pass, $db);

$functionName = $_POST['functionName'];
$vardas = $_POST['vardas'];
$emailas = $_POST['emailas'];
$telefonas = $_POST['telefonas'];
$zinute = $_POST['zinute'];

if ($functionName == "atsiliepimas") {
    atsiliepimas($vardas, $emailas, $telefonas, $zinute, $db);
} else {
	klaida();
}

function atsiliepimas($vardas, $emailas, $telefonas, $zinute, $db)
{	
	$iraso_ID = 0;
	$iraso2_ID = 0;
	$result = mysqli_query($db,"SELECT ID FROM atsiliepimai ORDER BY ID DESC LIMIT 1");
	while($row = mysqli_fetch_array($result)) {
		$iraso_ID = $row['ID'];
	}
	
	mysqli_query($db,"INSERT INTO atsiliepimai (vardas, emailas, telefonas, zinute) VALUES ('$vardas', '$emailas', '$telefonas', '$zinute')");	
	
	$result = mysqli_query($db,"SELECT ID FROM atsiliepimai ORDER BY ID DESC LIMIT 1");
	while($row = mysqli_fetch_array($result)) {
		$iraso2_ID = $row['ID'];
	}
	if($iraso2_ID == $iraso_ID + 1){
		echo "Ačiū už žinutę.";
	} else {
		echo "Žinutės nusiųsti nepavyko. Bandykite dar kartą.";
	}
}

function klaida()
{
    echo "klaida";
}
?>