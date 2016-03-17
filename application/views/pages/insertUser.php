<h1>hello</h1>

<?php

echo form_open_multipart('Pages/insertUser');

echo form_label('firstname');
echo form_input('firstname');

echo form_label('lastname');
echo form_input('lastname');

echo form_submit('submit','submit');
echo form_close();



?>