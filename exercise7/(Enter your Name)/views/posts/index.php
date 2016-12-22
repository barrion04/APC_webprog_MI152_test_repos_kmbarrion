<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Page';
$this->params['breadcrumbs'][] = 'Home';
?>
<html>
<head>
<style>
.header{height:280px;width:98%;background-color:white;padding:5px;margin-top:50px;}
.body{height:230px;width:98%;background-color:white;padding:7px;font-size:16px;border:4px solid white;margin-top:30px;}
#dog {position:absolute;margin-left:88%;margin-top:300px;}
.post-index{background-color:white;padding:10px;width:98%;}
.Trivias{background-color:white;padding:10px;width:98%;margin-top:10px;}

</style>
</head>
<body>
<img id="dog" src="pictures\dog.gif" style="width:100px;height:100px;">
<div class="header">
<img src="pictures\1.jpg" style="width:270px;height:270px;">
<img src="pictures\2.jpg" style="width:270px;height:270px;">
<img src="pictures\4.jpg" style="width:270px;height:270px;">
<img src="pictures\3.jpg" style="width:270px;height:270px;">
</div>

<div class="body">
<p> Hi My name is Kevin Barrion, my friends call me aka Kevs. I was born on January 4,1999.I'm already 17 years old a 2nd year college student taking Bachelor of Science major in Information Technology who especialize Mobile and Internet Technology,studying in ASIA PACIFIC COLLEGE. I take this course because we all knew that IT is one of the most indemand job of this present generation and I know it will last longer for a longer time of period. I'm a kind of person who wants to play all the time using gadgets or other stuff of technology that's why at some point there's a question that comes into my mind "What algorithm or progam they did to do this application/software?" so this also one of the factor why I used to take this course. I really want to learn everything more on Technology but I can't because of my laziness. Though I must pursue what my objective is d.Every term I learned something new, now I know how to model databases,know how to use javascript,html,css,php,and sql.When I graduated as an IT especialist , I also pursue my dream and that is to become a Veterinarian , I really love to handle all types of animals especially exotic pets.I also like researching their behavior or acts. This are my dream that I wanted and also my hobbies. Thanks sorry for the interruption :)  Thanks for your time also. Hope you like it!</p>
</div>
</html>


<hr>


<div class="post-index">

    <h1><?= Html::encode('Forms') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'slug',
            'lastname',
            'midname',
            // 'nickname',
            // 'email:email',
            // 'homeadd',
            // 'gender',
            // 'comment:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>
<hr>
<div class="Trivias">
<h1>Trivias</h1>
<br>
<ul>
<?php foreach ($trivias as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->question}") ?>:</strong>
		<br></br>	
		<answers style=display:none><?= $trivia->answer ?></answers>
		<br></br>	
    </li>	
<?php endforeach; ?>
<button id="show">Show all answer</button>
</ul>
</div>
