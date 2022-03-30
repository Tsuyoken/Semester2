<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ferdi', 'ferdian', 'cahya', 'sukma'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>