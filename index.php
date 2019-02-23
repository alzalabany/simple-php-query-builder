<?php
require './orm/rb.php';

$DB = R::setup( 'mysql:host=localhost;dbname=iuni', 'root', '' );
echo "<pre>";

// $c = R::dispense( 'course' );
// $c->name = 'English';
// $c->color = 'Red';
// $c->picture = "https://about.ischooleg.com/imgs/logo.png";
// $id = R::store( $c );
// echo "$id created";
// print_r($c);
//
$term1 = R::findOne('topic', 1);
$course = R::findOne('course', 1);

$week1 = R::dispense( 'topic' );
$week1->title = "week 1";

$week2 = R::dispense( 'topic' );
$week2->title = "week 2";

$term1->ownTitles[] = $week1;
$term1->ownTitles[] = $week2;

$courses->ownContent[] = $week1;
$courses->ownContent[] = $week2;

R::store($week1);
R::store($week2);
R::store($course);

print_r($course->ownContent);



echo "</pre>";