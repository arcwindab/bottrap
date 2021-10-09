<?php include_once __DIR__.'/../src/bottrap.class.php';

$botrap = new arcwindab\bottrap();
echo $botrap->email('test+prof@bot.example.com').'<hr>';

$botrap->set_obfuscate(false);
echo $botrap->email('test+prof@bot.example.com');
echo '<hr>';

$botrap->set_obfuscate(true);

$botrap->set_international(false);
echo $botrap->phone('+46 18 474 50 32');
$botrap->set_international(true);
echo '<br>';
echo $botrap->phone('+46 18 474 50 32');
echo '<hr>';

$botrap->set_international(false);
echo $botrap->phone('+46 77 114 14 00');
$botrap->set_international(true);
echo '<br>';
echo $botrap->phone('+46 77 114 14 00');