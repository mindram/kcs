<?php
$id = 0;
$url = '';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
if (isset($_GET['url'])) {
	$url = $_GET['url'];
}

include 'pageheader.php';
if ($id == 0){
	include 'home.php';
} elseif (!empty($url)){
	include "$url.php";
} else {
	$query = "SELECT turinys, nuoroda FROM meniu_punktai WHERE id=$id";
	if ($result = $db->query($query)) {
		while ($row = $result->fetch_row()) {
			if($row[1] != ""){
				include $row[1];
			} else {
				echo $row[0];
			}
		}
		$result->close();
	}
}
include 'pagefooter.php';
?>