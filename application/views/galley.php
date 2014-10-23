<html>
<head>
<title>Gallery </title>
</head>
<body>
<h3 align="center"><b><i><font color="red">a code ignitor image web page</font></i><b></h3>
<div id="gallery">
</div>
<div id="upload"  style="background: magenta; text-align: center">
<?php
echo form_open_multipart('gallery');
echo form_upload('userfile');
echo form_submit('upload','Upload');
echo form_close();
?>
</div>

</body>
</html>
