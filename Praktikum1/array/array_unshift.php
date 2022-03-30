<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ferdi', 'ferdian', 'cahya', 'sukma'];
	array_unshift($name, 'chris', 'ken');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>