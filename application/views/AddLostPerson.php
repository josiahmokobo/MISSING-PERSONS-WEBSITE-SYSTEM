<div id="register_form">
<h4>
REPORT LOST PERSON
</h4>
<?php //echo $error;?>
<?php echo form_open_multipart('/val_AddLostPerson');
echo form_input('first_name','','placeholder="ENTER YOUR  NAME PLEASE"');
echo form_input('last_name','','placeholder="ENTER THE NAME OF LOST PERSON"');?>
<?php
?> 

<div><input type="date" size="78" name="TLastSeen" placeholder="DATE PICKER NOT WORKING FOR MOZILLA" />
</div>
<br/>
<br/>
<?php
echo form_input('PLastSeen','','placeholder="PLACE LAST SEEN"' );
echo form_input('complexion','','placeholder="COMPLEXION"' );
echo form_input('nationality','','placeholder="NATIONALITY HERE(YOUR COUNTRY)"' );
echo form_input('contact','','placeholder="CONTACT NUMBER(where people will contact you)"' );
?>
<p align="center"><input type="file" name="userfile" id="userfile" class="red"/></p>
<br/>
<?php
echo form_input('language','','placeholder="LANGUAGE SPOKEN" ');
echo form_submit('submit','ADD');?>

<div style="color: red; font-weight:bold; font-style: italic;">
<?php echo validation_errors();  ?>
</div>
<br/>
<br><br><br>
<p style="color: red;">last place seen<p>
<?php
if(isset($_POST["submit"])){
echo $_FILES["userfile"]["name"];}
?>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
</div>