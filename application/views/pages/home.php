<h1>View (Results)</h1>

<?php

foreach($users as $user) {
	echo $user->id . " ";
	echo $user->firstname;
	echo $user->lastname . " ";
	echo "<a href=/index.php/pages/updateUserForm/".$user->id.">Edit</a> <br>";
	echo "<a href=/index.php/pages/deleteUser/".$user->id.">Delete</a> <br>";

}

?>