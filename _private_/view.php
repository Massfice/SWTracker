<form action = '' method = 'POST'>
Od: <input type = 'text' name = 'from'> Do: <input type = 'text' name = 'to'><br>
Rozliczam: <input type = 'text' name = 'nicks'><br>
<input type = 'submit' value = 'Send'>
</form>

<?php
	if(isset($showInfo) && !empty($showInfo)) {
		foreach($showInfo as $i) {
			echo $i['author'].': '.'<a href="'.$i['link'].'" target="_blank">'.$i['link'].'</a><br><br>';
		}
	}
?>