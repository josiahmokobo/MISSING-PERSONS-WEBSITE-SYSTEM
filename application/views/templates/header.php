<!DOCTYPE html>
<html>
<head>
	<title>FIND MISSING PEOPLE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

     <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>

	<script type="text/javascript">
function buttonPush (buttonStatus)
  {
  if (buttonStatus == "depressed")
document.getElementById("pseudobutton").style.borderStyle = "inset";
  else
document.getElementById("pseudobutton").style.borderStyle = "outset";
  }
</script>
	<style type="text/css">

input.hide
    {
  position:absolute;
  left:-137px;
  -moz-opacity:0;
  filter:alpha(opacity: 0);
  opacity: 0;
  z-index: 2;
    }
input.red
    {
  background-color:#cc0000;
  font-weight:bold;
  color:#ffffff;
  z-index:1;
  width:175px;
  height:40px;
  font-size:10px;
  border-radius: .65em;
    }
    input.hide
  {
      position:absolute;
      left:10px;
      -moz-opacity:0;
      filter:alpha(opacity: 0);
      opacity: 0;
      z-index: 2;
      width:0px;
      border-width:1px;
      border-color: 1px green dashed;
  }
	</style>
	<style type="text/css">


body
{
	background: #C6C6b6;
	margin: 0;
	padding: 0;
	font-family: 'serif';
	-webkit-box-flex: 1;

}
#header
{
	width: 100%;
	height: 100px;
	border-radius: .45em;
	border: solid magenta;
    background: lightblue;
    background:url(http://localhost/CI/images/header.png) repeat;
}
#nav
{
     width: 90%;
     float: left;
	 height: 75px;
     
	 border: transparent;
	 background: #f2f2f2;
	 clear:both;
	 position:relative;
	 border-bottom: 2px solid;
    
}
#nav ul li
{
    list-style: none;
	float: left;
}
#nav a{
    display: block;
	padding: 8px 15px;
	text-decoration: none;
	font-weight: bold;
	color: #069;
	background: #f2f2f2;
	text-transform: uppercase;
 }

 #nav ul{
    text-decoration: none;
    font-weight: bold;
    font-size: 8px;
    border-width: 1px;
    border-color: black;   
 }
 a{
 	text-decoration: none;
 	color: red;
    font-weight: bold;
    font-size: 12px;
    border: 1 px;
    border-color: red #ccc #999 #eee; 
     background: white;
    background: linear-gradient(green, lightblue);    

 }
  #nav li{
    
    text-decoration: none;
      
 }
 #nav li a:hover {
	color: #c00;
	background-color: lightgray; 
	}
	 #nav li a:active {
    box-shadow:inset 0 2px 2px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow:inset 0 2px 2px rgba(0, 0, 0, 0.25);
    -moz-box-shadow:inset 0 2px 2px rgba(0, 0, 0, 0.25);
}
#content
{
width: 100%;
height: auto;
border: solid;
border-color: green;
border-radius: ,45em;

}
input:hover, textarea:hover ,select:hover{
    box-shadow:0px 0px 6px GREEN;
    -moz-box-shadow:0px 0px 6px GREEN
    -webkit-box-shadow:0px 0px 6px GREEN;
}
a:hover
{
border:#9966FF;
}

select{
width:430px;
margin-left:0px;
background: MAGENTA;
 #margin:0 3px 3px 3px;
 border: 1px solid magenta;
 font-family: gabriola;
 color:#FFFFFF;
 height:65;
  border:0px;
  display:block;
  float:left;
  font-weight:bold;
  padding:0;

}
button {
    clear:both;
    margin:0 10px 5px 10px;
	width: auto;
}
#textarea,label, input {
    border:0px;
    display:block;
    float:left;
    padding:0;
	  margin-left: 280px;
    #margin:0 3px 3px 3px;
    border: 1px solid magenta;
    font-family: gabriola;
}

