<div id="register_form">
<h4>
EDIT/UPDATE A USER
</h4>

<?php 

echo form_open('/update');
foreach ($query ->result() as $row): ?>

 <input type="text" value="<?php echo  $row->first_name ?> " name="firstname" placeholder="hsghg">

 <input type="text" value="<?php echo  $row->last_name ?> " name="lastname"> 
 
 <input type="text" value="<?php echo  $row->email ?> " name="email" readonly="readonly">
 
  <input type="text" value="<?php echo  $row->username ?> " name="username">
    <?php

      echo form_submit('submit','submit');

     echo form_close(); 

     ?>
<?php endforeach ?>
 <br> <br>
<div style="color:red; font-weight: bold; font-style: italic;">
<?php echo validation_errors(); ?>
<br/><br/>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>
</div>