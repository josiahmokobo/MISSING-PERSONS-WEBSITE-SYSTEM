<div id="register_form">
<h4>
EDIT/UPDATE A USER
</h4>

<?php 

echo  form_open_multipart('/updateUser');
foreach ($query ->result() as $row): ?>

   
 <input type="text" value="<?php echo  $row->first_name ?> " name="firstname">
   
 <input type="text" value="<?php echo  $row->last_name ?> " name="lastname"> 

 <input type="text" value="<?php echo  $row->email ?> " name="email">

 <input type="file" class="red" name="userfile" value="open" id="userfile"onmousedown="buttonPush('depressed');" onmouseup="buttonPush('normal');"onmouseout="buttonPush('phased');">


    <?php

      echo form_submit('submit','submit');

     echo form_close(); 

     ?>
<?php endforeach ?>
<div style="color:red; font-weight: bold; font-style: italic;">
<?php echo validation_errors(); ?>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
</div>