button{
background: green; 
color: white; 
font-weight: bold;
}
input[type=submit]
{
background: green; 
color: white; 
font-weight: bold;
text-transform: uppercase;
width: 70px;
}
#login_form,#register_form
{
	width: 500px;
	background: #AAC4C5;
	border: 1px solid magenta;
	margin: 10px auto 0;
	padding: 1em;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
}
#profile
{
   width: 180px;
	background: #AAC4C5;
	border: 1px black;
	margin: 10px auto 0;
	padding: 1em;
	font-size: 9;
	float: right;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
}

h1,h2,h3,h4,h5
{
	margin-top: 0;
	text-align: center;
	color: #39898D;
	text-shadow: 0 1px 0 white;
}
h1
{
	font-size: 1.6em;
}
h3
{
font-size: 1.1em;	
}
input[type=text], input[type=dropdown], input[type=password], input[type=file], input[type=textarea],input[type=email],input[type=date]
{
	font-size: 14px;
	display: block;
	margin: 0 0 2em 0;
	width: 400px;
	border: 5px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	padding: 1em;
}
input[type=text]: focus input[type=password]:focus
{
	outline: none;
	box-shadow: 0px 0px 2pt #549396;
}
input:: webkit-input-placeholder
{
	color: #39898D;
}
input:: moz-input-placeholder
{
	color: #39898D;
}

input:: ms-input-placeholder
{
	color: #39898D;
}

input[type=submit]: hover, form a:hover
{
	background: #398980;
	cursor: pointer;
}
.error
{
	color: #393939;
	font-size: 15px;
}
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:12px;
	color:#333333;
	border-width: 1px solid #666666;
	border-collapse: collapse;

}
table.gridtable th {
	border: 1px solid #666666;
	padding: 4px;
	background:url(../../img/header_h3.gif) repeat-x;
}
table.gridtable td {
	padding: 4px;
	color:#000066;
	border-bottom:1px solid #b5b5b5;
	border-left:1px solid #b5b5b5;
}
table.gridtable tr.alt td{
background:#E3EAEA;
}
table.gridtable tr td{
background:#f9f9f9;
}
 table.gridtable tr:hover td{
border-bottom:1px solid #98C6EA;
background:#ECF7FF;
color:#000066;
}

table.gridtable tr{
border-left:1px solid #B5B5B5;
border-right:1px solid #B5B5B5;
border-bottom:1px solid #B5B5B5;
}
table {
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}

</style>
<link rel="shortcut icon" type="image/ico" href="http://localhost/CI/images/user-female.png">
</head>

<body>
<div id="header">
</div>
<div id="nav">
<ul class="nav nav-pills nav-justified" style="margin-left: 70px;">
<li class="active" style="background: lightblue;"><a href="/CI/index.php/login/home">home</a></li>
<li><a href="/CI/index.php/login/missing">missing PEOPLE </a></li>
<li><a href="/CI/index.php/login/signup">register</a></li>
<?php if($this->session->userdata('username')){ ?>
<li><a href="/CI/index.php/login/logout">logout</a></li>
<?php } ?>
<?php if(!$this->session->userdata('username')){ ?>
<li><a href="/CI/index.php/login/loginform">login</a></li>
<?php } ?>
<li><a href="/CI/index.php/login/contact_us">CONTACT US</a></li>
<li><a href="/CI/index.php/login/load_search">search </a></li>
</ul>
</div>
<div align="right" style="margin-right: 0px; width: 10%; float:left;  height: 75px;
 background: white;">
<?php
if($this->session->userdata('username')!=null)
{
mysql_connect("localhost","root","") or die("error");
mysql_select_db("missig_persons") or die("error");
$userdatax=$this->session->userdata('username');
$sql=mysql_query("select * from users where username='$userdatax' ");

while($row=mysql_fetch_array($sql))
{
?>
<span style="text-style: italic; color: red;">
<?php
echo "<em><b>".$row['first_name']."</em></b>"; echo "<br/>";
?>
</span>
<?php if ($row['photo']=="") {?>
<img src="http://localhost/CI/images/user-female.png" height="35" width="35">

<?php
} 
else {
?>
	<a href="/CI/index.php/login/edit"><img src="http://localhost/CI/images/<?php echo $row['photo']; ?>" height="50" width="50">
</a>
<?php }?>
<br/>


<?php
}}
?>

</div>
	<hr color="red">
<div align="CENTER">
</body>
</div>
