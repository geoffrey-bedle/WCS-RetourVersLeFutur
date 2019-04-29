<?php
include 'TimeTravel.php';


$start = new DateTime("1985/12/31");
$end = new DateTime();

$time = new TimeTravel($start, $end);
echo $time->getTravelInfos();

$interval = new DateInterval('PT1000000000S');
echo '. La date est ' . $time->findDate($interval)->format(DATETIME::COOKIE) . '.';

$time->end=new DateTime('1985/12/31');
$steps=$time->backToTheFuturStepByStep(new DateInterval('P1M8D'));
var_dump($steps);


