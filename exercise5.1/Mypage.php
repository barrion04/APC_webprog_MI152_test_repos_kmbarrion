<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $complete_name = $_POST['complete_name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $cellno = $_POST['cellno'];
 $comment = $_POST['comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(complete_name,nickname,email,address,gender,cellno,comment) 
		VALUES('$complete_name','$nickname','$email','$address','$gender','$cellno','$comment')";
 mysqli_query($link, $sql_query);
        
        // sql query for inserting data into database
 
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Viewers Information</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<style>
ul{padding:1px;overflow:hidden;list-style-type:none;margin:0;}
li a{color:black;padding:10px;float:left;text-decoration:none;font-family:Lucida Handwriting;font-size:21px;}
li a:hover{background-color:black;color:white;font-size:21px;}
</style>
<body style="background-image: url(databac.jpg);">
<br>
<center><img src="title.jpg" style="height:100px;width:100%;"></center>
<br>
<hr>
<ul>
<li><a href="Mypage.php" target="self"> Viewers Information </a></li>
<li><a href="b.html" target="_self">Full Name</a></li>
<li><a href="c.html" target="_self">Nick Name</a></li>
<li><a href="d.html" target="_self">Interest</a></li>
<li><a href="e.html" target="_self">Hobbies</a></li>
<li><a href="g.html" target="_self"> Trivias </a></li>
</ul>
<hr>


<center>

<div id="header">

</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center" style="color:black;"> <a href="index.php ">back to main page</a></td>
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
    <td><input type="text" name="cellno" placeholder="Cellphone Number" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="8" cols="140"></textarea>
	 </td>
    <tr>
    <td><button type="submit" name="btn-save" style="color:white;"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>