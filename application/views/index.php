<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	
	<link rel="stylesheet" href="http://localhost/CI/css/style.css" type="text/css" media="screen" charset="utf-8" />
	
	<script type="text/javascript" src="http://localhost/CI/js/jquery-1.2.6.js"></script>
	<script type="text/javascript" src="http://localhost/CI/js/startstop-slider.js"></script>
	<script type="text/javascript">
	function jos()
	{
    document.getElementById('cool');
   }
	setInterval(500,jos);
	</script>
</head>

<body>

	<div id="page-wrap" style="border-radius: 0.79em;  
	box-shadow:  0 1px 0 magenta, 0 2px 1px rgba(0,0,0,.8) inset;
 	-webkit-box-shadow: 0 4px 0 magenta, 0 2px 1px rgba(255,0,0,.8) inset; 
	-moz-box-shadow: 0 4px 0 magenta, 0 2px 1px rgba(255,0,0,.8) inset;
   -o-box-shadow: 0 4px 0 magenta, 0 2px 1px rgba(255,0,0,.8) inset; 	
    -ms-box-shadow: 0 4px 0 magenta, 0 2px 1px rgba(255,0,0,.8) inset; ">
		<h2>lets get our friends back home <i><font color="red">latest entries</i></font></h2> 
		
		<div id="slider" >
             
			<div id="mover">
		
				<div id="slide-1" class="slide">
				
	<div id="cool">			
					<?php
mysql_connect("localhost","root","") or die("error");
mysql_select_db("missig_persons") or die("error");
$sql0=mysql_query("select  * from missing_person") or die(mysql_error());
$num= mysql_num_rows($sql0);
//echo $num;
$sql=mysql_query("select  * from missing_person where id='$num'") or die(mysql_error());
?></div><?php
while($row=mysql_fetch_array($sql))
{
	printf( "<p style='text-transform: lowercase'><b><font color='red'> <em>".$row['firstname']."</font></em></b></p>");

?>
</h1>
					<p style='text-transform: lowercase;'>The name of the person on picture is <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> last seen at <?php echo "<font color='red'><em>".$row['Ldate']."</font></em>" ?>. Complexion of the above named person is <?php echo "<font color='red'><em>".$row['complexion']."</font></em>"?>. Nationality is <?php echo "<font color='red'><em>".$row['nationality']."</font></em>" ?> and speaks mostly in <?php echo "<font color='red'><em>".$row['language']."</font></em>" ?> full names <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> <?php echo "<font color='red'><em>".$row['lastname']."</font></em>" ?></p>
					
					<a href="#"><img src="http://localhost/CI/images/<?php printf(  $row['photo']); ?>" alt="learn more" width="434" height="161" style="border:solid 4px; border-color: white;  border-radius: .65em; " /></a>
					<?php } ?>
				</div>
				
				<div class="slide">
<?php
$num1= ($num-1);
//echo $num1;
$sql=mysql_query("select  * from missing_person where id='$num1'") or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
	echo "<p style='text-transform: lowercase;'><b><font color='red'><em>".$row['firstname']."</font></em></b></p>";

?>
									
					<p style='text-transform: lowercase;'>The name of the person on picture is <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> last seen at <?php echo "<font color='red'><em>".$row['Ldate']."</font></em>" ?>. Complexion of the above named person is <?php echo "<font color='red'><em>".$row['complexion']."</font></em>"?>. Nationality is <?php echo "<font color='red'><em>".$row['nationality']."</font></em>" ?> and speaks mostly in <?php echo "<font color='red'><em>".$row['language']."</font></em>" ?> full names <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> <?php echo "<font color='red'><em>".$row['lastname']."</font></em>" ?></p>
					
					<a href="#"><img src="http://localhost/CI/images/<?php echo $row['photo']; ?>" alt="learn more" width="434" height="161" style="border:solid 4px; border-color: white;  border-radius: .65em; " /></a>
					<?php } ?>
				</div>
				
				<div class="slide">
				<?php
$num2= ($num-2);
//echo $num2;
$sql=mysql_query("select  * from missing_person where  id='$num2'") or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
	echo "<p style='text-transform: lowercase'><b><font color='red'><em>".$row['firstname']."</font></em></b></p>";

?>
									
					<p style='text-transform: lowercase;'>The name of the person on picture is <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> last seen at <?php echo "<font color='red'><em>".$row['Ldate']."</font></em>" ?>. Complexion of the above named person is <?php echo "<font color='red'><em>".$row['complexion']."</font></em>"?>. Nationality is <?php echo "<font color='red'><em>".$row['nationality']."</font></em>" ?> and speaks mostly in <?php echo "<font color='red'><em>".$row['language']."</font></em>" ?> full names <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> <?php echo "<font color='red'><em>".$row['lastname']."</font></em>" ?></p>
					
					<a href="#"><img src="http://localhost/CI/images/<?php echo $row['photo']; ?>" alt="learn more" width="434" height="161" style="border:solid 4px; border-color: white;  border-radius: .65em;" /></a>
					<?php } ?>
				</div>
			<div class="slide">
<?php
$num3= ($num2-1);
//echo $num3;
$sql=mysql_query("select  * from missing_person where id='$num1'") or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
	echo "<p style='text-transform: lowercase;'><b><font color='red'><em>".$row['firstname']."</font></em></b></p>";

?>
									
					<p style='text-transform: lowercase;'>The name of the person on picture is <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> last seen at <?php echo "<font color='red'><em>".$row['Ldate']."</font></em>" ?>. Complexion of the above named person is <?php echo "<font color='red'><em>".$row['complexion']."</font></em>"?>. Nationality is <?php echo "<font color='red'><em>".$row['nationality']."</font></em>" ?> and speaks mostly in <?php echo "<font color='red'><em>".$row['language']."</font></em>" ?> full names <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> <?php echo "<font color='red'><em>".$row['lastname']."</font></em>" ?></p>
					
					<a href="#"><img src="http://localhost/CI/images/<?php echo $row['photo']; ?>" alt="learn more" width="434" height="161" style="border:solid 4px; border-color: white;  border-radius: .65em; " /></a>
					<?php } ?>
				</div>
				
				<div class="slide">
				<?php
$num4= ($num3-1);
//echo $num4;
$sql=mysql_query("select  * from missing_person where  id='$num2'") or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
	echo "<p style='text-transform: lowercase'><b><font color='red'><em>".$row['firstname']."</font></em></b></p>";

?>
									
					<p style='text-transform: lowercase;'>The name of the person on picture is <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> last seen at <?php echo "<font color='red'><em>".$row['Ldate']."</font></em>" ?>. Complexion of the above named person is <?php echo "<font color='red'><em>".$row['complexion']."</font></em>"?>. Nationality is <?php echo "<font color='red'><em>".$row['nationality']."</font></em>" ?> and speaks mostly in <?php echo "<font color='red'><em>".$row['language']."</font></em>" ?> full names <?php echo "<font color='red'><em>".$row['firstname']."</font></em>" ?> <?php echo "<font color='red'><em>".$row['lastname']."</font></em>" ?></p>
					
					<a href="#"><img src="http://localhost/CI/images/<?php echo $row['photo']; ?>" alt="learn more" width="434" height="161" style="border:solid 4px; border-color: white;  border-radius: .65em;" /></a>
					<?php } ?>
				</div>
			</div>
		
		</div>
		

		
	</div>
	
</body>

</html>
