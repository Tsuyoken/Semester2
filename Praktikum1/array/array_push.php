<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ferdi', 'ferdian', 'cahya', 'sukma'];
	array_push($name, 'chris');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>