<div id="login_form" >
<?php
if(isset($account_created))
{?>
<h4><?php echo $account_created; ?></h4>
<?php
} else {
?>
<h4>
LOGIN PLEASE
</h4>

<?php
}
?>

<?php
echo form_open('/validate_credentials');
echo "<p>";
echo form_input('username','','placeholder="username"');
echo "</p>";
echo "<p>";
echo form_password('password','','placeholder="password"');
echo "</p>";
echo "<p>";
echo form_submit('submit','Login');
echo "</p>";
echo form_close();

?>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo anchor("/signup",'create account'); ?>
<br/>
<br />
<span align="center" style="font-family:Gabriola; font-weight:bolder; color:#FF0000;">
<?php
if(isset($_POST['submit']))
{
	if($_POST['username']==""|| $_POST['password']=="" )
	{
	$_SESSION["me"]="empty field(s)";
	
	}
	else
	{
	echo "";
	}
}
?>
<?php
if(isset($_SESSION["me"])){
echo $_SESSION["me"]." *";
}
else
{
echo "";
}
?>
</span>
<div id="rep"></div>
</div>