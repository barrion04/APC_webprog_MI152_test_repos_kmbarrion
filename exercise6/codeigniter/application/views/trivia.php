<html>
<head> <title> Trivias </title>
<style> 
ul{padding:1px;overflow:hidden;list-style-type:none;margin:0;}
li a{color:black;padding:10px;float:left;text-decoration:none;font-family:Lucida Handwriting;font-size:21px;}
li a:hover{background-color:black;color:white;font-size:21px;}
th,td,table{border:3px solid white;color:white;border-collapse:collapse;text-align:center;}
td,table{padding:75px;}
th{padding:19px;}
table{opacity:0.5}
table:hover{opacity:0.5;}
th:hover,td:hover{opacity:0.7;color:black;background-color:white;}
.pbackground{width:90%;height:100%;background-color:#643B0F;border:20px solid white;padding:5px;margin-left:50px;overflow:auto; }
.trivia1{margin-left:20px;}
#demo1,#demo2,#demo3,#demo4,#demo5 {font-size:22px;margin-left:177px;}
h1 {margin-left:170px;margin-top:100px;font-size:35px;}
button {margin-left:177px;}
th,td {line-height:5px;}
.image {position:relative;height:120px;border:7px solid black;margin-bot:10px;}
.yeah{background-color:white;margin-top:padding-top:10px;border:1px solid #643B0F; }
.3 {position:absolute;z-index:-3;margin-top:40px;}

</style>
</head>



<br>

<body background="http://localhost/exercise6/codeigniter/pics/background.jpg">

<center><img src="http://localhost/exercise6/codeigniter/pics/title.jpg" style="height:100px;width:100%;"></center>
<hr>
<ul>
<li><a href="<?php echo base_url();?>index.php/users/" target="_self"> Viewers Information </a></li>
<li><a href="<?php echo base_url();?>index.php/users/name" target="_self">Full Name</a></li>
<li><a href="<?php echo base_url();?>index.php/users/nick" target="_self">Nick Name</a></li>
<li><a href="<?php echo base_url();?>index.php/users/interest" target="_self">Interest</a></li>
<li><a href="<?php echo base_url();?>index.php/users/hobbies" target="_self">Hobbies</a></li>
<li><a href="<?php echo base_url();?>index.php/users/trivia" target="_self"> Trivias </a></li>
</ul>
<hr>
<div class="pbackground" >
<img class="image" src="http://localhost/exercise6/codeigniter/pics/trivia.PNG">
<div class="yeah">
<h1>1. What song mostly describes Kevin's Life?</h1>
<p id="demo1"></p>

<button type="button" onclick="document.getElementById('demo1').innerHTML = 'Tuloy Parin Ang Awit ng Buhay ko'">Click Me!</button>

<h1>2. 3 Things He can't live without </h1>

<p id="demo2"></p>

<button type="button" onclick="document.getElementById('demo2').innerHTML = 'God, Family, Friends'">Click Me!</button>

<h1>
 3. What annoys him?</h1>

<p id="demo3"></p>

<button type="button" onclick="document.getElementById('demo3').innerHTML = ' Boastful People'"> Click Me!</button>

<h1>4. His Favorite Band</h1>

<p id="demo4"></p>

<button type="button" onclick="document.getElementById('demo4').innerHTML = 'Boyce Avenue'">Click Me!</button>

<h1>5. Things he want to change about him</h1>

<p id="demo5"></p>

<button type="button" onclick="document.getElementById('demo5').innerHTML = 'Being Serious '">Click Me!</button>
</div>


<br>
<hr>

</body>


</html>