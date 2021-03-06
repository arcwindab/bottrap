<?php include_once __DIR__.'/../src/bottrap.class.php';

$bottrap = new arcwindab\bottrap();
echo $bottrap->email('test+prof@bot.example.com').'<hr>';
echo $bottrap->email('test+2@bot.example.com').'<hr>';

$bottrap->add_class('link');
$bottrap->set_copytext('Kopierat');
echo $bottrap->email('test@bot.example.com').'<hr>';

$bottrap->remove_classes();

$bottrap->set_obfuscate(false);
echo $bottrap->email('test+prof@bot.example.com');
echo '<hr>';

$bottrap->set_obfuscate(true);

$bottrap->set_international(false);
echo $bottrap->phone('+46 18 474 50 32');
$bottrap->set_international(true);
echo '<br>';
echo $bottrap->phone('+46 18 474 50 32');
echo '<hr>';

$bottrap->set_international(false);
echo $bottrap->phone('+46 77 114 14 00');
$bottrap->set_international(true);
echo '<br>';
echo $bottrap->phone('+46 77 114 14 00');
