<?php

echo "<table>";
echo "<form action='/test/save' method=post>";
echo "<input type=hidden name='ID_Test' value='".$Test->ID_Test."'>";
echo "<tr><td>Nom</td><td><input type=text name='Nom' value='".$Test->Nom."'></td></tr>";
//echo "<tr><td>Date</td><td><input type=text name='DateModif' value='".$Test->DateModif."'></td></tr>";
echo "</table>";
echo "<input type=submit name='soumettre'>";
echo "</form>";