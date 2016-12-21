<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Main Page</title>
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

<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>
<style>
div.container {
    width: 99%;
    height: 100%;
    border: 10px solid black;
}
header, footer {
    padding: 1em;
    color: black;
    background-color: black;
    clear: left;
    text-align: center;

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2em;
    overflow: auto;
	}


</style>
</head>

<body style="background-image: url(http://localhost/exercise6/codeigniter/pics/databac.jpg);">

<br>
<center><img src="http://localhost/exercise6/codeigniter/pics/title.jpg" style="height:100px;width:100%;"></center>
<br>

<ul style="list-style-type:none;border:1px solid black;margin-left:45px;" >
<li style="float:left;padding:2px;font-size:29px;padding:10px;"><a href="<?php echo base_url();?>index.php/users/" target="self"> Viewers Information </a></li>
<li style="float:left;padding:2px;font-size:29px;padding:10px;"><a href="<?php echo base_url();?>index.php/users/name" target="_self">Full Name</a></li>
<li style="float:left;padding:2px;font-size:29px;padding:10px;"><a href="<?php echo base_url();?>index.php/users/nick" target="_self">Nick Name</a></li>
<li style="float:left;padding:2px;font-size:29px;padding:10px;"><a href="<?php echo base_url();?>index.php/users/interest">Interest</a></li>
<li style="float:left;padding:2px;font-size:29px;padding:10px;"><a href="<?php echo base_url();?>index.php/users/hobbies" target="_self">Hobbies</a></li>
<li style="float:left;padding:2px;font-size:29px;padding:10px;"><a href="<?php echo base_url();?>index.php/users/trivia" target="_self"> Trivias </a></li>
</ul>




<center>
<br>
<br>
<br>
<br>
<div id="header">
 <div id="content">
    <label class="l">Database</label>
    </div>
</div>
<div id="body">
	<div id="content">
	<table align="center" style="width:80%;">
    <tr>
    <th colspan="9" style="background-color:white;"><a href="<?php echo base_url();?>index.php/users/add_form" target="_self">ADD DATA HERE.</a></th>
    </tr>
			<tr>
				<th>Complete Name</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th>Comment</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->complete_name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->email; ?></td>

				<td><?php echo $u_key->address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cellno; ?></td>
				
				<td><?php echo $u_key->comment; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>

</body>

</html>	