
<?php
$dadosDoUsuario = array(
	array("nome"=> "wendel", "idade"=> 36, "endereco"=> "rua dois, 99"),
	array("nome"=> "andre", "idade"=> 60, "endereco"=> "rua dois, 99"),
	array("nome"=> "Ely", "idade"=> 21, "endereco"=> "cacimba dos pombos, 909")
);

var_dump($dadosDoUsuario);

?>

array(3) { 
	[0]=> array(3) { ["nome"]=> string(6) "wendel" ["idade"]=> int(36) ["endereco"]=> string(12) "rua dois, 99" } 

	[1]=> array(3) { ["nome"]=> string(5) "andre" ["idade"]=> int(60) ["endereco"]=> string(12) "rua dois, 99" } 

	[2]=> array(3) { ["nome"]=> string(3) "Ely" ["idade"]=> int(21) ["endereco"]=> string(23) "cacimba dos pombos, 909" } 
}