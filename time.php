<?php

$presentTime = new DateTime('now');

$destinationTime = new DateTime();
$destinationTime->setDate('1999', '09', '27')->setTime('08', '55', '15');

echo $presentTime->format('M d Y H:i');

echo "\n";

echo $destinationTime->format('M d Y H:i');

echo "\n";

$interval = $presentTime->diff($destinationTime);
echo $interval->format('%Y years, %M months, %D days, %H hours, %I minutes');