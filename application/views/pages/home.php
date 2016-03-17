<h1>Home</h1>

<?php

foreach($users as $user) {
	echo $user->id . "</br>";
	echo $user->firstname;
	echo $user->lastname;
}

?>