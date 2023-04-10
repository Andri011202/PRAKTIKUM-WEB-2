<!DOCTYPE html>
<html>
<head>
	<title>Program String</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="input">
		<input type="submit" name="submit" value="submit">
	</form>
	<br>
	<?php
		if (isset($_POST['submit'])) {
			$input = $_POST['input'];
			$arrInput = str_split($input);
			$panjang = strlen($input);

			for ($i = 0; $i < $panjang; $i++) {
				$dummyVariable = $i;
				for($j = 0; $j < $panjang; $j++) {
					// Huruf pertama abjad diubah ke upper case
					if($j == 0) {
						$toUpperCase = $arrInput[$dummyVariable];
						$toUpperCase = strtoupper($toUpperCase);
						echo $toUpperCase;
					} else { //Huruf setelahnya diubah ke lower case
						$toLowerCase = $arrInput[$dummyVariable];
						$toLowerCase = strtolower($toLowerCase);
						echo $toLowerCase;
					}
				}
			}

		}
	?>
</body>
</html>