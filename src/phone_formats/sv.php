<?php 
$len       = strlen($phone);
$substr    = array();
$substr[4] = substr($phone, 0, 4);
$substr[5] = substr($phone, 0, 5);
$substr[6] = substr($phone, 0, 6);

if(($found['number'] == '') && (($substr[4] === '+467') && ($len == 12))) {
   //Mobil (07) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mobil', 'region' => '', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[4] === '+468') && ($len == 10))) {
   //Stockholm in Stockholms län (08) : 10 digit
   $num  = substr($phone, 3, 1) . ' - ' . substr($phone, 4, 2) . ' ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stockholm', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[4] === '+468') && ($len == 11))) {
   //Stockholm in Stockholms län (08) : 11 digit
   $num = substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stockholm', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[4] === '+468') && ($len == 12))) {
   //Stockholm in Stockholms län (08) : 12 digit
   $num = substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stockholm', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[4] === '+468') && ($len == 13))) {
   //Stockholm in Stockholms län (08) : 13 digit
   $num = substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stockholm', 'region' => 'Stockholms län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4611') && ($len == 11))) {
   //Norrköping in Östergötlands län (011) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4611') && ($len == 12))) {
   //Norrköping in Östergötlands län (011) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4611') && ($len == 13))) {
   //Norrköping in Östergötlands län (011) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4611') && ($len == 14))) {
   //Norrköping in Östergötlands län (011) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4613') && ($len == 11))) {
   //Linköping in Östergötlands län (013) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Linköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4613') && ($len == 12))) {
   //Linköping in Östergötlands län (013) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Linköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4613') && ($len == 13))) {
   //Linköping in Östergötlands län (013) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Linköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4613') && ($len == 14))) {
   //Linköping in Östergötlands län (013) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Linköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4616') && ($len == 11))) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eskilstuna-Torshälla', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4616') && ($len == 12))) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eskilstuna-Torshälla', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4616') && ($len == 13))) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eskilstuna-Torshälla', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4616') && ($len == 14))) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eskilstuna-Torshälla', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4618') && ($len == 11))) {
   //Uppsala in Uppsala län (018) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uppsala', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4618') && ($len == 12))) {
   //Uppsala in Uppsala län (018) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uppsala', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4618') && ($len == 13))) {
   //Uppsala in Uppsala län (018) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uppsala', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4618') && ($len == 14))) {
   //Uppsala in Uppsala län (018) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uppsala', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4619') && ($len == 11))) {
   //Örebro-Kumla in Örebro län (019) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örebro-Kumla', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4619') && ($len == 12))) {
   //Örebro-Kumla in Örebro län (019) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örebro-Kumla', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4619') && ($len == 13))) {
   //Örebro-Kumla in Örebro län (019) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örebro-Kumla', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4619') && ($len == 14))) {
   //Örebro-Kumla in Örebro län (019) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örebro-Kumla', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4621') && ($len == 11))) {
   //Västerås in Västmanlands län (021) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västerås', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4621') && ($len == 12))) {
   //Västerås in Västmanlands län (021) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västerås', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4621') && ($len == 13))) {
   //Västerås in Västmanlands län (021) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västerås', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4621') && ($len == 14))) {
   //Västerås in Västmanlands län (021) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västerås', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4623') && ($len == 11))) {
   //Falun in Dalarnas län (023) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falun', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4623') && ($len == 12))) {
   //Falun in Dalarnas län (023) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falun', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4623') && ($len == 13))) {
   //Falun in Dalarnas län (023) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falun', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4623') && ($len == 14))) {
   //Falun in Dalarnas län (023) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falun', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4626') && ($len == 11))) {
   //Gävle-Sandviken in Gävleborgs län (026) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gävle-Sandviken', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4626') && ($len == 12))) {
   //Gävle-Sandviken in Gävleborgs län (026) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gävle-Sandviken', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4626') && ($len == 13))) {
   //Gävle-Sandviken in Gävleborgs län (026) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gävle-Sandviken', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4626') && ($len == 14))) {
   //Gävle-Sandviken in Gävleborgs län (026) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gävle-Sandviken', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4631') && ($len == 11))) {
   //Göteborg in Västra Götalands län (031) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Göteborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4631') && ($len == 12))) {
   //Göteborg in Västra Götalands län (031) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Göteborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4631') && ($len == 13))) {
   //Göteborg in Västra Götalands län (031) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Göteborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4631') && ($len == 14))) {
   //Göteborg in Västra Götalands län (031) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Göteborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4633') && ($len == 11))) {
   //Borås in Västra Götalands län (033) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4633') && ($len == 12))) {
   //Borås in Västra Götalands län (033) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4633') && ($len == 13))) {
   //Borås in Västra Götalands län (033) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4633') && ($len == 14))) {
   //Borås in Västra Götalands län (033) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4635') && ($len == 11))) {
   //Halmstad in Hallands län (035) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Halmstad', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4635') && ($len == 12))) {
   //Halmstad in Hallands län (035) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Halmstad', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4635') && ($len == 13))) {
   //Halmstad in Hallands län (035) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Halmstad', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4635') && ($len == 14))) {
   //Halmstad in Hallands län (035) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Halmstad', 'region' => 'Hallands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4636') && ($len == 11))) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jönköping-Huskvarna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4636') && ($len == 12))) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jönköping-Huskvarna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4636') && ($len == 13))) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jönköping-Huskvarna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4636') && ($len == 14))) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jönköping-Huskvarna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4640') && ($len == 11))) {
   //Malmö in Skåne län (040) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malmö', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4640') && ($len == 12))) {
   //Malmö in Skåne län (040) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malmö', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4640') && ($len == 13))) {
   //Malmö in Skåne län (040) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malmö', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4640') && ($len == 14))) {
   //Malmö in Skåne län (040) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malmö', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4642') && ($len == 11))) {
   //Helsingborg-Höganäs in Skåne län (042) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Helsingborg-Höganäs', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4642') && ($len == 12))) {
   //Helsingborg-Höganäs in Skåne län (042) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Helsingborg-Höganäs', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4642') && ($len == 13))) {
   //Helsingborg-Höganäs in Skåne län (042) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Helsingborg-Höganäs', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4642') && ($len == 14))) {
   //Helsingborg-Höganäs in Skåne län (042) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Helsingborg-Höganäs', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4644') && ($len == 11))) {
   //Kristianstad in Skåne län (044) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristianstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4644') && ($len == 12))) {
   //Kristianstad in Skåne län (044) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristianstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4644') && ($len == 13))) {
   //Kristianstad in Skåne län (044) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristianstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4644') && ($len == 14))) {
   //Kristianstad in Skåne län (044) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristianstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4646') && ($len == 11))) {
   //Lund in Skåne län (046) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lund', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4646') && ($len == 12))) {
   //Lund in Skåne län (046) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lund', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4646') && ($len == 13))) {
   //Lund in Skåne län (046) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lund', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4646') && ($len == 14))) {
   //Lund in Skåne län (046) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lund', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4654') && ($len == 11))) {
   //Karlstad in Värmlands län (054) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4654') && ($len == 12))) {
   //Karlstad in Värmlands län (054) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4654') && ($len == 13))) {
   //Karlstad in Värmlands län (054) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4654') && ($len == 14))) {
   //Karlstad in Värmlands län (054) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4660') && ($len == 11))) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sundsvall-Timrå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4660') && ($len == 12))) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sundsvall-Timrå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4660') && ($len == 13))) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sundsvall-Timrå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4660') && ($len == 14))) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sundsvall-Timrå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4663') && ($len == 11))) {
   //Östersund in Jämtlands län (063) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Östersund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4663') && ($len == 12))) {
   //Östersund in Jämtlands län (063) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Östersund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4663') && ($len == 13))) {
   //Östersund in Jämtlands län (063) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Östersund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4663') && ($len == 14))) {
   //Östersund in Jämtlands län (063) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Östersund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[5] === '+4690') && ($len == 11))) {
   //Umeå in Västerbottens län (090) : 10 digit
   $num  = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Umeå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4690') && ($len == 12))) {
   //Umeå in Västerbottens län (090) : 11 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Umeå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4690') && ($len == 13))) {
   //Umeå in Västerbottens län (090) : 12 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Umeå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[5] === '+4690') && ($len == 14))) {
   //Umeå in Västerbottens län (090) : 13 digit
   $num = substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Umeå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46120') && ($len == 12))) {
   //Åtvidaberg in Östergötlands län (0120) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åtvidaberg', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46120') && ($len == 13))) {
   //Åtvidaberg in Östergötlands län (0120) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åtvidaberg', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46120') && ($len == 14))) {
   //Åtvidaberg in Östergötlands län (0120) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åtvidaberg', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46120') && ($len == 15))) {
   //Åtvidaberg in Östergötlands län (0120) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åtvidaberg', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46121') && ($len == 12))) {
   //Söderköping in Östergötlands län (0121) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46121') && ($len == 13))) {
   //Söderköping in Östergötlands län (0121) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46121') && ($len == 14))) {
   //Söderköping in Östergötlands län (0121) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46121') && ($len == 15))) {
   //Söderköping in Östergötlands län (0121) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderköping', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46122') && ($len == 12))) {
   //Finspång in Östergötlands län (0122) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Finspång', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46122') && ($len == 13))) {
   //Finspång in Östergötlands län (0122) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Finspång', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46122') && ($len == 14))) {
   //Finspång in Östergötlands län (0122) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Finspång', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46122') && ($len == 15))) {
   //Finspång in Östergötlands län (0122) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Finspång', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46123') && ($len == 12))) {
   //Valdemarsvik in Östergötlands län (0123) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Valdemarsvik', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46123') && ($len == 13))) {
   //Valdemarsvik in Östergötlands län (0123) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Valdemarsvik', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46123') && ($len == 14))) {
   //Valdemarsvik in Östergötlands län (0123) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Valdemarsvik', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46123') && ($len == 15))) {
   //Valdemarsvik in Östergötlands län (0123) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Valdemarsvik', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46125') && ($len == 12))) {
   //Vikbolandet in Östergötlands län (0125) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vikbolandet', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46125') && ($len == 13))) {
   //Vikbolandet in Östergötlands län (0125) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vikbolandet', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46125') && ($len == 14))) {
   //Vikbolandet in Östergötlands län (0125) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vikbolandet', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46125') && ($len == 15))) {
   //Vikbolandet in Östergötlands län (0125) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vikbolandet', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46140') && ($len == 12))) {
   //Tranås in Jönköpings län (0140) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tranås', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46140') && ($len == 13))) {
   //Tranås in Jönköpings län (0140) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tranås', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46140') && ($len == 14))) {
   //Tranås in Jönköpings län (0140) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tranås', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46140') && ($len == 15))) {
   //Tranås in Jönköpings län (0140) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tranås', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46141') && ($len == 12))) {
   //Motala in Östergötlands län (0141) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Motala', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46141') && ($len == 13))) {
   //Motala in Östergötlands län (0141) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Motala', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46141') && ($len == 14))) {
   //Motala in Östergötlands län (0141) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Motala', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46141') && ($len == 15))) {
   //Motala in Östergötlands län (0141) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Motala', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46142') && ($len == 12))) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mjölby-Skänninge-Boxholm', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46142') && ($len == 13))) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mjölby-Skänninge-Boxholm', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46142') && ($len == 14))) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mjölby-Skänninge-Boxholm', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46142') && ($len == 15))) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mjölby-Skänninge-Boxholm', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46143') && ($len == 12))) {
   //Vadstena in Östergötlands län (0143) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vadstena', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46143') && ($len == 13))) {
   //Vadstena in Östergötlands län (0143) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vadstena', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46143') && ($len == 14))) {
   //Vadstena in Östergötlands län (0143) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vadstena', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46143') && ($len == 15))) {
   //Vadstena in Östergötlands län (0143) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vadstena', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46144') && ($len == 12))) {
   //Ödeshög in Östergötlands län (0144) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ödeshög', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46144') && ($len == 13))) {
   //Ödeshög in Östergötlands län (0144) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ödeshög', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46144') && ($len == 14))) {
   //Ödeshög in Östergötlands län (0144) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ödeshög', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46144') && ($len == 15))) {
   //Ödeshög in Östergötlands län (0144) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ödeshög', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46150') && ($len == 12))) {
   //Katrineholm in Södermanlands län (0150) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Katrineholm', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46150') && ($len == 13))) {
   //Katrineholm in Södermanlands län (0150) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Katrineholm', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46150') && ($len == 14))) {
   //Katrineholm in Södermanlands län (0150) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Katrineholm', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46150') && ($len == 15))) {
   //Katrineholm in Södermanlands län (0150) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Katrineholm', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46151') && ($len == 12))) {
   //Vingåker in Södermanlands län (0151) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vingåker', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46151') && ($len == 13))) {
   //Vingåker in Södermanlands län (0151) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vingåker', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46151') && ($len == 14))) {
   //Vingåker in Södermanlands län (0151) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vingåker', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46151') && ($len == 15))) {
   //Vingåker in Södermanlands län (0151) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vingåker', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46152') && ($len == 12))) {
   //Strängnäs in Södermanlands län (0152) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strängnäs', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46152') && ($len == 13))) {
   //Strängnäs in Södermanlands län (0152) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strängnäs', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46152') && ($len == 14))) {
   //Strängnäs in Södermanlands län (0152) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strängnäs', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46152') && ($len == 15))) {
   //Strängnäs in Södermanlands län (0152) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strängnäs', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46155') && ($len == 12))) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nyköping-Oxelösund', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46155') && ($len == 13))) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nyköping-Oxelösund', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46155') && ($len == 14))) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nyköping-Oxelösund', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46155') && ($len == 15))) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nyköping-Oxelösund', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46156') && ($len == 12))) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trosa-Vagnhärad', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46156') && ($len == 13))) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trosa-Vagnhärad', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46156') && ($len == 14))) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trosa-Vagnhärad', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46156') && ($len == 15))) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trosa-Vagnhärad', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46157') && ($len == 12))) {
   //Flen-Malmköping in Södermanlands län (0157) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Flen-Malmköping', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46157') && ($len == 13))) {
   //Flen-Malmköping in Södermanlands län (0157) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Flen-Malmköping', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46157') && ($len == 14))) {
   //Flen-Malmköping in Södermanlands län (0157) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Flen-Malmköping', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46157') && ($len == 15))) {
   //Flen-Malmköping in Södermanlands län (0157) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Flen-Malmköping', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46158') && ($len == 12))) {
   //Gnesta in Södermanlands län (0158) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gnesta', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46158') && ($len == 13))) {
   //Gnesta in Södermanlands län (0158) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gnesta', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46158') && ($len == 14))) {
   //Gnesta in Södermanlands län (0158) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gnesta', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46158') && ($len == 15))) {
   //Gnesta in Södermanlands län (0158) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gnesta', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46159') && ($len == 12))) {
   //Mariefred in Södermanlands län (0159) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariefred', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46159') && ($len == 13))) {
   //Mariefred in Södermanlands län (0159) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariefred', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46159') && ($len == 14))) {
   //Mariefred in Södermanlands län (0159) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariefred', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46159') && ($len == 15))) {
   //Mariefred in Södermanlands län (0159) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariefred', 'region' => 'Södermanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46171') && ($len == 12))) {
   //Enköping in Uppsala län (0171) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Enköping', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46171') && ($len == 13))) {
   //Enköping in Uppsala län (0171) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Enköping', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46171') && ($len == 14))) {
   //Enköping in Uppsala län (0171) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Enköping', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46171') && ($len == 15))) {
   //Enköping in Uppsala län (0171) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Enköping', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46173') && ($len == 12))) {
   //Öregrund-Östhammar in Uppsala län (0173) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öregrund-Östhammar', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46173') && ($len == 13))) {
   //Öregrund-Östhammar in Uppsala län (0173) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öregrund-Östhammar', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46173') && ($len == 14))) {
   //Öregrund-Östhammar in Uppsala län (0173) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öregrund-Östhammar', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46173') && ($len == 15))) {
   //Öregrund-Östhammar in Uppsala län (0173) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öregrund-Östhammar', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46174') && ($len == 12))) {
   //Alunda in Uppsala län (0174) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alunda', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46174') && ($len == 13))) {
   //Alunda in Uppsala län (0174) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alunda', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46174') && ($len == 14))) {
   //Alunda in Uppsala län (0174) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alunda', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46174') && ($len == 15))) {
   //Alunda in Uppsala län (0174) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alunda', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46175') && ($len == 12))) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstavik-Rimbo', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46175') && ($len == 13))) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstavik-Rimbo', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46175') && ($len == 14))) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstavik-Rimbo', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46175') && ($len == 15))) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstavik-Rimbo', 'region' => 'Stockholms län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46176') && ($len == 12))) {
   //Norrtälje in Stockholms län (0176) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrtälje', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46176') && ($len == 13))) {
   //Norrtälje in Stockholms län (0176) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrtälje', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46176') && ($len == 14))) {
   //Norrtälje in Stockholms län (0176) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrtälje', 'region' => 'Stockholms län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46176') && ($len == 15))) {
   //Norrtälje in Stockholms län (0176) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norrtälje', 'region' => 'Stockholms län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46220') && ($len == 12))) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstahammar-Surahammar', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46220') && ($len == 13))) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstahammar-Surahammar', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46220') && ($len == 14))) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstahammar-Surahammar', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46220') && ($len == 15))) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallstahammar-Surahammar', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46221') && ($len == 12))) {
   //Köping in Västmanlands län (0221) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Köping', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46221') && ($len == 13))) {
   //Köping in Västmanlands län (0221) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Köping', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46221') && ($len == 14))) {
   //Köping in Västmanlands län (0221) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Köping', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46221') && ($len == 15))) {
   //Köping in Västmanlands län (0221) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Köping', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46222') && ($len == 12))) {
   //Skinnskatteberg in Västmanlands län (0222) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skinnskatteberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46222') && ($len == 13))) {
   //Skinnskatteberg in Västmanlands län (0222) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skinnskatteberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46222') && ($len == 14))) {
   //Skinnskatteberg in Västmanlands län (0222) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skinnskatteberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46222') && ($len == 15))) {
   //Skinnskatteberg in Västmanlands län (0222) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skinnskatteberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46223') && ($len == 12))) {
   //Fagersta-Norberg in Västmanlands län (0223) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fagersta-Norberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46223') && ($len == 13))) {
   //Fagersta-Norberg in Västmanlands län (0223) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fagersta-Norberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46223') && ($len == 14))) {
   //Fagersta-Norberg in Västmanlands län (0223) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fagersta-Norberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46223') && ($len == 15))) {
   //Fagersta-Norberg in Västmanlands län (0223) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fagersta-Norberg', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46224') && ($len == 12))) {
   //Sala-Heby in Västmanlands län (0224) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sala-Heby', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46224') && ($len == 13))) {
   //Sala-Heby in Västmanlands län (0224) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sala-Heby', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46224') && ($len == 14))) {
   //Sala-Heby in Västmanlands län (0224) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sala-Heby', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46224') && ($len == 15))) {
   //Sala-Heby in Västmanlands län (0224) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sala-Heby', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46225') && ($len == 12))) {
   //Hedemora-Säter in Dalarnas län (0225) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedemora-Säter', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46225') && ($len == 13))) {
   //Hedemora-Säter in Dalarnas län (0225) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedemora-Säter', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46225') && ($len == 14))) {
   //Hedemora-Säter in Dalarnas län (0225) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedemora-Säter', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46225') && ($len == 15))) {
   //Hedemora-Säter in Dalarnas län (0225) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedemora-Säter', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46226') && ($len == 12))) {
   //Avesta-Krylbo in Dalarnas län (0226) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Avesta-Krylbo', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46226') && ($len == 13))) {
   //Avesta-Krylbo in Dalarnas län (0226) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Avesta-Krylbo', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46226') && ($len == 14))) {
   //Avesta-Krylbo in Dalarnas län (0226) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Avesta-Krylbo', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46226') && ($len == 15))) {
   //Avesta-Krylbo in Dalarnas län (0226) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Avesta-Krylbo', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46227') && ($len == 12))) {
   //Kungsör in Västmanlands län (0227) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsör', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46227') && ($len == 13))) {
   //Kungsör in Västmanlands län (0227) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsör', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46227') && ($len == 14))) {
   //Kungsör in Västmanlands län (0227) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsör', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46227') && ($len == 15))) {
   //Kungsör in Västmanlands län (0227) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsör', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46240') && ($len == 12))) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ludvika-Smedjebacken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46240') && ($len == 13))) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ludvika-Smedjebacken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46240') && ($len == 14))) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ludvika-Smedjebacken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46240') && ($len == 15))) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ludvika-Smedjebacken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46241') && ($len == 12))) {
   //Gagnef-Floda in Dalarnas län (0241) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gagnef-Floda', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46241') && ($len == 13))) {
   //Gagnef-Floda in Dalarnas län (0241) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gagnef-Floda', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46241') && ($len == 14))) {
   //Gagnef-Floda in Dalarnas län (0241) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gagnef-Floda', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46241') && ($len == 15))) {
   //Gagnef-Floda in Dalarnas län (0241) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gagnef-Floda', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46243') && ($len == 12))) {
   //Borlänge in Dalarnas län (0243) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borlänge', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46243') && ($len == 13))) {
   //Borlänge in Dalarnas län (0243) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borlänge', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46243') && ($len == 14))) {
   //Borlänge in Dalarnas län (0243) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borlänge', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46243') && ($len == 15))) {
   //Borlänge in Dalarnas län (0243) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Borlänge', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46246') && ($len == 12))) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svärdsjö-Enviken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46246') && ($len == 13))) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svärdsjö-Enviken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46246') && ($len == 14))) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svärdsjö-Enviken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46246') && ($len == 15))) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svärdsjö-Enviken', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46247') && ($len == 12))) {
   //Leksand-Insjön in Dalarnas län (0247) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Leksand-Insjön', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46247') && ($len == 13))) {
   //Leksand-Insjön in Dalarnas län (0247) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Leksand-Insjön', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46247') && ($len == 14))) {
   //Leksand-Insjön in Dalarnas län (0247) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Leksand-Insjön', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46247') && ($len == 15))) {
   //Leksand-Insjön in Dalarnas län (0247) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Leksand-Insjön', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46248') && ($len == 12))) {
   //Rättvik in Dalarnas län (0248) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rättvik', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46248') && ($len == 13))) {
   //Rättvik in Dalarnas län (0248) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rättvik', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46248') && ($len == 14))) {
   //Rättvik in Dalarnas län (0248) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rättvik', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46248') && ($len == 15))) {
   //Rättvik in Dalarnas län (0248) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rättvik', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46250') && ($len == 12))) {
   //Mora-Orsa in Dalarnas län (0250) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mora-Orsa', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46250') && ($len == 13))) {
   //Mora-Orsa in Dalarnas län (0250) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mora-Orsa', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46250') && ($len == 14))) {
   //Mora-Orsa in Dalarnas län (0250) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mora-Orsa', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46250') && ($len == 15))) {
   //Mora-Orsa in Dalarnas län (0250) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mora-Orsa', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46251') && ($len == 12))) {
   //Älvdalen in Dalarnas län (0251) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvdalen', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46251') && ($len == 13))) {
   //Älvdalen in Dalarnas län (0251) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvdalen', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46251') && ($len == 14))) {
   //Älvdalen in Dalarnas län (0251) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvdalen', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46251') && ($len == 15))) {
   //Älvdalen in Dalarnas län (0251) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvdalen', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46253') && ($len == 12))) {
   //Idre-Särna in Dalarnas län (0253) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Idre-Särna', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46253') && ($len == 13))) {
   //Idre-Särna in Dalarnas län (0253) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Idre-Särna', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46253') && ($len == 14))) {
   //Idre-Särna in Dalarnas län (0253) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Idre-Särna', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46253') && ($len == 15))) {
   //Idre-Särna in Dalarnas län (0253) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Idre-Särna', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46258') && ($len == 12))) {
   //Furudal in Dalarnas län (0258) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Furudal', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46258') && ($len == 13))) {
   //Furudal in Dalarnas län (0258) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Furudal', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46258') && ($len == 14))) {
   //Furudal in Dalarnas län (0258) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Furudal', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46258') && ($len == 15))) {
   //Furudal in Dalarnas län (0258) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Furudal', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46270') && ($len == 12))) {
   //Söderhamn in Gävleborgs län (0270) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderhamn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46270') && ($len == 13))) {
   //Söderhamn in Gävleborgs län (0270) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderhamn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46270') && ($len == 14))) {
   //Söderhamn in Gävleborgs län (0270) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderhamn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46270') && ($len == 15))) {
   //Söderhamn in Gävleborgs län (0270) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Söderhamn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46271') && ($len == 12))) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alfta-Edsbyn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46271') && ($len == 13))) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alfta-Edsbyn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46271') && ($len == 14))) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alfta-Edsbyn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46271') && ($len == 15))) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alfta-Edsbyn', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46278') && ($len == 12))) {
   //Bollnäs in Gävleborgs län (0278) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bollnäs', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46278') && ($len == 13))) {
   //Bollnäs in Gävleborgs län (0278) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bollnäs', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46278') && ($len == 14))) {
   //Bollnäs in Gävleborgs län (0278) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bollnäs', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46278') && ($len == 15))) {
   //Bollnäs in Gävleborgs län (0278) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bollnäs', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46280') && ($len == 12))) {
   //Malung in Dalarnas län (0280) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malung', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46280') && ($len == 13))) {
   //Malung in Dalarnas län (0280) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malung', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46280') && ($len == 14))) {
   //Malung in Dalarnas län (0280) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malung', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46280') && ($len == 15))) {
   //Malung in Dalarnas län (0280) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malung', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46281') && ($len == 12))) {
   //Vansbro in Dalarnas län (0281) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vansbro', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46281') && ($len == 13))) {
   //Vansbro in Dalarnas län (0281) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vansbro', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46281') && ($len == 14))) {
   //Vansbro in Dalarnas län (0281) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vansbro', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46281') && ($len == 15))) {
   //Vansbro in Dalarnas län (0281) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vansbro', 'region' => 'Dalarnas län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46290') && ($len == 12))) {
   //Hofors-Storvik in Gävleborgs län (0290) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hofors-Storvik', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46290') && ($len == 13))) {
   //Hofors-Storvik in Gävleborgs län (0290) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hofors-Storvik', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46290') && ($len == 14))) {
   //Hofors-Storvik in Gävleborgs län (0290) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hofors-Storvik', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46290') && ($len == 15))) {
   //Hofors-Storvik in Gävleborgs län (0290) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hofors-Storvik', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46291') && ($len == 12))) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedesunda-Österfärnebo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46291') && ($len == 13))) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedesunda-Österfärnebo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46291') && ($len == 14))) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedesunda-Österfärnebo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46291') && ($len == 15))) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hedesunda-Österfärnebo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46292') && ($len == 12))) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnsjö-Östervåla', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46292') && ($len == 13))) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnsjö-Östervåla', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46292') && ($len == 14))) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnsjö-Östervåla', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46292') && ($len == 15))) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnsjö-Östervåla', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46293') && ($len == 12))) {
   //Tierp-Söderfors in Uppsala län (0293) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tierp-Söderfors', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46293') && ($len == 13))) {
   //Tierp-Söderfors in Uppsala län (0293) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tierp-Söderfors', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46293') && ($len == 14))) {
   //Tierp-Söderfors in Uppsala län (0293) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tierp-Söderfors', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46293') && ($len == 15))) {
   //Tierp-Söderfors in Uppsala län (0293) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tierp-Söderfors', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46294') && ($len == 12))) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsholmsbruk-Skärplinge', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46294') && ($len == 13))) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsholmsbruk-Skärplinge', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46294') && ($len == 14))) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsholmsbruk-Skärplinge', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46294') && ($len == 15))) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsholmsbruk-Skärplinge', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46295') && ($len == 12))) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örbyhus-Dannemora', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46295') && ($len == 13))) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örbyhus-Dannemora', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46295') && ($len == 14))) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örbyhus-Dannemora', 'region' => 'Uppsala län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46295') && ($len == 15))) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örbyhus-Dannemora', 'region' => 'Uppsala län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46297') && ($len == 12))) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ockelbo-Hamrånge', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46297') && ($len == 13))) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ockelbo-Hamrånge', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46297') && ($len == 14))) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ockelbo-Hamrånge', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46297') && ($len == 15))) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ockelbo-Hamrånge', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46300') && ($len == 12))) {
   //Kungsbacka in Hallands län (0300) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsbacka', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46300') && ($len == 13))) {
   //Kungsbacka in Hallands län (0300) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsbacka', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46300') && ($len == 14))) {
   //Kungsbacka in Hallands län (0300) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsbacka', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46300') && ($len == 15))) {
   //Kungsbacka in Hallands län (0300) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungsbacka', 'region' => 'Hallands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46301') && ($len == 12))) {
   //Hindås in Västra Götalands län (0301) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hindås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46301') && ($len == 13))) {
   //Hindås in Västra Götalands län (0301) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hindås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46301') && ($len == 14))) {
   //Hindås in Västra Götalands län (0301) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hindås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46301') && ($len == 15))) {
   //Hindås in Västra Götalands län (0301) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hindås', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46302') && ($len == 12))) {
   //Lerum in Västra Götalands län (0302) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lerum', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46302') && ($len == 13))) {
   //Lerum in Västra Götalands län (0302) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lerum', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46302') && ($len == 14))) {
   //Lerum in Västra Götalands län (0302) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lerum', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46302') && ($len == 15))) {
   //Lerum in Västra Götalands län (0302) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lerum', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46303') && ($len == 12))) {
   //Kungälv in Västra Götalands län (0303) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungälv', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46303') && ($len == 13))) {
   //Kungälv in Västra Götalands län (0303) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungälv', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46303') && ($len == 14))) {
   //Kungälv in Västra Götalands län (0303) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungälv', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46303') && ($len == 15))) {
   //Kungälv in Västra Götalands län (0303) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kungälv', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46304') && ($len == 12))) {
   //Orust-Tjörn in Västra Götalands län (0304) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Orust-Tjörn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46304') && ($len == 13))) {
   //Orust-Tjörn in Västra Götalands län (0304) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Orust-Tjörn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46304') && ($len == 14))) {
   //Orust-Tjörn in Västra Götalands län (0304) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Orust-Tjörn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46304') && ($len == 15))) {
   //Orust-Tjörn in Västra Götalands län (0304) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Orust-Tjörn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46320') && ($len == 12))) {
   //Kinna in Västra Götalands län (0320) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kinna', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46320') && ($len == 13))) {
   //Kinna in Västra Götalands län (0320) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kinna', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46320') && ($len == 14))) {
   //Kinna in Västra Götalands län (0320) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kinna', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46320') && ($len == 15))) {
   //Kinna in Västra Götalands län (0320) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kinna', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46321') && ($len == 12))) {
   //Ulricehamn in Västra Götalands län (0321) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ulricehamn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46321') && ($len == 13))) {
   //Ulricehamn in Västra Götalands län (0321) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ulricehamn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46321') && ($len == 14))) {
   //Ulricehamn in Västra Götalands län (0321) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ulricehamn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46321') && ($len == 15))) {
   //Ulricehamn in Västra Götalands län (0321) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ulricehamn', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46322') && ($len == 12))) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alingsås-Vårgårda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46322') && ($len == 13))) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alingsås-Vårgårda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46322') && ($len == 14))) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alingsås-Vårgårda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46322') && ($len == 15))) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alingsås-Vårgårda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46325') && ($len == 12))) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenljunga-Tranemo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46325') && ($len == 13))) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenljunga-Tranemo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46325') && ($len == 14))) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenljunga-Tranemo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46325') && ($len == 15))) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenljunga-Tranemo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46340') && ($len == 12))) {
   //Varberg in Hallands län (0340) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Varberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46340') && ($len == 13))) {
   //Varberg in Hallands län (0340) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Varberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46340') && ($len == 14))) {
   //Varberg in Hallands län (0340) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Varberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46340') && ($len == 15))) {
   //Varberg in Hallands län (0340) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Varberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46345') && ($len == 12))) {
   //Hyltebruk-Torup in Hallands län (0345) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hyltebruk-Torup', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46345') && ($len == 13))) {
   //Hyltebruk-Torup in Hallands län (0345) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hyltebruk-Torup', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46345') && ($len == 14))) {
   //Hyltebruk-Torup in Hallands län (0345) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hyltebruk-Torup', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46345') && ($len == 15))) {
   //Hyltebruk-Torup in Hallands län (0345) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hyltebruk-Torup', 'region' => 'Hallands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 12))) {
   //Falkenberg in Hallands län (0346) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falkenberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 13))) {
   //Falkenberg in Hallands län (0346) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falkenberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 14))) {
   //Falkenberg in Hallands län (0346) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falkenberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 15))) {
   //Falkenberg in Hallands län (0346) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falkenberg', 'region' => 'Hallands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 12))) {
   //Glommen in Hallands län (0346) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Glommen', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 13))) {
   //Glommen in Hallands län (0346) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Glommen', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 14))) {
   //Glommen in Hallands län (0346) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Glommen', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46346') && ($len == 15))) {
   //Glommen in Hallands län (0346) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Glommen', 'region' => 'Hallands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46370') && ($len == 12))) {
   //Värnamo in Jönköpings län (0370) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Värnamo', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46370') && ($len == 13))) {
   //Värnamo in Jönköpings län (0370) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Värnamo', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46370') && ($len == 14))) {
   //Värnamo in Jönköpings län (0370) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Värnamo', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46370') && ($len == 15))) {
   //Värnamo in Jönköpings län (0370) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Värnamo', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46371') && ($len == 12))) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gislaved-Anderstorp', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46371') && ($len == 13))) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gislaved-Anderstorp', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46371') && ($len == 14))) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gislaved-Anderstorp', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46371') && ($len == 15))) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gislaved-Anderstorp', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46372') && ($len == 12))) {
   //Ljungby in Kronobergs län (0372) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljungby', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46372') && ($len == 13))) {
   //Ljungby in Kronobergs län (0372) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljungby', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46372') && ($len == 14))) {
   //Ljungby in Kronobergs län (0372) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljungby', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46372') && ($len == 15))) {
   //Ljungby in Kronobergs län (0372) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljungby', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46380') && ($len == 12))) {
   //Nässjö in Jönköpings län (0380) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nässjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46380') && ($len == 13))) {
   //Nässjö in Jönköpings län (0380) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nässjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46380') && ($len == 14))) {
   //Nässjö in Jönköpings län (0380) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nässjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46380') && ($len == 15))) {
   //Nässjö in Jönköpings län (0380) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nässjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46381') && ($len == 12))) {
   //Eksjö in Jönköpings län (0381) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eksjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46381') && ($len == 13))) {
   //Eksjö in Jönköpings län (0381) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eksjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46381') && ($len == 14))) {
   //Eksjö in Jönköpings län (0381) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eksjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46381') && ($len == 15))) {
   //Eksjö in Jönköpings län (0381) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eksjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46382') && ($len == 12))) {
   //Sävsjö in Jönköpings län (0382) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sävsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46382') && ($len == 13))) {
   //Sävsjö in Jönköpings län (0382) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sävsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46382') && ($len == 14))) {
   //Sävsjö in Jönköpings län (0382) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sävsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46382') && ($len == 15))) {
   //Sävsjö in Jönköpings län (0382) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sävsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46383') && ($len == 12))) {
   //Vetlanda in Jönköpings län (0383) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vetlanda', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46383') && ($len == 13))) {
   //Vetlanda in Jönköpings län (0383) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vetlanda', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46383') && ($len == 14))) {
   //Vetlanda in Jönköpings län (0383) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vetlanda', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46383') && ($len == 15))) {
   //Vetlanda in Jönköpings län (0383) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vetlanda', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46390') && ($len == 12))) {
   //Gränna in Jönköpings län (0390) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gränna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46390') && ($len == 13))) {
   //Gränna in Jönköpings län (0390) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gränna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46390') && ($len == 14))) {
   //Gränna in Jönköpings län (0390) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gränna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46390') && ($len == 15))) {
   //Gränna in Jönköpings län (0390) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gränna', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46392') && ($len == 12))) {
   //Mullsjö in Jönköpings län (0392) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mullsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46392') && ($len == 13))) {
   //Mullsjö in Jönköpings län (0392) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mullsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46392') && ($len == 14))) {
   //Mullsjö in Jönköpings län (0392) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mullsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46392') && ($len == 15))) {
   //Mullsjö in Jönköpings län (0392) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mullsjö', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46393') && ($len == 12))) {
   //Vaggeryd in Jönköpings län (0393) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vaggeryd', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46393') && ($len == 13))) {
   //Vaggeryd in Jönköpings län (0393) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vaggeryd', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46393') && ($len == 14))) {
   //Vaggeryd in Jönköpings län (0393) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vaggeryd', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46393') && ($len == 15))) {
   //Vaggeryd in Jönköpings län (0393) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vaggeryd', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46410') && ($len == 12))) {
   //Trelleborg in Skåne län (0410) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trelleborg', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46410') && ($len == 13))) {
   //Trelleborg in Skåne län (0410) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trelleborg', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46410') && ($len == 14))) {
   //Trelleborg in Skåne län (0410) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trelleborg', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46410') && ($len == 15))) {
   //Trelleborg in Skåne län (0410) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trelleborg', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46411') && ($len == 12))) {
   //Ystad in Skåne län (0411) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ystad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46411') && ($len == 13))) {
   //Ystad in Skåne län (0411) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ystad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46411') && ($len == 14))) {
   //Ystad in Skåne län (0411) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ystad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46411') && ($len == 15))) {
   //Ystad in Skåne län (0411) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ystad', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46413') && ($len == 12))) {
   //Eslöv-Höör in Skåne län (0413) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eslöv-Höör', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46413') && ($len == 13))) {
   //Eslöv-Höör in Skåne län (0413) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eslöv-Höör', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46413') && ($len == 14))) {
   //Eslöv-Höör in Skåne län (0413) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eslöv-Höör', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46413') && ($len == 15))) {
   //Eslöv-Höör in Skåne län (0413) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Eslöv-Höör', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46414') && ($len == 12))) {
   //Simrishamn in Skåne län (0414) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Simrishamn', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46414') && ($len == 13))) {
   //Simrishamn in Skåne län (0414) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Simrishamn', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46414') && ($len == 14))) {
   //Simrishamn in Skåne län (0414) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Simrishamn', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46414') && ($len == 15))) {
   //Simrishamn in Skåne län (0414) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Simrishamn', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46415') && ($len == 12))) {
   //Hörby in Skåne län (0415) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hörby', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46415') && ($len == 13))) {
   //Hörby in Skåne län (0415) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hörby', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46415') && ($len == 14))) {
   //Hörby in Skåne län (0415) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hörby', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46415') && ($len == 15))) {
   //Hörby in Skåne län (0415) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hörby', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46416') && ($len == 12))) {
   //Sjöbo in Skåne län (0416) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sjöbo', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46416') && ($len == 13))) {
   //Sjöbo in Skåne län (0416) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sjöbo', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46416') && ($len == 14))) {
   //Sjöbo in Skåne län (0416) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sjöbo', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46416') && ($len == 15))) {
   //Sjöbo in Skåne län (0416) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sjöbo', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46417') && ($len == 12))) {
   //Tomelilla in Skåne län (0417) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tomelilla', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46417') && ($len == 13))) {
   //Tomelilla in Skåne län (0417) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tomelilla', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46417') && ($len == 14))) {
   //Tomelilla in Skåne län (0417) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tomelilla', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46417') && ($len == 15))) {
   //Tomelilla in Skåne län (0417) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tomelilla', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46418') && ($len == 12))) {
   //Landskrona-Svalöv in Skåne län (0418) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Landskrona-Svalöv', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46418') && ($len == 13))) {
   //Landskrona-Svalöv in Skåne län (0418) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Landskrona-Svalöv', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46418') && ($len == 14))) {
   //Landskrona-Svalöv in Skåne län (0418) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Landskrona-Svalöv', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46418') && ($len == 15))) {
   //Landskrona-Svalöv in Skåne län (0418) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Landskrona-Svalöv', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46430') && ($len == 12))) {
   //Laholm in Hallands län (0430) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laholm', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46430') && ($len == 13))) {
   //Laholm in Hallands län (0430) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laholm', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46430') && ($len == 14))) {
   //Laholm in Hallands län (0430) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laholm', 'region' => 'Hallands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46430') && ($len == 15))) {
   //Laholm in Hallands län (0430) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laholm', 'region' => 'Hallands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46431') && ($len == 12))) {
   //Ängelholm-Båstad in Skåne län (0431) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ängelholm-Båstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46431') && ($len == 13))) {
   //Ängelholm-Båstad in Skåne län (0431) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ängelholm-Båstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46431') && ($len == 14))) {
   //Ängelholm-Båstad in Skåne län (0431) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ängelholm-Båstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46431') && ($len == 15))) {
   //Ängelholm-Båstad in Skåne län (0431) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ängelholm-Båstad', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46433') && ($len == 12))) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Markaryd-Strömnäsbruk', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46433') && ($len == 13))) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Markaryd-Strömnäsbruk', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46433') && ($len == 14))) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Markaryd-Strömnäsbruk', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46433') && ($len == 15))) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Markaryd-Strömnäsbruk', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46435') && ($len == 12))) {
   //Klippan-Perstorp in Skåne län (0435) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Klippan-Perstorp', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46435') && ($len == 13))) {
   //Klippan-Perstorp in Skåne län (0435) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Klippan-Perstorp', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46435') && ($len == 14))) {
   //Klippan-Perstorp in Skåne län (0435) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Klippan-Perstorp', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46435') && ($len == 15))) {
   //Klippan-Perstorp in Skåne län (0435) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Klippan-Perstorp', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46451') && ($len == 12))) {
   //Hässleholm in Skåne län (0451) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hässleholm', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46451') && ($len == 13))) {
   //Hässleholm in Skåne län (0451) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hässleholm', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46451') && ($len == 14))) {
   //Hässleholm in Skåne län (0451) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hässleholm', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46451') && ($len == 15))) {
   //Hässleholm in Skåne län (0451) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hässleholm', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46454') && ($len == 12))) {
   //Karlshamn-Olofström in Blekinge län (0454) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlshamn-Olofström', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46454') && ($len == 13))) {
   //Karlshamn-Olofström in Blekinge län (0454) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlshamn-Olofström', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46454') && ($len == 14))) {
   //Karlshamn-Olofström in Blekinge län (0454) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlshamn-Olofström', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46454') && ($len == 15))) {
   //Karlshamn-Olofström in Blekinge län (0454) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlshamn-Olofström', 'region' => 'Blekinge län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46455') && ($len == 12))) {
   //Karlskrona in Blekinge län (0455) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskrona', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46455') && ($len == 13))) {
   //Karlskrona in Blekinge län (0455) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskrona', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46455') && ($len == 14))) {
   //Karlskrona in Blekinge län (0455) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskrona', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46455') && ($len == 15))) {
   //Karlskrona in Blekinge län (0455) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskrona', 'region' => 'Blekinge län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46456') && ($len == 12))) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sölvesborg-Bromölla', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46456') && ($len == 13))) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sölvesborg-Bromölla', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46456') && ($len == 14))) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sölvesborg-Bromölla', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46456') && ($len == 15))) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sölvesborg-Bromölla', 'region' => 'Blekinge län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46457') && ($len == 12))) {
   //Ronneby in Blekinge län (0457) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ronneby', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46457') && ($len == 13))) {
   //Ronneby in Blekinge län (0457) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ronneby', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46457') && ($len == 14))) {
   //Ronneby in Blekinge län (0457) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ronneby', 'region' => 'Blekinge län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46457') && ($len == 15))) {
   //Ronneby in Blekinge län (0457) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ronneby', 'region' => 'Blekinge län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46459') && ($len == 12))) {
   //Ryd in Kronobergs län (0459) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46459') && ($len == 13))) {
   //Ryd in Kronobergs län (0459) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46459') && ($len == 14))) {
   //Ryd in Kronobergs län (0459) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46459') && ($len == 15))) {
   //Ryd in Kronobergs län (0459) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46470') && ($len == 12))) {
   //Växjö in Kronobergs län (0470) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Växjö', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46470') && ($len == 13))) {
   //Växjö in Kronobergs län (0470) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Växjö', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46470') && ($len == 14))) {
   //Växjö in Kronobergs län (0470) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Växjö', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46470') && ($len == 15))) {
   //Växjö in Kronobergs län (0470) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Växjö', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46471') && ($len == 12))) {
   //Emmaboda in Kalmar län (0471) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Emmaboda', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46471') && ($len == 13))) {
   //Emmaboda in Kalmar län (0471) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Emmaboda', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46471') && ($len == 14))) {
   //Emmaboda in Kalmar län (0471) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Emmaboda', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46471') && ($len == 15))) {
   //Emmaboda in Kalmar län (0471) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Emmaboda', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46472') && ($len == 12))) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alvesta-Rydaholm', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46472') && ($len == 13))) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alvesta-Rydaholm', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46472') && ($len == 14))) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alvesta-Rydaholm', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46472') && ($len == 15))) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Alvesta-Rydaholm', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46474') && ($len == 12))) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åseda-Lenhovda', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46474') && ($len == 13))) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åseda-Lenhovda', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46474') && ($len == 14))) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åseda-Lenhovda', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46474') && ($len == 15))) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åseda-Lenhovda', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46476') && ($len == 12))) {
   //Älmhult in Kronobergs län (0476) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älmhult', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46476') && ($len == 13))) {
   //Älmhult in Kronobergs län (0476) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älmhult', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46476') && ($len == 14))) {
   //Älmhult in Kronobergs län (0476) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älmhult', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46476') && ($len == 15))) {
   //Älmhult in Kronobergs län (0476) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älmhult', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46477') && ($len == 12))) {
   //Tingsryd in Kronobergs län (0477) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tingsryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46477') && ($len == 13))) {
   //Tingsryd in Kronobergs län (0477) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tingsryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46477') && ($len == 14))) {
   //Tingsryd in Kronobergs län (0477) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tingsryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46477') && ($len == 15))) {
   //Tingsryd in Kronobergs län (0477) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tingsryd', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46478') && ($len == 12))) {
   //Lessebo in Kronobergs län (0478) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lessebo', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46478') && ($len == 13))) {
   //Lessebo in Kronobergs län (0478) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lessebo', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46478') && ($len == 14))) {
   //Lessebo in Kronobergs län (0478) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lessebo', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46478') && ($len == 15))) {
   //Lessebo in Kronobergs län (0478) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lessebo', 'region' => 'Kronobergs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46479') && ($len == 12))) {
   //Osby in Skåne län (0479) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Osby', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46479') && ($len == 13))) {
   //Osby in Skåne län (0479) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Osby', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46479') && ($len == 14))) {
   //Osby in Skåne län (0479) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Osby', 'region' => 'Skåne län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46479') && ($len == 15))) {
   //Osby in Skåne län (0479) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Osby', 'region' => 'Skåne län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46480') && ($len == 12))) {
   //Kalmar in Kalmar län (0480) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalmar', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46480') && ($len == 13))) {
   //Kalmar in Kalmar län (0480) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalmar', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46480') && ($len == 14))) {
   //Kalmar in Kalmar län (0480) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalmar', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46480') && ($len == 15))) {
   //Kalmar in Kalmar län (0480) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalmar', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46481') && ($len == 12))) {
   //Nybro in Kalmar län (0481) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nybro', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46481') && ($len == 13))) {
   //Nybro in Kalmar län (0481) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nybro', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46481') && ($len == 14))) {
   //Nybro in Kalmar län (0481) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nybro', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46481') && ($len == 15))) {
   //Nybro in Kalmar län (0481) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nybro', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46485') && ($len == 12))) {
   //Öland in Kalmar län (0485) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öland', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46485') && ($len == 13))) {
   //Öland in Kalmar län (0485) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öland', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46485') && ($len == 14))) {
   //Öland in Kalmar län (0485) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öland', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46485') && ($len == 15))) {
   //Öland in Kalmar län (0485) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Öland', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46486') && ($len == 12))) {
   //Torsås in Kalmar län (0486) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46486') && ($len == 13))) {
   //Torsås in Kalmar län (0486) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46486') && ($len == 14))) {
   //Torsås in Kalmar län (0486) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46486') && ($len == 15))) {
   //Torsås in Kalmar län (0486) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46490') && ($len == 12))) {
   //Västervik in Kalmar län (0490) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västervik', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46490') && ($len == 13))) {
   //Västervik in Kalmar län (0490) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västervik', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46490') && ($len == 14))) {
   //Västervik in Kalmar län (0490) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västervik', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46490') && ($len == 15))) {
   //Västervik in Kalmar län (0490) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Västervik', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46491') && ($len == 12))) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Oskarshamn-Högsby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46491') && ($len == 13))) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Oskarshamn-Högsby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46491') && ($len == 14))) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Oskarshamn-Högsby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46491') && ($len == 15))) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Oskarshamn-Högsby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46492') && ($len == 12))) {
   //Vimmerby in Kalmar län (0492) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vimmerby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46492') && ($len == 13))) {
   //Vimmerby in Kalmar län (0492) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vimmerby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46492') && ($len == 14))) {
   //Vimmerby in Kalmar län (0492) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vimmerby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46492') && ($len == 15))) {
   //Vimmerby in Kalmar län (0492) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vimmerby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46493') && ($len == 12))) {
   //Gamleby in Kalmar län (0493) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gamleby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46493') && ($len == 13))) {
   //Gamleby in Kalmar län (0493) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gamleby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46493') && ($len == 14))) {
   //Gamleby in Kalmar län (0493) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gamleby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46493') && ($len == 15))) {
   //Gamleby in Kalmar län (0493) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gamleby', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46494') && ($len == 12))) {
   //Kisa in Östergötalands län (0494) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kisa', 'region' => 'Östergötalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46494') && ($len == 13))) {
   //Kisa in Östergötalands län (0494) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kisa', 'region' => 'Östergötalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46494') && ($len == 14))) {
   //Kisa in Östergötalands län (0494) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kisa', 'region' => 'Östergötalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46494') && ($len == 15))) {
   //Kisa in Östergötalands län (0494) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kisa', 'region' => 'Östergötalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46495') && ($len == 12))) {
   //Hultsfred-Virserum in Kalmar län (0495) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hultsfred-Virserum', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46495') && ($len == 13))) {
   //Hultsfred-Virserum in Kalmar län (0495) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hultsfred-Virserum', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46495') && ($len == 14))) {
   //Hultsfred-Virserum in Kalmar län (0495) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hultsfred-Virserum', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46495') && ($len == 15))) {
   //Hultsfred-Virserum in Kalmar län (0495) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hultsfred-Virserum', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46496') && ($len == 12))) {
   //Mariannelund in Jönköpings län (0496) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariannelund', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46496') && ($len == 13))) {
   //Mariannelund in Jönköpings län (0496) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariannelund', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46496') && ($len == 14))) {
   //Mariannelund in Jönköpings län (0496) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariannelund', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46496') && ($len == 15))) {
   //Mariannelund in Jönköpings län (0496) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariannelund', 'region' => 'Jönköpings län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46498') && ($len == 12))) {
   //Gotland in Gotlands län (0498) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gotland', 'region' => 'Gotlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46498') && ($len == 13))) {
   //Gotland in Gotlands län (0498) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gotland', 'region' => 'Gotlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46498') && ($len == 14))) {
   //Gotland in Gotlands län (0498) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gotland', 'region' => 'Gotlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46498') && ($len == 15))) {
   //Gotland in Gotlands län (0498) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gotland', 'region' => 'Gotlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46499') && ($len == 12))) {
   //Mönsterås in Kalmar län (0499) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mönsterås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46499') && ($len == 13))) {
   //Mönsterås in Kalmar län (0499) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mönsterås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46499') && ($len == 14))) {
   //Mönsterås in Kalmar län (0499) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mönsterås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46499') && ($len == 15))) {
   //Mönsterås in Kalmar län (0499) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mönsterås', 'region' => 'Kalmar län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46500') && ($len == 12))) {
   //Skövde in Västra Götalands län (0500) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skövde', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46500') && ($len == 13))) {
   //Skövde in Västra Götalands län (0500) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skövde', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46500') && ($len == 14))) {
   //Skövde in Västra Götalands län (0500) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skövde', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46500') && ($len == 15))) {
   //Skövde in Västra Götalands län (0500) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skövde', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46501') && ($len == 12))) {
   //Mariestad in Västra Götalands län (0501) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46501') && ($len == 13))) {
   //Mariestad in Västra Götalands län (0501) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46501') && ($len == 14))) {
   //Mariestad in Västra Götalands län (0501) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46501') && ($len == 15))) {
   //Mariestad in Västra Götalands län (0501) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mariestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46502') && ($len == 12))) {
   //Tidaholm in Västra Götalands län (0502) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tidaholm', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46502') && ($len == 13))) {
   //Tidaholm in Västra Götalands län (0502) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tidaholm', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46502') && ($len == 14))) {
   //Tidaholm in Västra Götalands län (0502) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tidaholm', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46502') && ($len == 15))) {
   //Tidaholm in Västra Götalands län (0502) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tidaholm', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46503') && ($len == 12))) {
   //Hjo in Västra Götalands län (0503) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hjo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46503') && ($len == 13))) {
   //Hjo in Västra Götalands län (0503) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hjo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46503') && ($len == 14))) {
   //Hjo in Västra Götalands län (0503) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hjo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46503') && ($len == 15))) {
   //Hjo in Västra Götalands län (0503) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hjo', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46504') && ($len == 12))) {
   //Tibro in Västra Götalands län (0504) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tibro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46504') && ($len == 13))) {
   //Tibro in Västra Götalands län (0504) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tibro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46504') && ($len == 14))) {
   //Tibro in Västra Götalands län (0504) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tibro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46504') && ($len == 15))) {
   //Tibro in Västra Götalands län (0504) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tibro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46505') && ($len == 12))) {
   //Karlsborg in Västra Götalands län (0505) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46505') && ($len == 13))) {
   //Karlsborg in Västra Götalands län (0505) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46505') && ($len == 14))) {
   //Karlsborg in Västra Götalands län (0505) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46505') && ($len == 15))) {
   //Karlsborg in Västra Götalands län (0505) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlsborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46506') && ($len == 12))) {
   //Töreboda-Hova in Västra Götalands län (0506) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Töreboda-Hova', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46506') && ($len == 13))) {
   //Töreboda-Hova in Västra Götalands län (0506) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Töreboda-Hova', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46506') && ($len == 14))) {
   //Töreboda-Hova in Västra Götalands län (0506) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Töreboda-Hova', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46506') && ($len == 15))) {
   //Töreboda-Hova in Västra Götalands län (0506) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Töreboda-Hova', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46510') && ($len == 12))) {
   //Lidköping in Västra Götalands län (0510) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lidköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46510') && ($len == 13))) {
   //Lidköping in Västra Götalands län (0510) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lidköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46510') && ($len == 14))) {
   //Lidköping in Västra Götalands län (0510) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lidköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46510') && ($len == 15))) {
   //Lidköping in Västra Götalands län (0510) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lidköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46511') && ($len == 12))) {
   //Skara-Götene in Västra Götalands län (0511) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skara-Götene', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46511') && ($len == 13))) {
   //Skara-Götene in Västra Götalands län (0511) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skara-Götene', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46511') && ($len == 14))) {
   //Skara-Götene in Västra Götalands län (0511) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skara-Götene', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46511') && ($len == 15))) {
   //Skara-Götene in Västra Götalands län (0511) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skara-Götene', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46512') && ($len == 12))) {
   //Vara-Nossebro in Västra Götalands län (0512) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vara-Nossebro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46512') && ($len == 13))) {
   //Vara-Nossebro in Västra Götalands län (0512) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vara-Nossebro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46512') && ($len == 14))) {
   //Vara-Nossebro in Västra Götalands län (0512) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vara-Nossebro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46512') && ($len == 15))) {
   //Vara-Nossebro in Västra Götalands län (0512) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vara-Nossebro', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46513') && ($len == 12))) {
   //Herrljunga in Västra Götalands län (0513) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Herrljunga', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46513') && ($len == 13))) {
   //Herrljunga in Västra Götalands län (0513) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Herrljunga', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46513') && ($len == 14))) {
   //Herrljunga in Västra Götalands län (0513) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Herrljunga', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46513') && ($len == 15))) {
   //Herrljunga in Västra Götalands län (0513) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Herrljunga', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46514') && ($len == 12))) {
   //Grästorp in Västra Götalands län (0514) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grästorp', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46514') && ($len == 13))) {
   //Grästorp in Västra Götalands län (0514) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grästorp', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46514') && ($len == 14))) {
   //Grästorp in Västra Götalands län (0514) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grästorp', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46514') && ($len == 15))) {
   //Grästorp in Västra Götalands län (0514) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grästorp', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46515') && ($len == 12))) {
   //Falköping in Västra Götalands län (0515) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46515') && ($len == 13))) {
   //Falköping in Västra Götalands län (0515) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46515') && ($len == 14))) {
   //Falköping in Västra Götalands län (0515) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46515') && ($len == 15))) {
   //Falköping in Västra Götalands län (0515) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Falköping', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46520') && ($len == 12))) {
   //Trollhättan in Västra Götalands län (0520) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trollhättan', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46520') && ($len == 13))) {
   //Trollhättan in Västra Götalands län (0520) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trollhättan', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46520') && ($len == 14))) {
   //Trollhättan in Västra Götalands län (0520) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trollhättan', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46520') && ($len == 15))) {
   //Trollhättan in Västra Götalands län (0520) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Trollhättan', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46521') && ($len == 12))) {
   //Vänersborg in Västra Götalands län (0521) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vänersborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46521') && ($len == 13))) {
   //Vänersborg in Västra Götalands län (0521) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vänersborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46521') && ($len == 14))) {
   //Vänersborg in Västra Götalands län (0521) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vänersborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46521') && ($len == 15))) {
   //Vänersborg in Västra Götalands län (0521) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vänersborg', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46522') && ($len == 12))) {
   //Uddevalla in Västra Götalands län (0522) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uddevalla', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46522') && ($len == 13))) {
   //Uddevalla in Västra Götalands län (0522) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uddevalla', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46522') && ($len == 14))) {
   //Uddevalla in Västra Götalands län (0522) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uddevalla', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46522') && ($len == 15))) {
   //Uddevalla in Västra Götalands län (0522) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Uddevalla', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46523') && ($len == 12))) {
   //Lysekil in Västra Götalands län (0523) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lysekil', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46523') && ($len == 13))) {
   //Lysekil in Västra Götalands län (0523) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lysekil', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46523') && ($len == 14))) {
   //Lysekil in Västra Götalands län (0523) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lysekil', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46523') && ($len == 15))) {
   //Lysekil in Västra Götalands län (0523) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lysekil', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46524') && ($len == 12))) {
   //Munkedal in Västra Götalands län (0524) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Munkedal', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46524') && ($len == 13))) {
   //Munkedal in Västra Götalands län (0524) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Munkedal', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46524') && ($len == 14))) {
   //Munkedal in Västra Götalands län (0524) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Munkedal', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46524') && ($len == 15))) {
   //Munkedal in Västra Götalands län (0524) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Munkedal', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46525') && ($len == 12))) {
   //Grebbestad in Västra Götalands län (0525) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grebbestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46525') && ($len == 13))) {
   //Grebbestad in Västra Götalands län (0525) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grebbestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46525') && ($len == 14))) {
   //Grebbestad in Västra Götalands län (0525) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grebbestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46525') && ($len == 15))) {
   //Grebbestad in Västra Götalands län (0525) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grebbestad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46526') && ($len == 12))) {
   //Strömstad in Västra Götalands län (0526) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömstad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46526') && ($len == 13))) {
   //Strömstad in Västra Götalands län (0526) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömstad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46526') && ($len == 14))) {
   //Strömstad in Västra Götalands län (0526) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömstad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46526') && ($len == 15))) {
   //Strömstad in Västra Götalands län (0526) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömstad', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46528') && ($len == 12))) {
   //Färgelanda in Västra Götalands län (0528) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Färgelanda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46528') && ($len == 13))) {
   //Färgelanda in Västra Götalands län (0528) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Färgelanda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46528') && ($len == 14))) {
   //Färgelanda in Västra Götalands län (0528) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Färgelanda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46528') && ($len == 15))) {
   //Färgelanda in Västra Götalands län (0528) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Färgelanda', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46530') && ($len == 12))) {
   //Mellerud in Västra Götalands län (0530) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mellerud', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46530') && ($len == 13))) {
   //Mellerud in Västra Götalands län (0530) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mellerud', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46530') && ($len == 14))) {
   //Mellerud in Västra Götalands län (0530) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mellerud', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46530') && ($len == 15))) {
   //Mellerud in Västra Götalands län (0530) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Mellerud', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46531') && ($len == 12))) {
   //Bengtsfors in Västra Götalands län (0531) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bengtsfors', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46531') && ($len == 13))) {
   //Bengtsfors in Västra Götalands län (0531) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bengtsfors', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46531') && ($len == 14))) {
   //Bengtsfors in Västra Götalands län (0531) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bengtsfors', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46531') && ($len == 15))) {
   //Bengtsfors in Västra Götalands län (0531) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bengtsfors', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46532') && ($len == 12))) {
   //Åmål in Västra Götalands län (0532) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åmål', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46532') && ($len == 13))) {
   //Åmål in Västra Götalands län (0532) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åmål', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46532') && ($len == 14))) {
   //Åmål in Västra Götalands län (0532) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åmål', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46532') && ($len == 15))) {
   //Åmål in Västra Götalands län (0532) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åmål', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46533') && ($len == 12))) {
   //Säffle in Värmlands län (0533) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Säffle', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46533') && ($len == 13))) {
   //Säffle in Värmlands län (0533) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Säffle', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46533') && ($len == 14))) {
   //Säffle in Värmlands län (0533) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Säffle', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46533') && ($len == 15))) {
   //Säffle in Värmlands län (0533) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Säffle', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46534') && ($len == 12))) {
   //Ed in Östergötlands län (0534) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ed', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46534') && ($len == 13))) {
   //Ed in Östergötlands län (0534) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ed', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46534') && ($len == 14))) {
   //Ed in Östergötlands län (0534) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ed', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46534') && ($len == 15))) {
   //Ed in Östergötlands län (0534) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ed', 'region' => 'Östergötlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46550') && ($len == 12))) {
   //Kristinehamn in Värmlands län (0550) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristinehamn', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46550') && ($len == 13))) {
   //Kristinehamn in Värmlands län (0550) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristinehamn', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46550') && ($len == 14))) {
   //Kristinehamn in Värmlands län (0550) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristinehamn', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46550') && ($len == 15))) {
   //Kristinehamn in Värmlands län (0550) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kristinehamn', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46551') && ($len == 12))) {
   //Gullspång in Västra Götalands län (0551) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gullspång', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46551') && ($len == 13))) {
   //Gullspång in Västra Götalands län (0551) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gullspång', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46551') && ($len == 14))) {
   //Gullspång in Västra Götalands län (0551) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gullspång', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46551') && ($len == 15))) {
   //Gullspång in Västra Götalands län (0551) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gullspång', 'region' => 'Västra Götalands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46552') && ($len == 12))) {
   //Deje in Värmlands län (0552) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Deje', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46552') && ($len == 13))) {
   //Deje in Värmlands län (0552) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Deje', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46552') && ($len == 14))) {
   //Deje in Värmlands län (0552) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Deje', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46552') && ($len == 15))) {
   //Deje in Värmlands län (0552) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Deje', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46553') && ($len == 12))) {
   //Molkolm in Värmlands län (0553) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Molkolm', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46553') && ($len == 13))) {
   //Molkolm in Värmlands län (0553) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Molkolm', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46553') && ($len == 14))) {
   //Molkolm in Värmlands län (0553) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Molkolm', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46553') && ($len == 15))) {
   //Molkolm in Värmlands län (0553) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Molkolm', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46554') && ($len == 12))) {
   //Kil in Värmlands län (0554) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kil', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46554') && ($len == 13))) {
   //Kil in Värmlands län (0554) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kil', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46554') && ($len == 14))) {
   //Kil in Värmlands län (0554) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kil', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46554') && ($len == 15))) {
   //Kil in Värmlands län (0554) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kil', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46555') && ($len == 12))) {
   //Grums in Värmlands län (0555) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grums', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46555') && ($len == 13))) {
   //Grums in Värmlands län (0555) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grums', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46555') && ($len == 14))) {
   //Grums in Värmlands län (0555) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grums', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46555') && ($len == 15))) {
   //Grums in Värmlands län (0555) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Grums', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46560') && ($len == 12))) {
   //Torsby in Värmlands län (0560) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsby', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46560') && ($len == 13))) {
   //Torsby in Värmlands län (0560) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsby', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46560') && ($len == 14))) {
   //Torsby in Värmlands län (0560) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsby', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46560') && ($len == 15))) {
   //Torsby in Värmlands län (0560) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torsby', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46563') && ($len == 12))) {
   //Hagfors-Munkfors in Värmlands län (0563) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hagfors-Munkfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46563') && ($len == 13))) {
   //Hagfors-Munkfors in Värmlands län (0563) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hagfors-Munkfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46563') && ($len == 14))) {
   //Hagfors-Munkfors in Värmlands län (0563) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hagfors-Munkfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46563') && ($len == 15))) {
   //Hagfors-Munkfors in Värmlands län (0563) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hagfors-Munkfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46564') && ($len == 12))) {
   //Sysslebäck in Värmlands län (0564) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sysslebäck', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46564') && ($len == 13))) {
   //Sysslebäck in Värmlands län (0564) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sysslebäck', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46564') && ($len == 14))) {
   //Sysslebäck in Värmlands län (0564) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sysslebäck', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46564') && ($len == 15))) {
   //Sysslebäck in Värmlands län (0564) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sysslebäck', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46565') && ($len == 12))) {
   //Sunne in Värmlands län (0565) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sunne', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46565') && ($len == 13))) {
   //Sunne in Värmlands län (0565) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sunne', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46565') && ($len == 14))) {
   //Sunne in Värmlands län (0565) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sunne', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46565') && ($len == 15))) {
   //Sunne in Värmlands län (0565) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sunne', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46570') && ($len == 12))) {
   //Arvika in Värmlands län (0570) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvika', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46570') && ($len == 13))) {
   //Arvika in Värmlands län (0570) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvika', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46570') && ($len == 14))) {
   //Arvika in Värmlands län (0570) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvika', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46570') && ($len == 15))) {
   //Arvika in Värmlands län (0570) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvika', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46571') && ($len == 12))) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Charlottenberg-Åmotfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46571') && ($len == 13))) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Charlottenberg-Åmotfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46571') && ($len == 14))) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Charlottenberg-Åmotfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46571') && ($len == 15))) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Charlottenberg-Åmotfors', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46573') && ($len == 12))) {
   //Årjäng in Värmlands län (0573) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Årjäng', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46573') && ($len == 13))) {
   //Årjäng in Värmlands län (0573) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Årjäng', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46573') && ($len == 14))) {
   //Årjäng in Värmlands län (0573) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Årjäng', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46573') && ($len == 15))) {
   //Årjäng in Värmlands län (0573) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Årjäng', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46580') && ($len == 12))) {
   //Kopparberg in Örebro län (0580) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kopparberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46580') && ($len == 13))) {
   //Kopparberg in Örebro län (0580) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kopparberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46580') && ($len == 14))) {
   //Kopparberg in Örebro län (0580) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kopparberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46580') && ($len == 15))) {
   //Kopparberg in Örebro län (0580) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kopparberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46581') && ($len == 12))) {
   //Lindesberg in Örebro län (0581) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lindesberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46581') && ($len == 13))) {
   //Lindesberg in Örebro län (0581) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lindesberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46581') && ($len == 14))) {
   //Lindesberg in Örebro län (0581) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lindesberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46581') && ($len == 15))) {
   //Lindesberg in Örebro län (0581) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lindesberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46582') && ($len == 12))) {
   //Hallsberg in Örebro län (0582) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallsberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46582') && ($len == 13))) {
   //Hallsberg in Örebro län (0582) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallsberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46582') && ($len == 14))) {
   //Hallsberg in Örebro län (0582) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallsberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46582') && ($len == 15))) {
   //Hallsberg in Örebro län (0582) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallsberg', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46583') && ($len == 12))) {
   //Askersund in Örebro län (0583) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Askersund', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46583') && ($len == 13))) {
   //Askersund in Örebro län (0583) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Askersund', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46583') && ($len == 14))) {
   //Askersund in Örebro län (0583) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Askersund', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46583') && ($len == 15))) {
   //Askersund in Örebro län (0583) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Askersund', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46584') && ($len == 12))) {
   //Laxå in Örebro län (0584) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laxå', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46584') && ($len == 13))) {
   //Laxå in Örebro län (0584) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laxå', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46584') && ($len == 14))) {
   //Laxå in Örebro län (0584) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laxå', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46584') && ($len == 15))) {
   //Laxå in Örebro län (0584) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Laxå', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46585') && ($len == 12))) {
   //Fjugesta-Svartå in Örebro län (0585) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fjugesta-Svartå', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46585') && ($len == 13))) {
   //Fjugesta-Svartå in Örebro län (0585) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fjugesta-Svartå', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46585') && ($len == 14))) {
   //Fjugesta-Svartå in Örebro län (0585) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fjugesta-Svartå', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46585') && ($len == 15))) {
   //Fjugesta-Svartå in Örebro län (0585) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fjugesta-Svartå', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46586') && ($len == 12))) {
   //Karlskoga in Örebro län (0586) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskoga', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46586') && ($len == 13))) {
   //Karlskoga in Örebro län (0586) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskoga', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46586') && ($len == 14))) {
   //Karlskoga in Örebro län (0586) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskoga', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46586') && ($len == 15))) {
   //Karlskoga in Örebro län (0586) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Karlskoga', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46587') && ($len == 12))) {
   //Nora in Örebro län (0587) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nora', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46587') && ($len == 13))) {
   //Nora in Örebro län (0587) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nora', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46587') && ($len == 14))) {
   //Nora in Örebro län (0587) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nora', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46587') && ($len == 15))) {
   //Nora in Örebro län (0587) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nora', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46589') && ($len == 12))) {
   //Arboga in Västmanlands län (0589) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arboga', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46589') && ($len == 13))) {
   //Arboga in Västmanlands län (0589) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arboga', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46589') && ($len == 14))) {
   //Arboga in Västmanlands län (0589) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arboga', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46589') && ($len == 15))) {
   //Arboga in Västmanlands län (0589) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arboga', 'region' => 'Västmanlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46590') && ($len == 12))) {
   //Filipstad in Värmlands län (0590) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Filipstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46590') && ($len == 13))) {
   //Filipstad in Värmlands län (0590) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Filipstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46590') && ($len == 14))) {
   //Filipstad in Värmlands län (0590) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Filipstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46590') && ($len == 15))) {
   //Filipstad in Värmlands län (0590) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Filipstad', 'region' => 'Värmlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46591') && ($len == 12))) {
   //Hällefors-Grythyttan in Örebro län (0591) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hällefors-Grythyttan', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46591') && ($len == 13))) {
   //Hällefors-Grythyttan in Örebro län (0591) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hällefors-Grythyttan', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46591') && ($len == 14))) {
   //Hällefors-Grythyttan in Örebro län (0591) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hällefors-Grythyttan', 'region' => 'Örebro län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46591') && ($len == 15))) {
   //Hällefors-Grythyttan in Örebro län (0591) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hällefors-Grythyttan', 'region' => 'Örebro län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46611') && ($len == 12))) {
   //Härnösand in Västernorrlands län (0611) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Härnösand', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46611') && ($len == 13))) {
   //Härnösand in Västernorrlands län (0611) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Härnösand', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46611') && ($len == 14))) {
   //Härnösand in Västernorrlands län (0611) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Härnösand', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46611') && ($len == 15))) {
   //Härnösand in Västernorrlands län (0611) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Härnösand', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46612') && ($len == 12))) {
   //Kramfors in Västernorrlands län (0612) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kramfors', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46612') && ($len == 13))) {
   //Kramfors in Västernorrlands län (0612) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kramfors', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46612') && ($len == 14))) {
   //Kramfors in Västernorrlands län (0612) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kramfors', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46612') && ($len == 15))) {
   //Kramfors in Västernorrlands län (0612) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kramfors', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46613') && ($len == 12))) {
   //Ullånger in Västernorrlands län (0613) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ullånger', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46613') && ($len == 13))) {
   //Ullånger in Västernorrlands län (0613) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ullånger', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46613') && ($len == 14))) {
   //Ullånger in Västernorrlands län (0613) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ullånger', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46613') && ($len == 15))) {
   //Ullånger in Västernorrlands län (0613) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ullånger', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46620') && ($len == 12))) {
   //Sollefteå in Västernorrlands län (0620) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sollefteå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46620') && ($len == 13))) {
   //Sollefteå in Västernorrlands län (0620) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sollefteå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46620') && ($len == 14))) {
   //Sollefteå in Västernorrlands län (0620) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sollefteå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46620') && ($len == 15))) {
   //Sollefteå in Västernorrlands län (0620) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sollefteå', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46621') && ($len == 12))) {
   //Junsele in Västernorrlands län (0621) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Junsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46621') && ($len == 13))) {
   //Junsele in Västernorrlands län (0621) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Junsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46621') && ($len == 14))) {
   //Junsele in Västernorrlands län (0621) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Junsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46621') && ($len == 15))) {
   //Junsele in Västernorrlands län (0621) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Junsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46622') && ($len == 12))) {
   //Näsåker in Västernorrlands län (0622) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Näsåker', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46622') && ($len == 13))) {
   //Näsåker in Västernorrlands län (0622) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Näsåker', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46622') && ($len == 14))) {
   //Näsåker in Västernorrlands län (0622) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Näsåker', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46622') && ($len == 15))) {
   //Näsåker in Västernorrlands län (0622) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Näsåker', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46623') && ($len == 12))) {
   //Ramsele in Västernorrlands län (0623) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ramsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46623') && ($len == 13))) {
   //Ramsele in Västernorrlands län (0623) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ramsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46623') && ($len == 14))) {
   //Ramsele in Västernorrlands län (0623) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ramsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46623') && ($len == 15))) {
   //Ramsele in Västernorrlands län (0623) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ramsele', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46624') && ($len == 12))) {
   //Backe in Jämtlands län (0624) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Backe', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46624') && ($len == 13))) {
   //Backe in Jämtlands län (0624) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Backe', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46624') && ($len == 14))) {
   //Backe in Jämtlands län (0624) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Backe', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46624') && ($len == 15))) {
   //Backe in Jämtlands län (0624) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Backe', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46640') && ($len == 12))) {
   //Krokom in Jämtlands län (0640) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Krokom', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46640') && ($len == 13))) {
   //Krokom in Jämtlands län (0640) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Krokom', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46640') && ($len == 14))) {
   //Krokom in Jämtlands län (0640) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Krokom', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46640') && ($len == 15))) {
   //Krokom in Jämtlands län (0640) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Krokom', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46642') && ($len == 12))) {
   //Lit in Jämtlands län (0642) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lit', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46642') && ($len == 13))) {
   //Lit in Jämtlands län (0642) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lit', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46642') && ($len == 14))) {
   //Lit in Jämtlands län (0642) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lit', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46642') && ($len == 15))) {
   //Lit in Jämtlands län (0642) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lit', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46643') && ($len == 12))) {
   //Hallen-Oviken in Jämtlands län (0643) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallen-Oviken', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46643') && ($len == 13))) {
   //Hallen-Oviken in Jämtlands län (0643) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallen-Oviken', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46643') && ($len == 14))) {
   //Hallen-Oviken in Jämtlands län (0643) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallen-Oviken', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46643') && ($len == 15))) {
   //Hallen-Oviken in Jämtlands län (0643) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hallen-Oviken', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46644') && ($len == 12))) {
   //Hammerdal in Jämtlands län (0644) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammerdal', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46644') && ($len == 13))) {
   //Hammerdal in Jämtlands län (0644) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammerdal', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46644') && ($len == 14))) {
   //Hammerdal in Jämtlands län (0644) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammerdal', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46644') && ($len == 15))) {
   //Hammerdal in Jämtlands län (0644) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammerdal', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46645') && ($len == 12))) {
   //Föllinge in Jämtlands län (0645) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Föllinge', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46645') && ($len == 13))) {
   //Föllinge in Jämtlands län (0645) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Föllinge', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46645') && ($len == 14))) {
   //Föllinge in Jämtlands län (0645) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Föllinge', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46645') && ($len == 15))) {
   //Föllinge in Jämtlands län (0645) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Föllinge', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46647') && ($len == 12))) {
   //Åre-Järpen in Jämtlands län (0647) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åre-Järpen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46647') && ($len == 13))) {
   //Åre-Järpen in Jämtlands län (0647) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åre-Järpen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46647') && ($len == 14))) {
   //Åre-Järpen in Jämtlands län (0647) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åre-Järpen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46647') && ($len == 15))) {
   //Åre-Järpen in Jämtlands län (0647) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åre-Järpen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46650') && ($len == 12))) {
   //Hudiksvall in Gävleborgs län (0650) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hudiksvall', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46650') && ($len == 13))) {
   //Hudiksvall in Gävleborgs län (0650) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hudiksvall', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46650') && ($len == 14))) {
   //Hudiksvall in Gävleborgs län (0650) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hudiksvall', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46650') && ($len == 15))) {
   //Hudiksvall in Gävleborgs län (0650) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hudiksvall', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46651') && ($len == 12))) {
   //Ljusdal in Gävleborgs län (0651) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljusdal', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46651') && ($len == 13))) {
   //Ljusdal in Gävleborgs län (0651) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljusdal', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46651') && ($len == 14))) {
   //Ljusdal in Gävleborgs län (0651) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljusdal', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46651') && ($len == 15))) {
   //Ljusdal in Gävleborgs län (0651) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ljusdal', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46652') && ($len == 12))) {
   //Bergsjö in Gävleborgs län (0652) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bergsjö', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46652') && ($len == 13))) {
   //Bergsjö in Gävleborgs län (0652) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bergsjö', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46652') && ($len == 14))) {
   //Bergsjö in Gävleborgs län (0652) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bergsjö', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46652') && ($len == 15))) {
   //Bergsjö in Gävleborgs län (0652) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bergsjö', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46653') && ($len == 12))) {
   //Delsbo in Gävleborgs län (0653) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Delsbo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46653') && ($len == 13))) {
   //Delsbo in Gävleborgs län (0653) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Delsbo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46653') && ($len == 14))) {
   //Delsbo in Gävleborgs län (0653) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Delsbo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46653') && ($len == 15))) {
   //Delsbo in Gävleborgs län (0653) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Delsbo', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46657') && ($len == 12))) {
   //Los in Gävleborgs län (0657) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Los', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46657') && ($len == 13))) {
   //Los in Gävleborgs län (0657) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Los', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46657') && ($len == 14))) {
   //Los in Gävleborgs län (0657) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Los', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46657') && ($len == 15))) {
   //Los in Gävleborgs län (0657) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Los', 'region' => 'Gävleborgs län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46660') && ($len == 12))) {
   //Örnsköldsvik in Västernorrlands län (0660) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örnsköldsvik', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46660') && ($len == 13))) {
   //Örnsköldsvik in Västernorrlands län (0660) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örnsköldsvik', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46660') && ($len == 14))) {
   //Örnsköldsvik in Västernorrlands län (0660) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örnsköldsvik', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46660') && ($len == 15))) {
   //Örnsköldsvik in Västernorrlands län (0660) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Örnsköldsvik', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46661') && ($len == 12))) {
   //Bredbyn in Västernorrlands län (0661) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bredbyn', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46661') && ($len == 13))) {
   //Bredbyn in Västernorrlands län (0661) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bredbyn', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46661') && ($len == 14))) {
   //Bredbyn in Västernorrlands län (0661) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bredbyn', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46661') && ($len == 15))) {
   //Bredbyn in Västernorrlands län (0661) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bredbyn', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46662') && ($len == 12))) {
   //Björna in Västernorrlands län (0662) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Björna', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46662') && ($len == 13))) {
   //Björna in Västernorrlands län (0662) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Björna', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46662') && ($len == 14))) {
   //Björna in Västernorrlands län (0662) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Björna', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46662') && ($len == 15))) {
   //Björna in Västernorrlands län (0662) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Björna', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46663') && ($len == 12))) {
   //Husum in Västernorrlands län (0663) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Husum', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46663') && ($len == 13))) {
   //Husum in Västernorrlands län (0663) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Husum', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46663') && ($len == 14))) {
   //Husum in Västernorrlands län (0663) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Husum', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46663') && ($len == 15))) {
   //Husum in Västernorrlands län (0663) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Husum', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46670') && ($len == 12))) {
   //Strömsund in Jämtlands län (0670) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömsund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46670') && ($len == 13))) {
   //Strömsund in Jämtlands län (0670) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömsund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46670') && ($len == 14))) {
   //Strömsund in Jämtlands län (0670) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömsund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46670') && ($len == 15))) {
   //Strömsund in Jämtlands län (0670) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Strömsund', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46671') && ($len == 12))) {
   //Hoting in Jämtlands län (0671) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hoting', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46671') && ($len == 13))) {
   //Hoting in Jämtlands län (0671) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hoting', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46671') && ($len == 14))) {
   //Hoting in Jämtlands län (0671) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hoting', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46671') && ($len == 15))) {
   //Hoting in Jämtlands län (0671) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hoting', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46672') && ($len == 12))) {
   //Gäddede in Jämtlands län (0672) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gäddede', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46672') && ($len == 13))) {
   //Gäddede in Jämtlands län (0672) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gäddede', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46672') && ($len == 14))) {
   //Gäddede in Jämtlands län (0672) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gäddede', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46672') && ($len == 15))) {
   //Gäddede in Jämtlands län (0672) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gäddede', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46680') && ($len == 12))) {
   //Sveg in Jämtlands län (0680) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sveg', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46680') && ($len == 13))) {
   //Sveg in Jämtlands län (0680) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sveg', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46680') && ($len == 14))) {
   //Sveg in Jämtlands län (0680) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sveg', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46680') && ($len == 15))) {
   //Sveg in Jämtlands län (0680) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sveg', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46682') && ($len == 12))) {
   //Rätan in Jämtlands län (0682) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rätan', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46682') && ($len == 13))) {
   //Rätan in Jämtlands län (0682) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rätan', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46682') && ($len == 14))) {
   //Rätan in Jämtlands län (0682) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rätan', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46682') && ($len == 15))) {
   //Rätan in Jämtlands län (0682) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Rätan', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46684') && ($len == 12))) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hede-Funäsdalen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46684') && ($len == 13))) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hede-Funäsdalen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46684') && ($len == 14))) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hede-Funäsdalen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46684') && ($len == 15))) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hede-Funäsdalen', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46687') && ($len == 12))) {
   //Svenstavik in Jämtlands län (0687) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenstavik', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46687') && ($len == 13))) {
   //Svenstavik in Jämtlands län (0687) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenstavik', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46687') && ($len == 14))) {
   //Svenstavik in Jämtlands län (0687) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenstavik', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46687') && ($len == 15))) {
   //Svenstavik in Jämtlands län (0687) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Svenstavik', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46690') && ($len == 12))) {
   //Ånge in Västernorrlands län (0690) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ånge', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46690') && ($len == 13))) {
   //Ånge in Västernorrlands län (0690) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ånge', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46690') && ($len == 14))) {
   //Ånge in Västernorrlands län (0690) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ånge', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46690') && ($len == 15))) {
   //Ånge in Västernorrlands län (0690) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Ånge', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46691') && ($len == 12))) {
   //Torpshammar in Västernorrlands län (0691) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torpshammar', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46691') && ($len == 13))) {
   //Torpshammar in Västernorrlands län (0691) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torpshammar', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46691') && ($len == 14))) {
   //Torpshammar in Västernorrlands län (0691) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torpshammar', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46691') && ($len == 15))) {
   //Torpshammar in Västernorrlands län (0691) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Torpshammar', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46692') && ($len == 12))) {
   //Liden in Västernorrlands län (0692) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Liden', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46692') && ($len == 13))) {
   //Liden in Västernorrlands län (0692) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Liden', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46692') && ($len == 14))) {
   //Liden in Västernorrlands län (0692) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Liden', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46692') && ($len == 15))) {
   //Liden in Västernorrlands län (0692) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Liden', 'region' => 'Västernorrlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46693') && ($len == 12))) {
   //Bräcke-Gällö in Jämtlands län (0693) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bräcke-Gällö', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46693') && ($len == 13))) {
   //Bräcke-Gällö in Jämtlands län (0693) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bräcke-Gällö', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46693') && ($len == 14))) {
   //Bräcke-Gällö in Jämtlands län (0693) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bräcke-Gällö', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46693') && ($len == 15))) {
   //Bräcke-Gällö in Jämtlands län (0693) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bräcke-Gällö', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46695') && ($len == 12))) {
   //Stugun in Jämtlands län (0695) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stugun', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46695') && ($len == 13))) {
   //Stugun in Jämtlands län (0695) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stugun', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46695') && ($len == 14))) {
   //Stugun in Jämtlands län (0695) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stugun', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46695') && ($len == 15))) {
   //Stugun in Jämtlands län (0695) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Stugun', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46696') && ($len == 12))) {
   //Hammarstrand in Jämtlands län (0696) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammarstrand', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46696') && ($len == 13))) {
   //Hammarstrand in Jämtlands län (0696) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammarstrand', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46696') && ($len == 14))) {
   //Hammarstrand in Jämtlands län (0696) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammarstrand', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46696') && ($len == 15))) {
   //Hammarstrand in Jämtlands län (0696) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hammarstrand', 'region' => 'Jämtlands län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46910') && ($len == 12))) {
   //Skellefteå in Västerbottens län (0910) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skellefteå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46910') && ($len == 13))) {
   //Skellefteå in Västerbottens län (0910) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skellefteå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46910') && ($len == 14))) {
   //Skellefteå in Västerbottens län (0910) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skellefteå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46910') && ($len == 15))) {
   //Skellefteå in Västerbottens län (0910) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Skellefteå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46911') && ($len == 12))) {
   //Piteå in Norrbottens län (0911) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Piteå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46911') && ($len == 13))) {
   //Piteå in Norrbottens län (0911) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Piteå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46911') && ($len == 14))) {
   //Piteå in Norrbottens län (0911) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Piteå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46911') && ($len == 15))) {
   //Piteå in Norrbottens län (0911) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Piteå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46912') && ($len == 12))) {
   //Byske in Västerbottens län (0912) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Byske', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46912') && ($len == 13))) {
   //Byske in Västerbottens län (0912) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Byske', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46912') && ($len == 14))) {
   //Byske in Västerbottens län (0912) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Byske', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46912') && ($len == 15))) {
   //Byske in Västerbottens län (0912) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Byske', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46913') && ($len == 12))) {
   //Lövånger in Västerbottens län (0913) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lövånger', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46913') && ($len == 13))) {
   //Lövånger in Västerbottens län (0913) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lövånger', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46913') && ($len == 14))) {
   //Lövånger in Västerbottens län (0913) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lövånger', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46913') && ($len == 15))) {
   //Lövånger in Västerbottens län (0913) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lövånger', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46914') && ($len == 12))) {
   //Burträsk in Västerbottens län (0914) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Burträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46914') && ($len == 13))) {
   //Burträsk in Västerbottens län (0914) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Burträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46914') && ($len == 14))) {
   //Burträsk in Västerbottens län (0914) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Burträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46914') && ($len == 15))) {
   //Burträsk in Västerbottens län (0914) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Burträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46915') && ($len == 12))) {
   //Bastuträsk in Västerbottens län (0915) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bastuträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46915') && ($len == 13))) {
   //Bastuträsk in Västerbottens län (0915) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bastuträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46915') && ($len == 14))) {
   //Bastuträsk in Västerbottens län (0915) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bastuträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46915') && ($len == 15))) {
   //Bastuträsk in Västerbottens län (0915) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bastuträsk', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46916') && ($len == 12))) {
   //Jörn in Västerbottens län (0916) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jörn', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46916') && ($len == 13))) {
   //Jörn in Västerbottens län (0916) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jörn', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46916') && ($len == 14))) {
   //Jörn in Västerbottens län (0916) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jörn', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46916') && ($len == 15))) {
   //Jörn in Västerbottens län (0916) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jörn', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46918') && ($len == 12))) {
   //Norsjö in Västerbottens län (0918) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norsjö', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46918') && ($len == 13))) {
   //Norsjö in Västerbottens län (0918) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norsjö', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46918') && ($len == 14))) {
   //Norsjö in Västerbottens län (0918) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norsjö', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46918') && ($len == 15))) {
   //Norsjö in Västerbottens län (0918) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Norsjö', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46920') && ($len == 12))) {
   //Luleå in Norrbottens län (0920) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Luleå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46920') && ($len == 13))) {
   //Luleå in Norrbottens län (0920) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Luleå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46920') && ($len == 14))) {
   //Luleå in Norrbottens län (0920) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Luleå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46920') && ($len == 15))) {
   //Luleå in Norrbottens län (0920) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Luleå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46921') && ($len == 12))) {
   //Boden in Norrbottens län (0921) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Boden', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46921') && ($len == 13))) {
   //Boden in Norrbottens län (0921) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Boden', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46921') && ($len == 14))) {
   //Boden in Norrbottens län (0921) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Boden', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46921') && ($len == 15))) {
   //Boden in Norrbottens län (0921) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Boden', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46922') && ($len == 12))) {
   //Haparanda in Norrbottens län (0922) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Haparanda', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46922') && ($len == 13))) {
   //Haparanda in Norrbottens län (0922) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Haparanda', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46922') && ($len == 14))) {
   //Haparanda in Norrbottens län (0922) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Haparanda', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46922') && ($len == 15))) {
   //Haparanda in Norrbottens län (0922) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Haparanda', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46923') && ($len == 12))) {
   //Kalix in Norrbottens län (0923) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46923') && ($len == 13))) {
   //Kalix in Norrbottens län (0923) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46923') && ($len == 14))) {
   //Kalix in Norrbottens län (0923) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46923') && ($len == 15))) {
   //Kalix in Norrbottens län (0923) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46924') && ($len == 12))) {
   //Råneå in Norrbottens län (0924) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Råneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46924') && ($len == 13))) {
   //Råneå in Norrbottens län (0924) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Råneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46924') && ($len == 14))) {
   //Råneå in Norrbottens län (0924) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Råneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46924') && ($len == 15))) {
   //Råneå in Norrbottens län (0924) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Råneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46925') && ($len == 12))) {
   //Lakaträsk in Norrbottens län (0925) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lakaträsk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46925') && ($len == 13))) {
   //Lakaträsk in Norrbottens län (0925) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lakaträsk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46925') && ($len == 14))) {
   //Lakaträsk in Norrbottens län (0925) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lakaträsk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46925') && ($len == 15))) {
   //Lakaträsk in Norrbottens län (0925) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lakaträsk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46926') && ($len == 12))) {
   //Överkalix in Norrbottens län (0926) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Överkalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46926') && ($len == 13))) {
   //Överkalix in Norrbottens län (0926) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Överkalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46926') && ($len == 14))) {
   //Överkalix in Norrbottens län (0926) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Överkalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46926') && ($len == 15))) {
   //Överkalix in Norrbottens län (0926) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Överkalix', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46927') && ($len == 12))) {
   //Övertorneå in Norrbottens län (0927) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Övertorneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46927') && ($len == 13))) {
   //Övertorneå in Norrbottens län (0927) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Övertorneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46927') && ($len == 14))) {
   //Övertorneå in Norrbottens län (0927) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Övertorneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46927') && ($len == 15))) {
   //Övertorneå in Norrbottens län (0927) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Övertorneå', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46928') && ($len == 12))) {
   //Harads in Norrbottens län (0928) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Harads', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46928') && ($len == 13))) {
   //Harads in Norrbottens län (0928) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Harads', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46928') && ($len == 14))) {
   //Harads in Norrbottens län (0928) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Harads', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46928') && ($len == 15))) {
   //Harads in Norrbottens län (0928) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Harads', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46929') && ($len == 12))) {
   //Älvsbyn in Norrbottens län (0929) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvsbyn', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46929') && ($len == 13))) {
   //Älvsbyn in Norrbottens län (0929) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvsbyn', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46929') && ($len == 14))) {
   //Älvsbyn in Norrbottens län (0929) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvsbyn', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46929') && ($len == 15))) {
   //Älvsbyn in Norrbottens län (0929) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Älvsbyn', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46930') && ($len == 12))) {
   //Nordmaling in Västerbottens län (0930) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nordmaling', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46930') && ($len == 13))) {
   //Nordmaling in Västerbottens län (0930) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nordmaling', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46930') && ($len == 14))) {
   //Nordmaling in Västerbottens län (0930) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nordmaling', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46930') && ($len == 15))) {
   //Nordmaling in Västerbottens län (0930) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Nordmaling', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46932') && ($len == 12))) {
   //Bjurholm in Västerbottens län (0932) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bjurholm', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46932') && ($len == 13))) {
   //Bjurholm in Västerbottens län (0932) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bjurholm', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46932') && ($len == 14))) {
   //Bjurholm in Västerbottens län (0932) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bjurholm', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46932') && ($len == 15))) {
   //Bjurholm in Västerbottens län (0932) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Bjurholm', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46933') && ($len == 12))) {
   //Vindeln in Västerbottens län (0933) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vindeln', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46933') && ($len == 13))) {
   //Vindeln in Västerbottens län (0933) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vindeln', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46933') && ($len == 14))) {
   //Vindeln in Västerbottens län (0933) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vindeln', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46933') && ($len == 15))) {
   //Vindeln in Västerbottens län (0933) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vindeln', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46934') && ($len == 12))) {
   //Robertsfors in Västerbottens län (0934) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Robertsfors', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46934') && ($len == 13))) {
   //Robertsfors in Västerbottens län (0934) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Robertsfors', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46934') && ($len == 14))) {
   //Robertsfors in Västerbottens län (0934) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Robertsfors', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46934') && ($len == 15))) {
   //Robertsfors in Västerbottens län (0934) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Robertsfors', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46935') && ($len == 12))) {
   //Vännäs in Västerbottens län (0935) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vännäs', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46935') && ($len == 13))) {
   //Vännäs in Västerbottens län (0935) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vännäs', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46935') && ($len == 14))) {
   //Vännäs in Västerbottens län (0935) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vännäs', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46935') && ($len == 15))) {
   //Vännäs in Västerbottens län (0935) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vännäs', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46940') && ($len == 12))) {
   //Vilhelmina in Västerbottens län (0940) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vilhelmina', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46940') && ($len == 13))) {
   //Vilhelmina in Västerbottens län (0940) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vilhelmina', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46940') && ($len == 14))) {
   //Vilhelmina in Västerbottens län (0940) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vilhelmina', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46940') && ($len == 15))) {
   //Vilhelmina in Västerbottens län (0940) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vilhelmina', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46941') && ($len == 12))) {
   //Åsele in Västerbottens län (0941) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46941') && ($len == 13))) {
   //Åsele in Västerbottens län (0941) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46941') && ($len == 14))) {
   //Åsele in Västerbottens län (0941) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46941') && ($len == 15))) {
   //Åsele in Västerbottens län (0941) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Åsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46942') && ($len == 12))) {
   //Dorotea in Västerbottens län (0942) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Dorotea', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46942') && ($len == 13))) {
   //Dorotea in Västerbottens län (0942) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Dorotea', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46942') && ($len == 14))) {
   //Dorotea in Västerbottens län (0942) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Dorotea', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46942') && ($len == 15))) {
   //Dorotea in Västerbottens län (0942) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Dorotea', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46943') && ($len == 12))) {
   //Fredrika in Västerbottens län (0943) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fredrika', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46943') && ($len == 13))) {
   //Fredrika in Västerbottens län (0943) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fredrika', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46943') && ($len == 14))) {
   //Fredrika in Västerbottens län (0943) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fredrika', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46943') && ($len == 15))) {
   //Fredrika in Västerbottens län (0943) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Fredrika', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46950') && ($len == 12))) {
   //Lycksele in Västerbottens län (0950) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lycksele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46950') && ($len == 13))) {
   //Lycksele in Västerbottens län (0950) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lycksele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46950') && ($len == 14))) {
   //Lycksele in Västerbottens län (0950) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lycksele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46950') && ($len == 15))) {
   //Lycksele in Västerbottens län (0950) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Lycksele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46951') && ($len == 12))) {
   //Storuman in Västerbottens län (0951) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Storuman', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46951') && ($len == 13))) {
   //Storuman in Västerbottens län (0951) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Storuman', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46951') && ($len == 14))) {
   //Storuman in Västerbottens län (0951) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Storuman', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46951') && ($len == 15))) {
   //Storuman in Västerbottens län (0951) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Storuman', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46952') && ($len == 12))) {
   //Sorsele in Västerbottens län (0952) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sorsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46952') && ($len == 13))) {
   //Sorsele in Västerbottens län (0952) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sorsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46952') && ($len == 14))) {
   //Sorsele in Västerbottens län (0952) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sorsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46952') && ($len == 15))) {
   //Sorsele in Västerbottens län (0952) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Sorsele', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46953') && ($len == 12))) {
   //Malå in Västerbottens län (0953) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46953') && ($len == 13))) {
   //Malå in Västerbottens län (0953) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46953') && ($len == 14))) {
   //Malå in Västerbottens län (0953) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46953') && ($len == 15))) {
   //Malå in Västerbottens län (0953) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Malå', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46954') && ($len == 12))) {
   //Tärnaby in Västerbottens län (0954) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnaby', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46954') && ($len == 13))) {
   //Tärnaby in Västerbottens län (0954) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnaby', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46954') && ($len == 14))) {
   //Tärnaby in Västerbottens län (0954) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnaby', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46954') && ($len == 15))) {
   //Tärnaby in Västerbottens län (0954) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Tärnaby', 'region' => 'Västerbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46960') && ($len == 12))) {
   //Arvidsjaur in Norrbottens län (0960) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvidsjaur', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46960') && ($len == 13))) {
   //Arvidsjaur in Norrbottens län (0960) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvidsjaur', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46960') && ($len == 14))) {
   //Arvidsjaur in Norrbottens län (0960) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvidsjaur', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46960') && ($len == 15))) {
   //Arvidsjaur in Norrbottens län (0960) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arvidsjaur', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46961') && ($len == 12))) {
   //Arjeplog in Norrbottens län (0961) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arjeplog', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46961') && ($len == 13))) {
   //Arjeplog in Norrbottens län (0961) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arjeplog', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46961') && ($len == 14))) {
   //Arjeplog in Norrbottens län (0961) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arjeplog', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46961') && ($len == 15))) {
   //Arjeplog in Norrbottens län (0961) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Arjeplog', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46970') && ($len == 12))) {
   //Gällivare in Norrbottens län (0970) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gällivare', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46970') && ($len == 13))) {
   //Gällivare in Norrbottens län (0970) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gällivare', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46970') && ($len == 14))) {
   //Gällivare in Norrbottens län (0970) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gällivare', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46970') && ($len == 15))) {
   //Gällivare in Norrbottens län (0970) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Gällivare', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46971') && ($len == 12))) {
   //Jokkmokk in Norrbottens län (0971) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jokkmokk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46971') && ($len == 13))) {
   //Jokkmokk in Norrbottens län (0971) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jokkmokk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46971') && ($len == 14))) {
   //Jokkmokk in Norrbottens län (0971) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jokkmokk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46971') && ($len == 15))) {
   //Jokkmokk in Norrbottens län (0971) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Jokkmokk', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46973') && ($len == 12))) {
   //Porjus in Norrbottens län (0973) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Porjus', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46973') && ($len == 13))) {
   //Porjus in Norrbottens län (0973) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Porjus', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46973') && ($len == 14))) {
   //Porjus in Norrbottens län (0973) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Porjus', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46973') && ($len == 15))) {
   //Porjus in Norrbottens län (0973) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Porjus', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46975') && ($len == 12))) {
   //Hakkas in Norrbottens län (0975) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hakkas', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46975') && ($len == 13))) {
   //Hakkas in Norrbottens län (0975) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hakkas', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46975') && ($len == 14))) {
   //Hakkas in Norrbottens län (0975) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hakkas', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46975') && ($len == 15))) {
   //Hakkas in Norrbottens län (0975) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Hakkas', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46976') && ($len == 12))) {
   //Vuollerim in Norrbottens län (0976) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vuollerim', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46976') && ($len == 13))) {
   //Vuollerim in Norrbottens län (0976) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vuollerim', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46976') && ($len == 14))) {
   //Vuollerim in Norrbottens län (0976) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vuollerim', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46976') && ($len == 15))) {
   //Vuollerim in Norrbottens län (0976) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vuollerim', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46977') && ($len == 12))) {
   //Korpilombolo in Norrbottens län (0977) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Korpilombolo', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46977') && ($len == 13))) {
   //Korpilombolo in Norrbottens län (0977) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Korpilombolo', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46977') && ($len == 14))) {
   //Korpilombolo in Norrbottens län (0977) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Korpilombolo', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46977') && ($len == 15))) {
   //Korpilombolo in Norrbottens län (0977) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Korpilombolo', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46978') && ($len == 12))) {
   //Pajala in Norrbottens län (0978) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Pajala', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46978') && ($len == 13))) {
   //Pajala in Norrbottens län (0978) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Pajala', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46978') && ($len == 14))) {
   //Pajala in Norrbottens län (0978) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Pajala', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46978') && ($len == 15))) {
   //Pajala in Norrbottens län (0978) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Pajala', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46980') && ($len == 12))) {
   //Kiruna in Norrbottens län (0980) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kiruna', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46980') && ($len == 13))) {
   //Kiruna in Norrbottens län (0980) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kiruna', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46980') && ($len == 14))) {
   //Kiruna in Norrbottens län (0980) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kiruna', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46980') && ($len == 15))) {
   //Kiruna in Norrbottens län (0980) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Kiruna', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} else

if(($found['number'] == '') && (($substr[6] === '+46981') && ($len == 12))) {
   //Vittangi in Norrbottens län (0981) : 10 digit
   $num  = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
   $found= array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vittangi', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46981') && ($len == 13))) {
   //Vittangi in Norrbottens län (0981) : 11 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vittangi', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46981') && ($len == 14))) {
   //Vittangi in Norrbottens län (0981) : 12 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vittangi', 'region' => 'Norrbottens län', 'country' => 'Sweden');
} elseif(($found['number'] == '') && (($substr[6] === '+46981') && ($len == 15))) {
   //Vittangi in Norrbottens län (0981) : 13 digit
   $num = substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3);
   $found = array('number' => '+46 ' . $num, 'local' => '0' . $num, 'city' => 'Vittangi', 'region' => 'Norrbottens län', 'country' => 'Sweden');
}
