<h1>Home1</h1>

<?php

foreach($users as $user) {
	echo $user->id . " ";
	echo $user->firstname;
	echo $user->lastname . "</br>";

}

?>