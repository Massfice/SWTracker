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
			if(isset($info) && !empty($info)) {
				foreach($info as $i) {
					echo $i['author'].': '.'<a href="'.$i['link'].'" target="_blank">'.$i['link'].'</a><br><br>';
				}
			}
	
			if(isset($error) && !empty($error)) {	

				echo '<b>### BLEDY ###</b><br><br>';

				foreach($error as $e) {
					echo '- '.$e.'<br>';
				}
			}
		?>
		
		<br><br>
		<a href = '<?php $_SERVER['SERVER_ADDR'] ?>logout'>Logout</a>
		
	</body>
	
</html>