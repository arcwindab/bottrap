<?php include_once __DIR__.'/../src/bottrap.class.php';

$botrap = new arcwindab\bottrap();
echo $botrap->email('test+prof@bot.example.com').'<hr>';

$botrap->set_obfuscate(false);
echo $botrap->email('test+prof@bot.example.com');