<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Add New User</title>
<style>
@charset "utf-8";
/* CSS Document */

*
{
 margin:0;
 padding:0;
}
body
{
 color: black;
 background:#f9f9f9;
 font-family:"Courier New", Courier, monospace;
}
a {
	text-decoration: none;
	color: black;
}
#header
{
 width:100%;
 height:50px;
 font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
 font-size:35px;
 text-align:center;
}

#body
{
 margin-top:50px;
}
table
{
 width:80%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 margin-bottom:80px;

}
table a
{
 color: black;
 text-decoration:none;

}
table,td,th
{

 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #00a2d1 2px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
 
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #f9f9f9 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:black;
 padding:9px 15px 9px 15px;
 font-family:Arial, Helvetica, sans-serif;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}
table,th,td { border:3px solid black;}
</style>

</head>
<body style="background-image: url(http://localhost/exercise6/codeigniter/pics/databasebac.jpg);">

	<form method="post" action="<?php echo base_url();?>index.php/users/insert_users_db">
	
	<center>
<div id="body">
 <div id="content">
<table align="center">
    <tr>
		<td align="center"><a href="<?php echo base_url();?>index.php/users/">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="complete_name" placeholder="Full Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="cellno" placeholder="Cellphone Number" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="10" cols="144"></textarea>
	 </td>
    <tr>
    <td><button type="submit" name="btn-save" style="color: white;"><strong>SAVE</strong></button></td>
    </tr>
    </table>

</form>
    </div>
</div>
</center>

</body>

</html>