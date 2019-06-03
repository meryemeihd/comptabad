<?php

echo "<table>";
echo "<tr><td>Nom</td><td>Date</td><td>Action</td></tr>";

while ($Ligne = $Connexion->sql_fetch_object($Resultat))
{
	echo "<tr><td>".$Ligne->Nom."</td><td>".$Ligne->DateModif."</td><td><a href='/test/edit/".$Ligne->ID_Test."'>Edit</a></td></tr>";
}

echo "<tr><td></td><td></td><td><a href='/test/edit'>New</a></td></tr>";
echo "</table>";