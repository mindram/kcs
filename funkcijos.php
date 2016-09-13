<?php
$funkcijos_pavadinimas = filter_input(INPUT_GET, 'functionName');
$vaisius = filter_input(INPUT_GET, 'vaisius');

if ($funkcijos_pavadinimas == "funkcija") {
    funkcija();
} elseif ($funkcijos_pavadinimas == "pirkti") {
    pirkti();
} else {
	klaida($vaisius);
}

function funkcija()
{
	echo "Nebėra jokio mygtukoooooooooooooooooo";
}
function pirkti()
{
	echo "pirkimas įvyko";
}

function klaida($vaisius)
{
    echo "klaida: $vaisius";
}
?>