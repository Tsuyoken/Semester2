<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ferdi', 'ferdian', 'cahya', 'sukma'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>