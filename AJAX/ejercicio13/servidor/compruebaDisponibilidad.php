<?php


$nombre = $_GET["login"];
$lista = ["imanol", "unai", "ekaitz"];
$existe = false;


for($i = 0; $i < sizeof($lista); $i++){
	if($nombre == $lista[$i]){
		$existe = true;
	}else{
		$existe = false;
	}
}

if($existe == true){
	echo "el nombre ya existe";
}else{
	echo "el nombre no existe";
}
?>