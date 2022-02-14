<?php
count($raspored=array(
  array("Ponedjeljak","  Utorak","  Srijeda","  Cetvrtak","  Petak"),
  array("SI", "               ","   WP", "                ", " SI"),
  array("SI","                 ","  WP", "       Filo","      Filo"),
  array("SI        ","   OZ", "      RMA", "      BHS", "       Matematika"),
  array("Matematika","   Engleski","RMA", "      BHS", "       Engleski"),
  array("Matematika","   Sport","   Engleski", " Prog", "      Latinski"),
  array("Sport", "        Njemacki", "Filo","     Prog", "      Vjeronauka"),
  array("Njemacki", "  ", "                    ", "          ", "BHS")
  ));
	echo "<table>";
for($i=0; $i<9; $i++)
	{ 
			echo "<tr>";

	for($j=0; $j<9; $j++)
	{

		echo "<td>".$raspored[$i][$j]."</td>";
	}
		echo"</tr>";
	}

   	 echo"</table>";

?>