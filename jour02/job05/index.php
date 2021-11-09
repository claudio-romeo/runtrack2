<<<<<<< HEAD
<?php

set_time_limit(0);

$nombre=1000; //Variable permettant d'afficher la liste des nombres premiers inférieurs à $nombre

echo "2<br>";
for($i=2;$i<$nombre;$i++)
{
	for($j=2;$j<$i;$j++)
	{
		if(($i%$j)==0) break;
		if($j==($i-1)) echo "$i<br>"; 
	}
}

=======
<?php

set_time_limit(0);

$nombre=1000; //Variable permettant d'afficher la liste des nombres premiers inférieurs à $nombre

echo "2<br>";
for($i=2;$i<$nombre;$i++)
{
	for($j=2;$j<$i;$j++)
	{
		if(($i%$j)==0) break;
		if($j==($i-1)) echo "$i<br>"; 
	}
}

>>>>>>> 096466cd2f9bace27eddbb69161d43ea8443e2e8
?>