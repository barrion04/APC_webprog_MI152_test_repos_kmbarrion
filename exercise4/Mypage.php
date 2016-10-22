<html>
<head>
<style> 
ul{padding:1px;overflow:hidden;list-style-type:none;margin:0;background-color:white;z-index:0;}
li a{color:black;padding:10px;float:left;text-decoration:none;font-family:Lucida Handwriting;font-size:21px;z-index:0;}
li a:hover{background-color:black;color:white;font-size:21px;}
th,td,table{border:6px solid white;color:white;border-collapse:collapse;text-align:center;}
td,table{padding:144px;}
table{opacity:0.5}
th{padding:55px;}

table:hover{opacity:1}
.form{margin-left:18%;line-height:30px;float:left;font-size:20px;}
.form2{position:absolute;margin-left:50%;margin-top:2%;font-size:20px;}
.result{position:absolute;margin-top:370px;margin-left:17%;}
.border1{background-color:gray;height:370px;width:600px;margin-left:4%;position:absolute;z-index:-2;opacity:0.7;margin-top:0px;}
.border2{background-color:gray;height:370px;width:620px;margin-left:49%;position:absolute;z-index:-2;opacity:0.7;}
.upborder{background-color:#BAA378;padding:10px;margin-left:4%;margin-right:4%;margin-bot:0px;}
.lowborder{background-color:#BAA378;height:280px;width:1228px;margin-left:4%;margin-top:380px;}
.backgroundall{background-color:black;width:99%;height:160%;position:absolute;z-index:-3;margin-right:100px;)
</style>
</head>
<div class="backgroundall">
</div>

<div class="bborder">
<br>
<body background="background.jpg">
<center><img src="title.jpg" style="height:100px;width:100%;"></center>
<hr>
<ul>
<li><a href="Mypage.php" target="self"> Viewers Information </a></li>
<li><a href="b.html" target="_self">Full Name</a></li>
<li><a href="c.html" target="_self">Nick Name</a></li>
<li><a href="d.html" target="_self">Interest</a></li>
<li><a href="e.html" target="_self">Hobbies</a></li>
<li><a href="f.html" target="_self"> Trivias </a></li>
</ul>
<hr>



<?php
// define variables and set to empty values
$lastnamErr = $firstnamErr =$midnamErr = $emailErr = $genderErr = $nicknamErr = $homeaddErr = $cellnoErr ="";
$lastname = $firstname=$midname= $email = $gender = $nickname = $homeadd= $cellno= $comment  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lastname"])) {
    $lastnamErr = "Last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnamErr = "Only letters/white space are allowed"; 
    }
  }
  
  if (empty($_POST["firstname"])) {
    $firstnamErr = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
   
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnamErr = "Only letters/white space are allowed"; 
    }
  }
  
  if (empty($_POST["midname"])) {
    $midnamErr = "Middle name is required";
  } else {
    $midname = test_input($_POST["midname"]);
 
    if (!preg_match("/^[a-zA-Z ]*$/",$midname)) {
      $midnamErr = "Only letters/white space are allowed"; 
    }
  }
  
   if (empty($_POST["nickname"])) {
    $nicknamErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
   
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknamErr = "Only letters/white space are allowed"; 
    }
  }
  
   if (empty($_POST["cellno"])) {
    $cellnoErr = "Cellphone number is required";
  } else {
    $cellno = test_input($_POST["cellno"]);
    
    if (!preg_match("/^[1-9][0-9]*$/",$cellno)) {
      $cellnoErr = "Only numbers are allowed"; 
    }
  }
  
$homeadd = test_input($_POST["homeadd"]);
  
    if (!preg_match("/[A-Za-z0-9]+/", $homeadd)) {
      $homeaddErr = "Only letters/ numbers/white space are allowed";
    }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<br>
<div class="upborder">

<h2 style="margin-left:17%;font-size:30px;z-index:0;"> Please Fill Up the Form Below </h2>
</div>
<div class="form">
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Last Name : <input type="text" name="lastname" value="<?php echo $lastname;?>">
  <span class="error">* <?php echo $lastnamErr;?></span>
  <br><br>
  First Name : <input type="text" name="firstname" value="<?php echo $firstname;?>">
  <span class="error">* <?php echo $firstnamErr;?></span>
  <br><br>
  Middle Name : <input type="text" name="midname" value="<?php echo $midname;?>">
  <span class="error">* <?php echo $midnamErr;?></span>
  <br><br>
  Nickname : <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknamErr;?></span>
  <br><br>
    Home Address : <input type="text" name="homeadd" value="<?php echo $homeadd;?>">
  <span class="error">(optional) <?php echo $homeaddErr;?></span>
  <br><br>
  </div>
 
  <div class="form2">
   <br>

	
	

  Cellphone Number: <input type="text" name="cellno" value="<?php echo $cellno;?>">
  <span class="error">* <?php echo $cellnoErr;?></span>
  <br><br>
  E-mail : <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment : <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <span class="error">(optional) </span>
  <br><br>
  Gender :
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
<div class="result">
<br>
<h1>Here's the result of the data you've inputted:</h1>

<?php

echo $lastname;
echo "<br>";
echo $firstname;
echo "<br>";
echo $midname;
echo "<br>";
echo $nickname;
echo "<br>";
echo $homeadd;
echo "<br>";
echo $cellno;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<br>
</div>

<br>
<div class="border1">
</div>
<div class="border2">
</div>
<div class="lowborder">
</div>

</body>





