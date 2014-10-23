<div id="register_form" style="text-color:red;font-weight:bold; height: auto;">
<h4>
SEARCH HERE FOR LOST FRIENDS AND FAMILIES	
</h4>
<?php
echo form_open('/searchs');
?>
<div align="center">
<?php
$options = array(  ''=>'',
                  'place'  => 'Area',
                  'complexion'    => 'Complexion',
                  'nationality'   => 'Country',
                  'language' => 'Language Spoken',
                  'lastname'=>'BY NAME',

                );

$shirts_on_sale = array('small', 'large');

?> <?php echo form_dropdown('shirts', $options, 'large');?><?php
?>
<br/>
<BR/>
</div>
<?php
echo form_input('search','','placeholder= "search here "');
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<p>";echo form_submit('submit2','SEARCH');echo "<p/>";
echo "<br/>";
echo form_close();
?>
<div style="color:red; font-weight: bold; font-style: italic;">
<?php echo validation_errors(); ?>
</div>
</div>