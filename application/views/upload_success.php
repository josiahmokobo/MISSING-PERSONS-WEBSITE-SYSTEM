<div style=" text-align: left;  
 border-radius: .5em; 
 padding: border-color:black; 
 0; margin-left: 250px; margin-right: 250px; 
 background: cyan; 
text-color: red;
font-weight:bold;
 " align="center">

<h2>Notice</h2>

<div style="padding: 45px;">
<?php 

echo "<h5><EM>image successfully uploaded</h5>";
echo $_FILES["userfile"]["name"];
?>

<a href="/CI/index.php/login/upload/">upload another image?</a>
</div>
	

</form>
</div>