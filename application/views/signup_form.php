<div id="register_form" style="text-color:red;
font-weight:bold;">
<h4>
create an account	
</h4>
<?php
echo  form_open_multipart('/create_member');
echo "<p>";
echo form_input('first_name','','placeholder="first name"');
echo "</p>";
echo "<br/>";
echo "<p>";
echo form_input('last_name','','placeholder="last name"');
echo "</p>";
echo "<p>";
echo form_input('email','','placeholder="email"');
echo "</p>";
echo "<p>";
echo form_input('username','','placeholder="username"');
echo "</p>";
echo "<p>";
?>
<input type="file" class="red" name="userfile" value="open" id="userfile"onmousedown="buttonPush('depressed');" onmouseup="buttonPush('normal');"onmouseout="buttonPush('phased');">
<?php
echo "</p>";
echo "<p>";
echo form_password('password','','placeholder="password" class="password"');
echo "</p>";
echo "<p>";
echo form_password('password_confirm','','placeholder="password_confirm" ');
echo "</p>";
echo "<p>";
echo form_submit('submit','Create Account');
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
?>
<div style="color:red; font-weight: bold; font-family:Gabriola; font-size:14px;">
<?php echo validation_errors(); ?>
</div>
</div>