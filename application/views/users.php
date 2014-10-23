<div id="container">
<table <table  class="table table-responsive" align="center" style="Border: 1px solid magenta; font-family: Gabriola; font-size:10; width:700px; border-radius: .67em; " >

<tr class="active">
    <th >FIRST NAME</th>
    <th >USERNAME</th>
    <th >LAST NAME</th>
        <th >EMAIL</th>
    <th >TYPE</th>
     <th >DELETE</th>
     <th >UPDATE</th>

    </tr>
<?php
foreach ($query ->result() as $row): 
     
        ?>
              <tr class="danger">
    <td >
    <?php echo  $row->first_name ?>    </td>
    <td >
    <?php echo  $row->username ?>

    </td>
    <td >
    <?php echo  $row->last_name ?>

    </td>

    <td >
    
        <?php echo  $row->email ?>
   

    </td>
    </td>
    <td >
    <?php echo  $row->type ?>

    </td>
    <td >
    
        <a href='/CI/index.php/login/del?email=<?php echo $row->email; ?>'><img src="http://localhost/CI/images/delete.png"/></a>
   

    </td>
    <td >
    
        <a href="/CI/index.php/login/getAll?mail=<?php echo $row->email; ?>"><img src="http://localhost/CI/images/edit.png"/></a>
   

    </td>
    </tr>
    
<?php endforeach ?>
</table>
</div>
<div align="center" style="color: green">
<?php
echo $this->pagination->create_links();
?>
</div>
