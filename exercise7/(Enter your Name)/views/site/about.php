<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Photography';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
	<html>
	
<head>
<title> Photogorphy </title>
<style>
.picompile img {width:300px;height:300px;background-color:white;padding:10px;}
.picompile {margin-left:10%;}
</style>

</head>
<div class="picompile">
<img src="pictures\i1.jpg">
<img src="pictures\i2.jpg">
<img src="pictures\i3.jpg">
<img src="pictures\i4.jpg">
<img src="pictures\i5.jpg">
<img src="pictures\i6.jpg">
<img src="pictures\i7.jpg">
<img src="pictures\8.jpg">
<img src="pictures\i9.jpg">
<img src="pictures\i12.jpg">
<img src="pictures\i11.jpg">
<img src="pictures\i10.jpg">
</div>
</html>
    </p>

</div>
