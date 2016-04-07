<h1>update</h1>

<?php

echo form_open('http://localhost:8888/index.php/pages/updateUser/'.$userid);

echo form_label('firstname');
echo form_input('firstname');

echo form_label('lastname');
echo form_input('lastname');

?>
<button type="submit">Update</button>
<?php

echo form_close();