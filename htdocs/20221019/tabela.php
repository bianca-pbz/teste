<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>colspan e rowspan</title>
</head>
<body>

<?php

echo "<TABLE border=\"1\">\n";
for($a = 0; $a <= 5; $a++) {
	echo "<TR>\n";
	for($b = 0; $b <= 2; $b++) {
		//if (!(($a == 0 && $b == 2) || ($a == 2 && $b == 1))) {
			echo "<TD";
			/*
			if ($a == 0 && $b == 1) {
				echo " colspan=\"2\"";
			}
			if ($a == 1 && $b == 1) {
				echo " rowspan=\"2\"";
			}
			*/
			echo ">";
			echo "&nbsp;";
			echo "</TD>\n";
		//}
	}
	echo "</TR>\n";
}
echo "</TABLE>\n";

?>

</body>
