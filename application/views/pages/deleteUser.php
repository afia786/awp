<h1>deleted a user</h1>

<?php

foreach($users as $user) {
	echo $user->id . " ";
	echo $user->firstname;
	echo $user->lastname . " ";
	echo "<a href=/index.php/pages/deleteUser/".$user->id.">delete</a> <br>";

}

?>