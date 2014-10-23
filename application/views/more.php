
<div align="center">
<table <table  class="table table-hover" align="center" style="Border: 1px solid magenta; font-family: Gabriola; font-size:10; width:700px; border-radius: .67em; " >
  
<?php foreach ($query ->result() as $row): ?>
    
     <tr class="warning">
       <td>
    <img src="http://localhost/CI/images/<?php echo  $row->photo ?>" alt="my photo" height="200" width="200" style="border: solid white 3px; border-radius: .35em; " /> 

    </td>
    <td >
    <span>NAME: <?php echo  $row->lastname ?><span>
    <br/>
    <span>LAST SEEN: <?php echo  $row->Ldate ?></span><br/>
    <span>LAST PLACE SEEN: <?php echo  $row->place ?></span><br/>
    <span>SPEAKS: <?php echo  $row->language ?></span><br/>
    <span>COMPLEXION: <?php echo  $row->complexion ?></span><br/>
   <span>NATIONALITY: <?php echo  $row->nationality ?></span><br/>
    
    <span>CONTACT NUMBER: <?php echo  $row->contact ?> <i><font color="green">call </font></i><?php echo  $row->firstname ?></span>
    <br/>
     <span>FOUND AND POSTED BY: <?php echo  $row->firstname ?></span><br/>
    <a href="/CI/index.php/login/missing"><font color="black">see all</font><BR/>
    <a href="/CI/index.php/login/searchs"><font color="white">BACK TO SEARCH </font></a>
    </td>
    </tr>
<?php endforeach ?>
</table>
</div>
