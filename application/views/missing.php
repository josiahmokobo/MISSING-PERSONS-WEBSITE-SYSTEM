<div id="container">
<p align="center"><a href="/CI/index.php/login/AddLostPerson"><img src="http://localhost/CI/images/add.png"/></a> <font color='green'><em><b>add a lost person here!</font></em></b></p>
<table  class="table table-hover" align="center" style="Border: 1px solid magenta; font-family: Gabriola; font-size:10; width:700px; " >

<tr class="success">
    <th>case NO.</th>
    <th>photo</th>
    <th>more information</th>
    </tr>
<?php foreach ($query ->result() as $row): ?>
    
     <tr class="danger">
    <td >
    <h2><?php echo  $row->id ?></h2>
    </td>
    <td>
    <img src="http://localhost/CI/images/<?php echo  $row->photo ?>" alt="my photo" height="100" width="100" style="border: solid white 3px; border-radius: .35em; " /> 

    </td>
    <td>
    <span>NAME: <?php echo  $row->lastname ?><span>
    <br/>
    <span>LAST SEEN: <?php echo  $row->Ldate ?></span>
    <br/>
    <span>CONTACT NUMBER: <?php echo  $row->contact ?> - <?php echo  $row->firstname ?></span>
    <br/>
    <a href="/CI/index.php/login/more?more=<?php echo  $row->lastname ?>">click here</a>
     <span>for more details</span>
    <p> <font color="magenta"> posted by </font>  <?php echo  $row->firstname ?></p>
   

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
