<?php
class test {
	
public static function liste()
{
	global $Connexion;
	
	$Query = "SELECT * FROM Test";
	
	global $Resultat;
	
	$Resultat = $Connexion->sql_query($Query);
}

public static function edit()
{
	global $Test;
	
	$Test = new MyORM\Test($_GET["param"][0] ?? null);
}

public static function save()
{	
	$Test = new MyORM\Test($_POST["ID_Test"] ?? null);
	
	$Test->Nom = $_POST["Nom"];
	//$Test->DateModif = $_POST["DateModif"];
	
	$Test->save();
}

}