<?php include_once __DIR__.'/../src/bottrap.class.php';

$botrap = new arcwindab\bottrap();

$botrap->set_international(false);
echo $botrap->phone('+46 18 474 50 32');
$botrap->set_international(true);
echo '<br>';
echo $botrap->phone('+46 18 474 50 32');