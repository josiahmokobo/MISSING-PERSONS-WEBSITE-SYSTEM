<div id="container" style="Border-radius: .75em;">
<table  class="table table-hover" align="center" style="Border: 1px solid magenta; font-family: Gabriola; font-size:10; width:700px; " >

<tr class="success">

    <th>case NO.</th>
    <th>photo</th>
    <th>more information</th>
    </tr>
<?php foreach ($query ->result() as $row): ?>
    
     <tr class="danger">
    <td>
    <?php echo  $row->id ?>
    </td>
    <td>
    <img src="http://localhost/CI/images/<?php echo  $row->photo ?>" alt="my photo" height="30" width="50" style="border: solid white 3px; border-radius: .35em; " /> 

    </td>
    <td>
    <span>NAME: <?php echo  $row->lastname ?><span>
    <br/>
    <span>contact number: <?php echo  $row->contact ?> - <?php echo  $row->firstname ?></span>
    <br/>
    <a href="/CI/index.php/login/more?more=<?php echo  $row->lastname ?>">click here</a>
     <span>for more details</span><? "             " ?>
   <font color="magenta"> posted by </font> <?php echo  $row->firstname ?>
   

    </td>
    </tr>
<?php endforeach ?>
</table>

</div>

