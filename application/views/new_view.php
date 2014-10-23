<!DOCTYPE html>
<html>
	
<body>
	
<div id="container">
<table border="1">
	<?php

foreach ($query ->result() as $row)
{  echo "<tr>";
	echo "<td>". $row->name."</td>";
	
	echo "<td>".$row->photo."</td>";
	echo "</tr>";
}
?>
<?php
echo "</table>";
echo $this->pagination->create_links();

?>

</div>


</body>





</html>