<div style="
 text-align: left;  
 border-radius: .5em; 
 0; margin-left: 250px; margin-right: 250px; 
 background: #39348D; 
color: red;
font-weight:bold;
 " align="center">

<h2>Contanct Form</h2>
<?php 
$this->load->helper('form');

 ?>
<div style="padding: 45px;">
<?php 

echo form_open('/send_email');
echo "<h5><EM>ENTER YOUR FULL NAME</h5>";

echo form_input('full_name',set_value('full_name',''));
echo "<h5>ENTER YOUR EMAIL ADDRESS<h5>";

echo form_input('email',set_value('email',''));
echo "<h5>ENTER YOUR MESSAGE </EM><h5>";

echo form_textarea('message',set_value('message',''));
echo "<p>";echo form_submit('submit','submit'); echo "</p>";
echo form_close();
?>
<div style="color: red; font-weight: bold;">
<?php
echo validation_errors();
?>
</div>
</div>
	

</form>
</div>