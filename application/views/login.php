<html>
<head>
<title>login page </title>
</head>
<body>
<h3 align="center"><b><i><font color="red">a code ignitor login web page</font></i><b></h3>
<div id="gallery">
</div>
<div id="register-form"  style="background: magenta; text-align: left">
<?php
echo form_open('login/login_validation.php');
echo form_open();
echo "</p> Email: ";
echo form_input('email');
echo "</p> Password: ";
echo form_password('password');
echo "</p>";
echo form_submit('submit','login');
echo "</p>";
echo form_close();
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
?>
</div>

</body>
</html>
