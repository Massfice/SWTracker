<html>
	<head>
		<title>SW Tracker</title>
	</head>
	
	<body>
		<form action = '' method = 'POST'>
			Od: <input type = 'text' name = 'from'> Do: <input type = 'text' name = 'to'><br>
			Rozliczam: <input type = 'text' name = 'nicks'> 
			<input type = 'submit' value = 'Proccess'>
			<input type = 'hidden' name = 'action' value = 'track'>
		</form>

		<?php
			if(isset($showInfo) && !empty($showInfo)) {
				foreach($showInfo as $i) {
					echo $i['author'].': '.'<a href="'.$i['link'].'" target="_blank">'.$i['link'].'</a><br><br>';
				}
			}
	
			if(isset($showError) && !empty($showError)) {	

				echo '<b>### BLEDY ###</b><br><br>';

				foreach($showError as $e) {
					echo '- '.$e.'<br>';
				}
			}
		?>
		
		<br><br>
		<a href = '<?php $_SERVER['SERVER_ADDR'] ?>logout'>Logout</a>
		
	</body>
	
</html>