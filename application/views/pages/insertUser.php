<h1>hello</h1>

<?php

echo form_open('http://localhost:8888/index.php/pages/insertUser/');

echo form_label('firstname');
echo form_input('firstname');

echo form_label('lastname');
echo form_input('lastname');

echo form_submit('add','add');
echo form_close();



?>