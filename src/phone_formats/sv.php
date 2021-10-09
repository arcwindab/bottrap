<?php

if((substr($phone, 0, strlen('+467')) === '+467') && (strlen($phone) == 12)) {
   //Mobile
   $found = array('number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mobile',
                  'region' => '',
                  'country' => 'Sweden');








} elseif((substr($phone, 0, strlen('+468')) === '+468') && (strlen($phone) == 10)) {
   //Stockholm in Stockholms län (08) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 2) . ' ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2),
                  'local' => '0' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 2) . ' ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2),
                  'city'   => 'Stockholm',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+468')) === '+468') && (strlen($phone) == 11)) {
   //Stockholm in Stockholms län (08) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Stockholm',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+468')) === '+468') && (strlen($phone) == 12)) {
   //Stockholm in Stockholms län (08) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Stockholm',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+468')) === '+468') && (strlen($phone) == 13)) {
   //Stockholm in Stockholms län (08) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 1) . ' - ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Stockholm',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4611')) === '+4611') && (strlen($phone) == 11)) {
   //Norrköping in Östergötlands län (011) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Norrköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4611')) === '+4611') && (strlen($phone) == 12)) {
   //Norrköping in Östergötlands län (011) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Norrköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4611')) === '+4611') && (strlen($phone) == 13)) {
   //Norrköping in Östergötlands län (011) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Norrköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4611')) === '+4611') && (strlen($phone) == 14)) {
   //Norrköping in Östergötlands län (011) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Norrköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4613')) === '+4613') && (strlen($phone) == 11)) {
   //Linköping in Östergötlands län (013) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Linköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4613')) === '+4613') && (strlen($phone) == 12)) {
   //Linköping in Östergötlands län (013) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Linköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4613')) === '+4613') && (strlen($phone) == 13)) {
   //Linköping in Östergötlands län (013) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Linköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4613')) === '+4613') && (strlen($phone) == 14)) {
   //Linköping in Östergötlands län (013) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Linköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4616')) === '+4616') && (strlen($phone) == 11)) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Eskilstuna-Torshälla',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4616')) === '+4616') && (strlen($phone) == 12)) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Eskilstuna-Torshälla',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4616')) === '+4616') && (strlen($phone) == 13)) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Eskilstuna-Torshälla',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4616')) === '+4616') && (strlen($phone) == 14)) {
   //Eskilstuna-Torshälla in Södermanlands län (016) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Eskilstuna-Torshälla',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4618')) === '+4618') && (strlen($phone) == 11)) {
   //Uppsala in Uppsala län (018) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Uppsala',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4618')) === '+4618') && (strlen($phone) == 12)) {
   //Uppsala in Uppsala län (018) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Uppsala',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4618')) === '+4618') && (strlen($phone) == 13)) {
   //Uppsala in Uppsala län (018) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Uppsala',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4618')) === '+4618') && (strlen($phone) == 14)) {
   //Uppsala in Uppsala län (018) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Uppsala',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4619')) === '+4619') && (strlen($phone) == 11)) {
   //Örebro-Kumla in Örebro län (019) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Örebro-Kumla',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4619')) === '+4619') && (strlen($phone) == 12)) {
   //Örebro-Kumla in Örebro län (019) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Örebro-Kumla',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4619')) === '+4619') && (strlen($phone) == 13)) {
   //Örebro-Kumla in Örebro län (019) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Örebro-Kumla',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4619')) === '+4619') && (strlen($phone) == 14)) {
   //Örebro-Kumla in Örebro län (019) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Örebro-Kumla',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4621')) === '+4621') && (strlen($phone) == 11)) {
   //Västerås in Västmanlands län (021) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Västerås',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4621')) === '+4621') && (strlen($phone) == 12)) {
   //Västerås in Västmanlands län (021) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Västerås',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4621')) === '+4621') && (strlen($phone) == 13)) {
   //Västerås in Västmanlands län (021) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Västerås',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4621')) === '+4621') && (strlen($phone) == 14)) {
   //Västerås in Västmanlands län (021) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Västerås',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4623')) === '+4623') && (strlen($phone) == 11)) {
   //Falun in Dalarnas län (023) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Falun',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4623')) === '+4623') && (strlen($phone) == 12)) {
   //Falun in Dalarnas län (023) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Falun',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4623')) === '+4623') && (strlen($phone) == 13)) {
   //Falun in Dalarnas län (023) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Falun',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4623')) === '+4623') && (strlen($phone) == 14)) {
   //Falun in Dalarnas län (023) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Falun',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4626')) === '+4626') && (strlen($phone) == 11)) {
   //Gävle-Sandviken in Gävleborgs län (026) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gävle-Sandviken',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4626')) === '+4626') && (strlen($phone) == 12)) {
   //Gävle-Sandviken in Gävleborgs län (026) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gävle-Sandviken',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4626')) === '+4626') && (strlen($phone) == 13)) {
   //Gävle-Sandviken in Gävleborgs län (026) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gävle-Sandviken',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4626')) === '+4626') && (strlen($phone) == 14)) {
   //Gävle-Sandviken in Gävleborgs län (026) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gävle-Sandviken',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4631')) === '+4631') && (strlen($phone) == 11)) {
   //Göteborg in Västra Götalands län (031) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Göteborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4631')) === '+4631') && (strlen($phone) == 12)) {
   //Göteborg in Västra Götalands län (031) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Göteborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4631')) === '+4631') && (strlen($phone) == 13)) {
   //Göteborg in Västra Götalands län (031) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Göteborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4631')) === '+4631') && (strlen($phone) == 14)) {
   //Göteborg in Västra Götalands län (031) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Göteborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4633')) === '+4633') && (strlen($phone) == 11)) {
   //Borås in Västra Götalands län (033) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Borås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4633')) === '+4633') && (strlen($phone) == 12)) {
   //Borås in Västra Götalands län (033) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Borås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4633')) === '+4633') && (strlen($phone) == 13)) {
   //Borås in Västra Götalands län (033) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Borås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4633')) === '+4633') && (strlen($phone) == 14)) {
   //Borås in Västra Götalands län (033) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Borås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4635')) === '+4635') && (strlen($phone) == 11)) {
   //Halmstad in Hallands län (035) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Halmstad',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4635')) === '+4635') && (strlen($phone) == 12)) {
   //Halmstad in Hallands län (035) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Halmstad',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4635')) === '+4635') && (strlen($phone) == 13)) {
   //Halmstad in Hallands län (035) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Halmstad',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4635')) === '+4635') && (strlen($phone) == 14)) {
   //Halmstad in Hallands län (035) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Halmstad',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4636')) === '+4636') && (strlen($phone) == 11)) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Jönköping-Huskvarna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4636')) === '+4636') && (strlen($phone) == 12)) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Jönköping-Huskvarna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4636')) === '+4636') && (strlen($phone) == 13)) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Jönköping-Huskvarna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4636')) === '+4636') && (strlen($phone) == 14)) {
   //Jönköping-Huskvarna in Jönköpings län (036) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Jönköping-Huskvarna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4640')) === '+4640') && (strlen($phone) == 11)) {
   //Malmö in Skåne län (040) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Malmö',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4640')) === '+4640') && (strlen($phone) == 12)) {
   //Malmö in Skåne län (040) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Malmö',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4640')) === '+4640') && (strlen($phone) == 13)) {
   //Malmö in Skåne län (040) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Malmö',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4640')) === '+4640') && (strlen($phone) == 14)) {
   //Malmö in Skåne län (040) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Malmö',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4642')) === '+4642') && (strlen($phone) == 11)) {
   //Helsingborg-Höganäs in Skåne län (042) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Helsingborg-Höganäs',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4642')) === '+4642') && (strlen($phone) == 12)) {
   //Helsingborg-Höganäs in Skåne län (042) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Helsingborg-Höganäs',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4642')) === '+4642') && (strlen($phone) == 13)) {
   //Helsingborg-Höganäs in Skåne län (042) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Helsingborg-Höganäs',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4642')) === '+4642') && (strlen($phone) == 14)) {
   //Helsingborg-Höganäs in Skåne län (042) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Helsingborg-Höganäs',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4644')) === '+4644') && (strlen($phone) == 11)) {
   //Kristianstad in Skåne län (044) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kristianstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4644')) === '+4644') && (strlen($phone) == 12)) {
   //Kristianstad in Skåne län (044) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kristianstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4644')) === '+4644') && (strlen($phone) == 13)) {
   //Kristianstad in Skåne län (044) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kristianstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4644')) === '+4644') && (strlen($phone) == 14)) {
   //Kristianstad in Skåne län (044) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kristianstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4646')) === '+4646') && (strlen($phone) == 11)) {
   //Lund in Skåne län (046) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lund',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4646')) === '+4646') && (strlen($phone) == 12)) {
   //Lund in Skåne län (046) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lund',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4646')) === '+4646') && (strlen($phone) == 13)) {
   //Lund in Skåne län (046) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lund',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4646')) === '+4646') && (strlen($phone) == 14)) {
   //Lund in Skåne län (046) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lund',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4654')) === '+4654') && (strlen($phone) == 11)) {
   //Karlstad in Värmlands län (054) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Karlstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4654')) === '+4654') && (strlen($phone) == 12)) {
   //Karlstad in Värmlands län (054) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Karlstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4654')) === '+4654') && (strlen($phone) == 13)) {
   //Karlstad in Värmlands län (054) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4654')) === '+4654') && (strlen($phone) == 14)) {
   //Karlstad in Värmlands län (054) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Karlstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4660')) === '+4660') && (strlen($phone) == 11)) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sundsvall-Timrå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4660')) === '+4660') && (strlen($phone) == 12)) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sundsvall-Timrå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4660')) === '+4660') && (strlen($phone) == 13)) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sundsvall-Timrå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4660')) === '+4660') && (strlen($phone) == 14)) {
   //Sundsvall-Timrå in Västernorrlands län (060) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sundsvall-Timrå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4663')) === '+4663') && (strlen($phone) == 11)) {
   //Östersund in Jämtlands län (063) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Östersund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4663')) === '+4663') && (strlen($phone) == 12)) {
   //Östersund in Jämtlands län (063) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Östersund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4663')) === '+4663') && (strlen($phone) == 13)) {
   //Östersund in Jämtlands län (063) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Östersund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4663')) === '+4663') && (strlen($phone) == 14)) {
   //Östersund in Jämtlands län (063) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Östersund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+4690')) === '+4690') && (strlen($phone) == 11)) {
   //Umeå in Västerbottens län (090) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 2) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Umeå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4690')) === '+4690') && (strlen($phone) == 12)) {
   //Umeå in Västerbottens län (090) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Umeå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4690')) === '+4690') && (strlen($phone) == 13)) {
   //Umeå in Västerbottens län (090) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Umeå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+4690')) === '+4690') && (strlen($phone) == 14)) {
   //Umeå in Västerbottens län (090) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 2) . ' - ' . substr($phone, 5, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Umeå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46120')) === '+46120') && (strlen($phone) == 12)) {
   //Åtvidaberg in Östergötlands län (0120) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åtvidaberg',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46120')) === '+46120') && (strlen($phone) == 13)) {
   //Åtvidaberg in Östergötlands län (0120) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Åtvidaberg',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46120')) === '+46120') && (strlen($phone) == 14)) {
   //Åtvidaberg in Östergötlands län (0120) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åtvidaberg',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46120')) === '+46120') && (strlen($phone) == 15)) {
   //Åtvidaberg in Östergötlands län (0120) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Åtvidaberg',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46121')) === '+46121') && (strlen($phone) == 12)) {
   //Söderköping in Östergötlands län (0121) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Söderköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46121')) === '+46121') && (strlen($phone) == 13)) {
   //Söderköping in Östergötlands län (0121) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Söderköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46121')) === '+46121') && (strlen($phone) == 14)) {
   //Söderköping in Östergötlands län (0121) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Söderköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46121')) === '+46121') && (strlen($phone) == 15)) {
   //Söderköping in Östergötlands län (0121) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Söderköping',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46122')) === '+46122') && (strlen($phone) == 12)) {
   //Finspång in Östergötlands län (0122) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Finspång',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46122')) === '+46122') && (strlen($phone) == 13)) {
   //Finspång in Östergötlands län (0122) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Finspång',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46122')) === '+46122') && (strlen($phone) == 14)) {
   //Finspång in Östergötlands län (0122) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Finspång',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46122')) === '+46122') && (strlen($phone) == 15)) {
   //Finspång in Östergötlands län (0122) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Finspång',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46123')) === '+46123') && (strlen($phone) == 12)) {
   //Valdemarsvik in Östergötlands län (0123) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Valdemarsvik',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46123')) === '+46123') && (strlen($phone) == 13)) {
   //Valdemarsvik in Östergötlands län (0123) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Valdemarsvik',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46123')) === '+46123') && (strlen($phone) == 14)) {
   //Valdemarsvik in Östergötlands län (0123) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Valdemarsvik',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46123')) === '+46123') && (strlen($phone) == 15)) {
   //Valdemarsvik in Östergötlands län (0123) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Valdemarsvik',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46125')) === '+46125') && (strlen($phone) == 12)) {
   //Vikbolandet in Östergötlands län (0125) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vikbolandet',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46125')) === '+46125') && (strlen($phone) == 13)) {
   //Vikbolandet in Östergötlands län (0125) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vikbolandet',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46125')) === '+46125') && (strlen($phone) == 14)) {
   //Vikbolandet in Östergötlands län (0125) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vikbolandet',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46125')) === '+46125') && (strlen($phone) == 15)) {
   //Vikbolandet in Östergötlands län (0125) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vikbolandet',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46140')) === '+46140') && (strlen($phone) == 12)) {
   //Tranås in Jönköpings län (0140) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tranås',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46140')) === '+46140') && (strlen($phone) == 13)) {
   //Tranås in Jönköpings län (0140) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tranås',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46140')) === '+46140') && (strlen($phone) == 14)) {
   //Tranås in Jönköpings län (0140) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tranås',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46140')) === '+46140') && (strlen($phone) == 15)) {
   //Tranås in Jönköpings län (0140) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tranås',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46141')) === '+46141') && (strlen($phone) == 12)) {
   //Motala in Östergötlands län (0141) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Motala',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46141')) === '+46141') && (strlen($phone) == 13)) {
   //Motala in Östergötlands län (0141) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Motala',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46141')) === '+46141') && (strlen($phone) == 14)) {
   //Motala in Östergötlands län (0141) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Motala',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46141')) === '+46141') && (strlen($phone) == 15)) {
   //Motala in Östergötlands län (0141) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Motala',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46142')) === '+46142') && (strlen($phone) == 12)) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mjölby-Skänninge-Boxholm',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46142')) === '+46142') && (strlen($phone) == 13)) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mjölby-Skänninge-Boxholm',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46142')) === '+46142') && (strlen($phone) == 14)) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mjölby-Skänninge-Boxholm',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46142')) === '+46142') && (strlen($phone) == 15)) {
   //Mjölby-Skänninge-Boxholm in Östergötlands län (0142) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mjölby-Skänninge-Boxholm',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46143')) === '+46143') && (strlen($phone) == 12)) {
   //Vadstena in Östergötlands län (0143) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vadstena',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46143')) === '+46143') && (strlen($phone) == 13)) {
   //Vadstena in Östergötlands län (0143) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vadstena',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46143')) === '+46143') && (strlen($phone) == 14)) {
   //Vadstena in Östergötlands län (0143) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vadstena',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46143')) === '+46143') && (strlen($phone) == 15)) {
   //Vadstena in Östergötlands län (0143) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vadstena',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46144')) === '+46144') && (strlen($phone) == 12)) {
   //Ödeshög in Östergötlands län (0144) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ödeshög',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46144')) === '+46144') && (strlen($phone) == 13)) {
   //Ödeshög in Östergötlands län (0144) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ödeshög',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46144')) === '+46144') && (strlen($phone) == 14)) {
   //Ödeshög in Östergötlands län (0144) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ödeshög',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46144')) === '+46144') && (strlen($phone) == 15)) {
   //Ödeshög in Östergötlands län (0144) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ödeshög',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46150')) === '+46150') && (strlen($phone) == 12)) {
   //Katrineholm in Södermanlands län (0150) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Katrineholm',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46150')) === '+46150') && (strlen($phone) == 13)) {
   //Katrineholm in Södermanlands län (0150) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Katrineholm',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46150')) === '+46150') && (strlen($phone) == 14)) {
   //Katrineholm in Södermanlands län (0150) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Katrineholm',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46150')) === '+46150') && (strlen($phone) == 15)) {
   //Katrineholm in Södermanlands län (0150) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Katrineholm',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46151')) === '+46151') && (strlen($phone) == 12)) {
   //Vingåker in Södermanlands län (0151) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vingåker',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46151')) === '+46151') && (strlen($phone) == 13)) {
   //Vingåker in Södermanlands län (0151) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vingåker',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46151')) === '+46151') && (strlen($phone) == 14)) {
   //Vingåker in Södermanlands län (0151) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vingåker',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46151')) === '+46151') && (strlen($phone) == 15)) {
   //Vingåker in Södermanlands län (0151) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vingåker',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46152')) === '+46152') && (strlen($phone) == 12)) {
   //Strängnäs in Södermanlands län (0152) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Strängnäs',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46152')) === '+46152') && (strlen($phone) == 13)) {
   //Strängnäs in Södermanlands län (0152) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Strängnäs',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46152')) === '+46152') && (strlen($phone) == 14)) {
   //Strängnäs in Södermanlands län (0152) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Strängnäs',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46152')) === '+46152') && (strlen($phone) == 15)) {
   //Strängnäs in Södermanlands län (0152) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Strängnäs',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46155')) === '+46155') && (strlen($phone) == 12)) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nyköping-Oxelösund',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46155')) === '+46155') && (strlen($phone) == 13)) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Nyköping-Oxelösund',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46155')) === '+46155') && (strlen($phone) == 14)) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nyköping-Oxelösund',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46155')) === '+46155') && (strlen($phone) == 15)) {
   //Nyköping-Oxelösund in Södermanlands län (0155) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Nyköping-Oxelösund',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46156')) === '+46156') && (strlen($phone) == 12)) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Trosa-Vagnhärad',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46156')) === '+46156') && (strlen($phone) == 13)) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Trosa-Vagnhärad',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46156')) === '+46156') && (strlen($phone) == 14)) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Trosa-Vagnhärad',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46156')) === '+46156') && (strlen($phone) == 15)) {
   //Trosa-Vagnhärad in Södermanlands län (0156) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Trosa-Vagnhärad',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46157')) === '+46157') && (strlen($phone) == 12)) {
   //Flen-Malmköping in Södermanlands län (0157) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Flen-Malmköping',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46157')) === '+46157') && (strlen($phone) == 13)) {
   //Flen-Malmköping in Södermanlands län (0157) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Flen-Malmköping',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46157')) === '+46157') && (strlen($phone) == 14)) {
   //Flen-Malmköping in Södermanlands län (0157) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Flen-Malmköping',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46157')) === '+46157') && (strlen($phone) == 15)) {
   //Flen-Malmköping in Södermanlands län (0157) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Flen-Malmköping',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46158')) === '+46158') && (strlen($phone) == 12)) {
   //Gnesta in Södermanlands län (0158) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gnesta',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46158')) === '+46158') && (strlen($phone) == 13)) {
   //Gnesta in Södermanlands län (0158) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gnesta',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46158')) === '+46158') && (strlen($phone) == 14)) {
   //Gnesta in Södermanlands län (0158) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gnesta',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46158')) === '+46158') && (strlen($phone) == 15)) {
   //Gnesta in Södermanlands län (0158) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gnesta',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46159')) === '+46159') && (strlen($phone) == 12)) {
   //Mariefred in Södermanlands län (0159) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mariefred',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46159')) === '+46159') && (strlen($phone) == 13)) {
   //Mariefred in Södermanlands län (0159) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mariefred',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46159')) === '+46159') && (strlen($phone) == 14)) {
   //Mariefred in Södermanlands län (0159) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mariefred',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46159')) === '+46159') && (strlen($phone) == 15)) {
   //Mariefred in Södermanlands län (0159) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mariefred',
                  'region' => 'Södermanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46171')) === '+46171') && (strlen($phone) == 12)) {
   //Enköping in Uppsala län (0171) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Enköping',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46171')) === '+46171') && (strlen($phone) == 13)) {
   //Enköping in Uppsala län (0171) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Enköping',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46171')) === '+46171') && (strlen($phone) == 14)) {
   //Enköping in Uppsala län (0171) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Enköping',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46171')) === '+46171') && (strlen($phone) == 15)) {
   //Enköping in Uppsala län (0171) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Enköping',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46173')) === '+46173') && (strlen($phone) == 12)) {
   //Öregrund-Östhammar in Uppsala län (0173) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Öregrund-Östhammar',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46173')) === '+46173') && (strlen($phone) == 13)) {
   //Öregrund-Östhammar in Uppsala län (0173) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Öregrund-Östhammar',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46173')) === '+46173') && (strlen($phone) == 14)) {
   //Öregrund-Östhammar in Uppsala län (0173) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Öregrund-Östhammar',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46173')) === '+46173') && (strlen($phone) == 15)) {
   //Öregrund-Östhammar in Uppsala län (0173) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Öregrund-Östhammar',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46174')) === '+46174') && (strlen($phone) == 12)) {
   //Alunda in Uppsala län (0174) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alunda',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46174')) === '+46174') && (strlen($phone) == 13)) {
   //Alunda in Uppsala län (0174) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Alunda',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46174')) === '+46174') && (strlen($phone) == 14)) {
   //Alunda in Uppsala län (0174) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alunda',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46174')) === '+46174') && (strlen($phone) == 15)) {
   //Alunda in Uppsala län (0174) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Alunda',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46175')) === '+46175') && (strlen($phone) == 12)) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallstavik-Rimbo',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46175')) === '+46175') && (strlen($phone) == 13)) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hallstavik-Rimbo',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46175')) === '+46175') && (strlen($phone) == 14)) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallstavik-Rimbo',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46175')) === '+46175') && (strlen($phone) == 15)) {
   //Hallstavik-Rimbo in Stockholms län (0175) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hallstavik-Rimbo',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46176')) === '+46176') && (strlen($phone) == 12)) {
   //Norrtälje in Stockholms län (0176) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Norrtälje',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46176')) === '+46176') && (strlen($phone) == 13)) {
   //Norrtälje in Stockholms län (0176) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Norrtälje',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46176')) === '+46176') && (strlen($phone) == 14)) {
   //Norrtälje in Stockholms län (0176) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Norrtälje',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46176')) === '+46176') && (strlen($phone) == 15)) {
   //Norrtälje in Stockholms län (0176) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Norrtälje',
                  'region' => 'Stockholms län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46220')) === '+46220') && (strlen($phone) == 12)) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallstahammar-Surahammar',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46220')) === '+46220') && (strlen($phone) == 13)) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hallstahammar-Surahammar',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46220')) === '+46220') && (strlen($phone) == 14)) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallstahammar-Surahammar',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46220')) === '+46220') && (strlen($phone) == 15)) {
   //Hallstahammar-Surahammar in Västmanlands län (0220) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hallstahammar-Surahammar',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46221')) === '+46221') && (strlen($phone) == 12)) {
   //Köping in Västmanlands län (0221) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Köping',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46221')) === '+46221') && (strlen($phone) == 13)) {
   //Köping in Västmanlands län (0221) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Köping',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46221')) === '+46221') && (strlen($phone) == 14)) {
   //Köping in Västmanlands län (0221) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Köping',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46221')) === '+46221') && (strlen($phone) == 15)) {
   //Köping in Västmanlands län (0221) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Köping',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46222')) === '+46222') && (strlen($phone) == 12)) {
   //Skinnskatteberg in Västmanlands län (0222) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skinnskatteberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46222')) === '+46222') && (strlen($phone) == 13)) {
   //Skinnskatteberg in Västmanlands län (0222) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Skinnskatteberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46222')) === '+46222') && (strlen($phone) == 14)) {
   //Skinnskatteberg in Västmanlands län (0222) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skinnskatteberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46222')) === '+46222') && (strlen($phone) == 15)) {
   //Skinnskatteberg in Västmanlands län (0222) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Skinnskatteberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46223')) === '+46223') && (strlen($phone) == 12)) {
   //Fagersta-Norberg in Västmanlands län (0223) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Fagersta-Norberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46223')) === '+46223') && (strlen($phone) == 13)) {
   //Fagersta-Norberg in Västmanlands län (0223) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Fagersta-Norberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46223')) === '+46223') && (strlen($phone) == 14)) {
   //Fagersta-Norberg in Västmanlands län (0223) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Fagersta-Norberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46223')) === '+46223') && (strlen($phone) == 15)) {
   //Fagersta-Norberg in Västmanlands län (0223) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Fagersta-Norberg',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46224')) === '+46224') && (strlen($phone) == 12)) {
   //Sala-Heby in Västmanlands län (0224) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sala-Heby',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46224')) === '+46224') && (strlen($phone) == 13)) {
   //Sala-Heby in Västmanlands län (0224) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sala-Heby',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46224')) === '+46224') && (strlen($phone) == 14)) {
   //Sala-Heby in Västmanlands län (0224) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sala-Heby',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46224')) === '+46224') && (strlen($phone) == 15)) {
   //Sala-Heby in Västmanlands län (0224) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sala-Heby',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46225')) === '+46225') && (strlen($phone) == 12)) {
   //Hedemora-Säter in Dalarnas län (0225) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hedemora-Säter',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46225')) === '+46225') && (strlen($phone) == 13)) {
   //Hedemora-Säter in Dalarnas län (0225) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hedemora-Säter',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46225')) === '+46225') && (strlen($phone) == 14)) {
   //Hedemora-Säter in Dalarnas län (0225) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hedemora-Säter',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46225')) === '+46225') && (strlen($phone) == 15)) {
   //Hedemora-Säter in Dalarnas län (0225) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hedemora-Säter',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46226')) === '+46226') && (strlen($phone) == 12)) {
   //Avesta-Krylbo in Dalarnas län (0226) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Avesta-Krylbo',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46226')) === '+46226') && (strlen($phone) == 13)) {
   //Avesta-Krylbo in Dalarnas län (0226) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Avesta-Krylbo',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46226')) === '+46226') && (strlen($phone) == 14)) {
   //Avesta-Krylbo in Dalarnas län (0226) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Avesta-Krylbo',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46226')) === '+46226') && (strlen($phone) == 15)) {
   //Avesta-Krylbo in Dalarnas län (0226) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Avesta-Krylbo',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46227')) === '+46227') && (strlen($phone) == 12)) {
   //Kungsör in Västmanlands län (0227) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kungsör',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46227')) === '+46227') && (strlen($phone) == 13)) {
   //Kungsör in Västmanlands län (0227) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kungsör',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46227')) === '+46227') && (strlen($phone) == 14)) {
   //Kungsör in Västmanlands län (0227) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kungsör',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46227')) === '+46227') && (strlen($phone) == 15)) {
   //Kungsör in Västmanlands län (0227) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kungsör',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46240')) === '+46240') && (strlen($phone) == 12)) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ludvika-Smedjebacken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46240')) === '+46240') && (strlen($phone) == 13)) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ludvika-Smedjebacken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46240')) === '+46240') && (strlen($phone) == 14)) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ludvika-Smedjebacken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46240')) === '+46240') && (strlen($phone) == 15)) {
   //Ludvika-Smedjebacken in Dalarnas län (0240) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ludvika-Smedjebacken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46241')) === '+46241') && (strlen($phone) == 12)) {
   //Gagnef-Floda in Dalarnas län (0241) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gagnef-Floda',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46241')) === '+46241') && (strlen($phone) == 13)) {
   //Gagnef-Floda in Dalarnas län (0241) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gagnef-Floda',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46241')) === '+46241') && (strlen($phone) == 14)) {
   //Gagnef-Floda in Dalarnas län (0241) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gagnef-Floda',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46241')) === '+46241') && (strlen($phone) == 15)) {
   //Gagnef-Floda in Dalarnas län (0241) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gagnef-Floda',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46243')) === '+46243') && (strlen($phone) == 12)) {
   //Borlänge in Dalarnas län (0243) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Borlänge',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46243')) === '+46243') && (strlen($phone) == 13)) {
   //Borlänge in Dalarnas län (0243) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Borlänge',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46243')) === '+46243') && (strlen($phone) == 14)) {
   //Borlänge in Dalarnas län (0243) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Borlänge',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46243')) === '+46243') && (strlen($phone) == 15)) {
   //Borlänge in Dalarnas län (0243) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Borlänge',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46246')) === '+46246') && (strlen($phone) == 12)) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Svärdsjö-Enviken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46246')) === '+46246') && (strlen($phone) == 13)) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Svärdsjö-Enviken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46246')) === '+46246') && (strlen($phone) == 14)) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Svärdsjö-Enviken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46246')) === '+46246') && (strlen($phone) == 15)) {
   //Svärdsjö-Enviken in Dalarnas län (0246) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Svärdsjö-Enviken',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46247')) === '+46247') && (strlen($phone) == 12)) {
   //Leksand-Insjön in Dalarnas län (0247) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Leksand-Insjön',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46247')) === '+46247') && (strlen($phone) == 13)) {
   //Leksand-Insjön in Dalarnas län (0247) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Leksand-Insjön',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46247')) === '+46247') && (strlen($phone) == 14)) {
   //Leksand-Insjön in Dalarnas län (0247) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Leksand-Insjön',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46247')) === '+46247') && (strlen($phone) == 15)) {
   //Leksand-Insjön in Dalarnas län (0247) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Leksand-Insjön',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46248')) === '+46248') && (strlen($phone) == 12)) {
   //Rättvik in Dalarnas län (0248) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Rättvik',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46248')) === '+46248') && (strlen($phone) == 13)) {
   //Rättvik in Dalarnas län (0248) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Rättvik',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46248')) === '+46248') && (strlen($phone) == 14)) {
   //Rättvik in Dalarnas län (0248) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Rättvik',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46248')) === '+46248') && (strlen($phone) == 15)) {
   //Rättvik in Dalarnas län (0248) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Rättvik',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46250')) === '+46250') && (strlen($phone) == 12)) {
   //Mora-Orsa in Dalarnas län (0250) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mora-Orsa',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46250')) === '+46250') && (strlen($phone) == 13)) {
   //Mora-Orsa in Dalarnas län (0250) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mora-Orsa',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46250')) === '+46250') && (strlen($phone) == 14)) {
   //Mora-Orsa in Dalarnas län (0250) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mora-Orsa',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46250')) === '+46250') && (strlen($phone) == 15)) {
   //Mora-Orsa in Dalarnas län (0250) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mora-Orsa',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46251')) === '+46251') && (strlen($phone) == 12)) {
   //Älvdalen in Dalarnas län (0251) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Älvdalen',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46251')) === '+46251') && (strlen($phone) == 13)) {
   //Älvdalen in Dalarnas län (0251) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Älvdalen',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46251')) === '+46251') && (strlen($phone) == 14)) {
   //Älvdalen in Dalarnas län (0251) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Älvdalen',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46251')) === '+46251') && (strlen($phone) == 15)) {
   //Älvdalen in Dalarnas län (0251) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Älvdalen',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46253')) === '+46253') && (strlen($phone) == 12)) {
   //Idre-Särna in Dalarnas län (0253) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Idre-Särna',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46253')) === '+46253') && (strlen($phone) == 13)) {
   //Idre-Särna in Dalarnas län (0253) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Idre-Särna',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46253')) === '+46253') && (strlen($phone) == 14)) {
   //Idre-Särna in Dalarnas län (0253) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Idre-Särna',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46253')) === '+46253') && (strlen($phone) == 15)) {
   //Idre-Särna in Dalarnas län (0253) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Idre-Särna',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46258')) === '+46258') && (strlen($phone) == 12)) {
   //Furudal in Dalarnas län (0258) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Furudal',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46258')) === '+46258') && (strlen($phone) == 13)) {
   //Furudal in Dalarnas län (0258) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Furudal',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46258')) === '+46258') && (strlen($phone) == 14)) {
   //Furudal in Dalarnas län (0258) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Furudal',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46258')) === '+46258') && (strlen($phone) == 15)) {
   //Furudal in Dalarnas län (0258) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Furudal',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46270')) === '+46270') && (strlen($phone) == 12)) {
   //Söderhamn in Gävleborgs län (0270) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Söderhamn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46270')) === '+46270') && (strlen($phone) == 13)) {
   //Söderhamn in Gävleborgs län (0270) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Söderhamn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46270')) === '+46270') && (strlen($phone) == 14)) {
   //Söderhamn in Gävleborgs län (0270) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Söderhamn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46270')) === '+46270') && (strlen($phone) == 15)) {
   //Söderhamn in Gävleborgs län (0270) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Söderhamn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46271')) === '+46271') && (strlen($phone) == 12)) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alfta-Edsbyn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46271')) === '+46271') && (strlen($phone) == 13)) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Alfta-Edsbyn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46271')) === '+46271') && (strlen($phone) == 14)) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alfta-Edsbyn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46271')) === '+46271') && (strlen($phone) == 15)) {
   //Alfta-Edsbyn in Gävleborgs län (0271) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Alfta-Edsbyn',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46278')) === '+46278') && (strlen($phone) == 12)) {
   //Bollnäs in Gävleborgs län (0278) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bollnäs',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46278')) === '+46278') && (strlen($phone) == 13)) {
   //Bollnäs in Gävleborgs län (0278) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Bollnäs',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46278')) === '+46278') && (strlen($phone) == 14)) {
   //Bollnäs in Gävleborgs län (0278) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bollnäs',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46278')) === '+46278') && (strlen($phone) == 15)) {
   //Bollnäs in Gävleborgs län (0278) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Bollnäs',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46280')) === '+46280') && (strlen($phone) == 12)) {
   //Malung in Dalarnas län (0280) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Malung',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46280')) === '+46280') && (strlen($phone) == 13)) {
   //Malung in Dalarnas län (0280) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Malung',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46280')) === '+46280') && (strlen($phone) == 14)) {
   //Malung in Dalarnas län (0280) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Malung',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46280')) === '+46280') && (strlen($phone) == 15)) {
   //Malung in Dalarnas län (0280) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Malung',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46281')) === '+46281') && (strlen($phone) == 12)) {
   //Vansbro in Dalarnas län (0281) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vansbro',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46281')) === '+46281') && (strlen($phone) == 13)) {
   //Vansbro in Dalarnas län (0281) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vansbro',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46281')) === '+46281') && (strlen($phone) == 14)) {
   //Vansbro in Dalarnas län (0281) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vansbro',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46281')) === '+46281') && (strlen($phone) == 15)) {
   //Vansbro in Dalarnas län (0281) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vansbro',
                  'region' => 'Dalarnas län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46290')) === '+46290') && (strlen($phone) == 12)) {
   //Hofors-Storvik in Gävleborgs län (0290) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hofors-Storvik',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46290')) === '+46290') && (strlen($phone) == 13)) {
   //Hofors-Storvik in Gävleborgs län (0290) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hofors-Storvik',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46290')) === '+46290') && (strlen($phone) == 14)) {
   //Hofors-Storvik in Gävleborgs län (0290) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hofors-Storvik',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46290')) === '+46290') && (strlen($phone) == 15)) {
   //Hofors-Storvik in Gävleborgs län (0290) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hofors-Storvik',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46291')) === '+46291') && (strlen($phone) == 12)) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hedesunda-Österfärnebo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46291')) === '+46291') && (strlen($phone) == 13)) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hedesunda-Österfärnebo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46291')) === '+46291') && (strlen($phone) == 14)) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hedesunda-Österfärnebo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46291')) === '+46291') && (strlen($phone) == 15)) {
   //Hedesunda-Österfärnebo in Gävleborgs län (0291) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hedesunda-Österfärnebo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46292')) === '+46292') && (strlen($phone) == 12)) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tärnsjö-Östervåla',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46292')) === '+46292') && (strlen($phone) == 13)) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tärnsjö-Östervåla',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46292')) === '+46292') && (strlen($phone) == 14)) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tärnsjö-Östervåla',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46292')) === '+46292') && (strlen($phone) == 15)) {
   //Tärnsjö-Östervåla in Uppsala län (0292) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tärnsjö-Östervåla',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46293')) === '+46293') && (strlen($phone) == 12)) {
   //Tierp-Söderfors in Uppsala län (0293) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tierp-Söderfors',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46293')) === '+46293') && (strlen($phone) == 13)) {
   //Tierp-Söderfors in Uppsala län (0293) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tierp-Söderfors',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46293')) === '+46293') && (strlen($phone) == 14)) {
   //Tierp-Söderfors in Uppsala län (0293) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tierp-Söderfors',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46293')) === '+46293') && (strlen($phone) == 15)) {
   //Tierp-Söderfors in Uppsala län (0293) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tierp-Söderfors',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46294')) === '+46294') && (strlen($phone) == 12)) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlsholmsbruk-Skärplinge',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46294')) === '+46294') && (strlen($phone) == 13)) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Karlsholmsbruk-Skärplinge',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46294')) === '+46294') && (strlen($phone) == 14)) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlsholmsbruk-Skärplinge',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46294')) === '+46294') && (strlen($phone) == 15)) {
   //Karlsholmsbruk-Skärplinge in Uppsala län (0294) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Karlsholmsbruk-Skärplinge',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46295')) === '+46295') && (strlen($phone) == 12)) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Örbyhus-Dannemora',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46295')) === '+46295') && (strlen($phone) == 13)) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Örbyhus-Dannemora',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46295')) === '+46295') && (strlen($phone) == 14)) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Örbyhus-Dannemora',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46295')) === '+46295') && (strlen($phone) == 15)) {
   //Örbyhus-Dannemora in Uppsala län (0295) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Örbyhus-Dannemora',
                  'region' => 'Uppsala län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46297')) === '+46297') && (strlen($phone) == 12)) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ockelbo-Hamrånge',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46297')) === '+46297') && (strlen($phone) == 13)) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ockelbo-Hamrånge',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46297')) === '+46297') && (strlen($phone) == 14)) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ockelbo-Hamrånge',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46297')) === '+46297') && (strlen($phone) == 15)) {
   //Ockelbo-Hamrånge in Gävleborgs län (0297) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ockelbo-Hamrånge',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46300')) === '+46300') && (strlen($phone) == 12)) {
   //Kungsbacka in Hallands län (0300) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kungsbacka',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46300')) === '+46300') && (strlen($phone) == 13)) {
   //Kungsbacka in Hallands län (0300) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kungsbacka',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46300')) === '+46300') && (strlen($phone) == 14)) {
   //Kungsbacka in Hallands län (0300) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kungsbacka',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46300')) === '+46300') && (strlen($phone) == 15)) {
   //Kungsbacka in Hallands län (0300) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kungsbacka',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46301')) === '+46301') && (strlen($phone) == 12)) {
   //Hindås in Västra Götalands län (0301) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hindås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46301')) === '+46301') && (strlen($phone) == 13)) {
   //Hindås in Västra Götalands län (0301) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hindås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46301')) === '+46301') && (strlen($phone) == 14)) {
   //Hindås in Västra Götalands län (0301) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hindås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46301')) === '+46301') && (strlen($phone) == 15)) {
   //Hindås in Västra Götalands län (0301) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hindås',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46302')) === '+46302') && (strlen($phone) == 12)) {
   //Lerum in Västra Götalands län (0302) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lerum',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46302')) === '+46302') && (strlen($phone) == 13)) {
   //Lerum in Västra Götalands län (0302) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lerum',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46302')) === '+46302') && (strlen($phone) == 14)) {
   //Lerum in Västra Götalands län (0302) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lerum',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46302')) === '+46302') && (strlen($phone) == 15)) {
   //Lerum in Västra Götalands län (0302) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lerum',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46303')) === '+46303') && (strlen($phone) == 12)) {
   //Kungälv in Västra Götalands län (0303) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kungälv',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46303')) === '+46303') && (strlen($phone) == 13)) {
   //Kungälv in Västra Götalands län (0303) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kungälv',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46303')) === '+46303') && (strlen($phone) == 14)) {
   //Kungälv in Västra Götalands län (0303) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kungälv',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46303')) === '+46303') && (strlen($phone) == 15)) {
   //Kungälv in Västra Götalands län (0303) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kungälv',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46304')) === '+46304') && (strlen($phone) == 12)) {
   //Orust-Tjörn in Västra Götalands län (0304) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Orust-Tjörn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46304')) === '+46304') && (strlen($phone) == 13)) {
   //Orust-Tjörn in Västra Götalands län (0304) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Orust-Tjörn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46304')) === '+46304') && (strlen($phone) == 14)) {
   //Orust-Tjörn in Västra Götalands län (0304) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Orust-Tjörn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46304')) === '+46304') && (strlen($phone) == 15)) {
   //Orust-Tjörn in Västra Götalands län (0304) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Orust-Tjörn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46320')) === '+46320') && (strlen($phone) == 12)) {
   //Kinna in Västra Götalands län (0320) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kinna',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46320')) === '+46320') && (strlen($phone) == 13)) {
   //Kinna in Västra Götalands län (0320) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kinna',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46320')) === '+46320') && (strlen($phone) == 14)) {
   //Kinna in Västra Götalands län (0320) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kinna',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46320')) === '+46320') && (strlen($phone) == 15)) {
   //Kinna in Västra Götalands län (0320) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kinna',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46321')) === '+46321') && (strlen($phone) == 12)) {
   //Ulricehamn in Västra Götalands län (0321) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ulricehamn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46321')) === '+46321') && (strlen($phone) == 13)) {
   //Ulricehamn in Västra Götalands län (0321) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ulricehamn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46321')) === '+46321') && (strlen($phone) == 14)) {
   //Ulricehamn in Västra Götalands län (0321) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ulricehamn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46321')) === '+46321') && (strlen($phone) == 15)) {
   //Ulricehamn in Västra Götalands län (0321) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ulricehamn',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46322')) === '+46322') && (strlen($phone) == 12)) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alingsås-Vårgårda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46322')) === '+46322') && (strlen($phone) == 13)) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Alingsås-Vårgårda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46322')) === '+46322') && (strlen($phone) == 14)) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alingsås-Vårgårda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46322')) === '+46322') && (strlen($phone) == 15)) {
   //Alingsås-Vårgårda in Västra Götalands län (0322) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Alingsås-Vårgårda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46325')) === '+46325') && (strlen($phone) == 12)) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Svenljunga-Tranemo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46325')) === '+46325') && (strlen($phone) == 13)) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Svenljunga-Tranemo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46325')) === '+46325') && (strlen($phone) == 14)) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Svenljunga-Tranemo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46325')) === '+46325') && (strlen($phone) == 15)) {
   //Svenljunga-Tranemo in Västra Götalands län (0325) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Svenljunga-Tranemo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46340')) === '+46340') && (strlen($phone) == 12)) {
   //Varberg in Hallands län (0340) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Varberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46340')) === '+46340') && (strlen($phone) == 13)) {
   //Varberg in Hallands län (0340) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Varberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46340')) === '+46340') && (strlen($phone) == 14)) {
   //Varberg in Hallands län (0340) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Varberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46340')) === '+46340') && (strlen($phone) == 15)) {
   //Varberg in Hallands län (0340) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Varberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46345')) === '+46345') && (strlen($phone) == 12)) {
   //Hyltebruk-Torup in Hallands län (0345) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hyltebruk-Torup',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46345')) === '+46345') && (strlen($phone) == 13)) {
   //Hyltebruk-Torup in Hallands län (0345) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hyltebruk-Torup',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46345')) === '+46345') && (strlen($phone) == 14)) {
   //Hyltebruk-Torup in Hallands län (0345) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hyltebruk-Torup',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46345')) === '+46345') && (strlen($phone) == 15)) {
   //Hyltebruk-Torup in Hallands län (0345) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hyltebruk-Torup',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 12)) {
   //Falkenberg in Hallands län (0346) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Falkenberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 13)) {
   //Falkenberg in Hallands län (0346) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Falkenberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 14)) {
   //Falkenberg in Hallands län (0346) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Falkenberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 15)) {
   //Falkenberg in Hallands län (0346) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Falkenberg',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 12)) {
   //Glommen in Hallands län (0346) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Glommen',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 13)) {
   //Glommen in Hallands län (0346) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Glommen',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 14)) {
   //Glommen in Hallands län (0346) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Glommen',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46346')) === '+46346') && (strlen($phone) == 15)) {
   //Glommen in Hallands län (0346) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Glommen',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46370')) === '+46370') && (strlen($phone) == 12)) {
   //Värnamo in Jönköpings län (0370) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Värnamo',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46370')) === '+46370') && (strlen($phone) == 13)) {
   //Värnamo in Jönköpings län (0370) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Värnamo',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46370')) === '+46370') && (strlen($phone) == 14)) {
   //Värnamo in Jönköpings län (0370) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Värnamo',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46370')) === '+46370') && (strlen($phone) == 15)) {
   //Värnamo in Jönköpings län (0370) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Värnamo',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46371')) === '+46371') && (strlen($phone) == 12)) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gislaved-Anderstorp',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46371')) === '+46371') && (strlen($phone) == 13)) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gislaved-Anderstorp',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46371')) === '+46371') && (strlen($phone) == 14)) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gislaved-Anderstorp',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46371')) === '+46371') && (strlen($phone) == 15)) {
   //Gislaved-Anderstorp in Jönköpings län (0371) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gislaved-Anderstorp',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46372')) === '+46372') && (strlen($phone) == 12)) {
   //Ljungby in Kronobergs län (0372) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ljungby',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46372')) === '+46372') && (strlen($phone) == 13)) {
   //Ljungby in Kronobergs län (0372) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ljungby',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46372')) === '+46372') && (strlen($phone) == 14)) {
   //Ljungby in Kronobergs län (0372) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ljungby',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46372')) === '+46372') && (strlen($phone) == 15)) {
   //Ljungby in Kronobergs län (0372) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ljungby',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46380')) === '+46380') && (strlen($phone) == 12)) {
   //Nässjö in Jönköpings län (0380) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nässjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46380')) === '+46380') && (strlen($phone) == 13)) {
   //Nässjö in Jönköpings län (0380) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Nässjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46380')) === '+46380') && (strlen($phone) == 14)) {
   //Nässjö in Jönköpings län (0380) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nässjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46380')) === '+46380') && (strlen($phone) == 15)) {
   //Nässjö in Jönköpings län (0380) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Nässjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46381')) === '+46381') && (strlen($phone) == 12)) {
   //Eksjö in Jönköpings län (0381) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Eksjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46381')) === '+46381') && (strlen($phone) == 13)) {
   //Eksjö in Jönköpings län (0381) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Eksjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46381')) === '+46381') && (strlen($phone) == 14)) {
   //Eksjö in Jönköpings län (0381) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Eksjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46381')) === '+46381') && (strlen($phone) == 15)) {
   //Eksjö in Jönköpings län (0381) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Eksjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46382')) === '+46382') && (strlen($phone) == 12)) {
   //Sävsjö in Jönköpings län (0382) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sävsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46382')) === '+46382') && (strlen($phone) == 13)) {
   //Sävsjö in Jönköpings län (0382) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sävsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46382')) === '+46382') && (strlen($phone) == 14)) {
   //Sävsjö in Jönköpings län (0382) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sävsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46382')) === '+46382') && (strlen($phone) == 15)) {
   //Sävsjö in Jönköpings län (0382) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sävsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46383')) === '+46383') && (strlen($phone) == 12)) {
   //Vetlanda in Jönköpings län (0383) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vetlanda',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46383')) === '+46383') && (strlen($phone) == 13)) {
   //Vetlanda in Jönköpings län (0383) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vetlanda',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46383')) === '+46383') && (strlen($phone) == 14)) {
   //Vetlanda in Jönköpings län (0383) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vetlanda',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46383')) === '+46383') && (strlen($phone) == 15)) {
   //Vetlanda in Jönköpings län (0383) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vetlanda',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46390')) === '+46390') && (strlen($phone) == 12)) {
   //Gränna in Jönköpings län (0390) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gränna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46390')) === '+46390') && (strlen($phone) == 13)) {
   //Gränna in Jönköpings län (0390) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gränna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46390')) === '+46390') && (strlen($phone) == 14)) {
   //Gränna in Jönköpings län (0390) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gränna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46390')) === '+46390') && (strlen($phone) == 15)) {
   //Gränna in Jönköpings län (0390) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gränna',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46392')) === '+46392') && (strlen($phone) == 12)) {
   //Mullsjö in Jönköpings län (0392) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mullsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46392')) === '+46392') && (strlen($phone) == 13)) {
   //Mullsjö in Jönköpings län (0392) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mullsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46392')) === '+46392') && (strlen($phone) == 14)) {
   //Mullsjö in Jönköpings län (0392) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mullsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46392')) === '+46392') && (strlen($phone) == 15)) {
   //Mullsjö in Jönköpings län (0392) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mullsjö',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46393')) === '+46393') && (strlen($phone) == 12)) {
   //Vaggeryd in Jönköpings län (0393) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vaggeryd',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46393')) === '+46393') && (strlen($phone) == 13)) {
   //Vaggeryd in Jönköpings län (0393) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vaggeryd',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46393')) === '+46393') && (strlen($phone) == 14)) {
   //Vaggeryd in Jönköpings län (0393) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vaggeryd',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46393')) === '+46393') && (strlen($phone) == 15)) {
   //Vaggeryd in Jönköpings län (0393) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vaggeryd',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46410')) === '+46410') && (strlen($phone) == 12)) {
   //Trelleborg in Skåne län (0410) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Trelleborg',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46410')) === '+46410') && (strlen($phone) == 13)) {
   //Trelleborg in Skåne län (0410) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Trelleborg',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46410')) === '+46410') && (strlen($phone) == 14)) {
   //Trelleborg in Skåne län (0410) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Trelleborg',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46410')) === '+46410') && (strlen($phone) == 15)) {
   //Trelleborg in Skåne län (0410) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Trelleborg',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46411')) === '+46411') && (strlen($phone) == 12)) {
   //Ystad in Skåne län (0411) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ystad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46411')) === '+46411') && (strlen($phone) == 13)) {
   //Ystad in Skåne län (0411) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ystad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46411')) === '+46411') && (strlen($phone) == 14)) {
   //Ystad in Skåne län (0411) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ystad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46411')) === '+46411') && (strlen($phone) == 15)) {
   //Ystad in Skåne län (0411) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ystad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46413')) === '+46413') && (strlen($phone) == 12)) {
   //Eslöv-Höör in Skåne län (0413) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Eslöv-Höör',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46413')) === '+46413') && (strlen($phone) == 13)) {
   //Eslöv-Höör in Skåne län (0413) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Eslöv-Höör',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46413')) === '+46413') && (strlen($phone) == 14)) {
   //Eslöv-Höör in Skåne län (0413) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Eslöv-Höör',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46413')) === '+46413') && (strlen($phone) == 15)) {
   //Eslöv-Höör in Skåne län (0413) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Eslöv-Höör',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46414')) === '+46414') && (strlen($phone) == 12)) {
   //Simrishamn in Skåne län (0414) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Simrishamn',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46414')) === '+46414') && (strlen($phone) == 13)) {
   //Simrishamn in Skåne län (0414) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Simrishamn',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46414')) === '+46414') && (strlen($phone) == 14)) {
   //Simrishamn in Skåne län (0414) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Simrishamn',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46414')) === '+46414') && (strlen($phone) == 15)) {
   //Simrishamn in Skåne län (0414) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Simrishamn',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46415')) === '+46415') && (strlen($phone) == 12)) {
   //Hörby in Skåne län (0415) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hörby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46415')) === '+46415') && (strlen($phone) == 13)) {
   //Hörby in Skåne län (0415) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hörby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46415')) === '+46415') && (strlen($phone) == 14)) {
   //Hörby in Skåne län (0415) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hörby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46415')) === '+46415') && (strlen($phone) == 15)) {
   //Hörby in Skåne län (0415) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hörby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46416')) === '+46416') && (strlen($phone) == 12)) {
   //Sjöbo in Skåne län (0416) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sjöbo',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46416')) === '+46416') && (strlen($phone) == 13)) {
   //Sjöbo in Skåne län (0416) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sjöbo',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46416')) === '+46416') && (strlen($phone) == 14)) {
   //Sjöbo in Skåne län (0416) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sjöbo',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46416')) === '+46416') && (strlen($phone) == 15)) {
   //Sjöbo in Skåne län (0416) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sjöbo',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46417')) === '+46417') && (strlen($phone) == 12)) {
   //Tomelilla in Skåne län (0417) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tomelilla',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46417')) === '+46417') && (strlen($phone) == 13)) {
   //Tomelilla in Skåne län (0417) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tomelilla',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46417')) === '+46417') && (strlen($phone) == 14)) {
   //Tomelilla in Skåne län (0417) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tomelilla',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46417')) === '+46417') && (strlen($phone) == 15)) {
   //Tomelilla in Skåne län (0417) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tomelilla',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46418')) === '+46418') && (strlen($phone) == 12)) {
   //Landskrona-Svalöv in Skåne län (0418) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Landskrona-Svalöv',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46418')) === '+46418') && (strlen($phone) == 13)) {
   //Landskrona-Svalöv in Skåne län (0418) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Landskrona-Svalöv',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46418')) === '+46418') && (strlen($phone) == 14)) {
   //Landskrona-Svalöv in Skåne län (0418) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Landskrona-Svalöv',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46418')) === '+46418') && (strlen($phone) == 15)) {
   //Landskrona-Svalöv in Skåne län (0418) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Landskrona-Svalöv',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46430')) === '+46430') && (strlen($phone) == 12)) {
   //Laholm in Hallands län (0430) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Laholm',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46430')) === '+46430') && (strlen($phone) == 13)) {
   //Laholm in Hallands län (0430) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Laholm',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46430')) === '+46430') && (strlen($phone) == 14)) {
   //Laholm in Hallands län (0430) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Laholm',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46430')) === '+46430') && (strlen($phone) == 15)) {
   //Laholm in Hallands län (0430) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Laholm',
                  'region' => 'Hallands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46431')) === '+46431') && (strlen($phone) == 12)) {
   //Ängelholm-Båstad in Skåne län (0431) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ängelholm-Båstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46431')) === '+46431') && (strlen($phone) == 13)) {
   //Ängelholm-Båstad in Skåne län (0431) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ängelholm-Båstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46431')) === '+46431') && (strlen($phone) == 14)) {
   //Ängelholm-Båstad in Skåne län (0431) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ängelholm-Båstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46431')) === '+46431') && (strlen($phone) == 15)) {
   //Ängelholm-Båstad in Skåne län (0431) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ängelholm-Båstad',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46433')) === '+46433') && (strlen($phone) == 12)) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Markaryd-Strömnäsbruk',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46433')) === '+46433') && (strlen($phone) == 13)) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Markaryd-Strömnäsbruk',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46433')) === '+46433') && (strlen($phone) == 14)) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Markaryd-Strömnäsbruk',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46433')) === '+46433') && (strlen($phone) == 15)) {
   //Markaryd-Strömnäsbruk in Kronobergs län (0433) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Markaryd-Strömnäsbruk',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46435')) === '+46435') && (strlen($phone) == 12)) {
   //Klippan-Perstorp in Skåne län (0435) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Klippan-Perstorp',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46435')) === '+46435') && (strlen($phone) == 13)) {
   //Klippan-Perstorp in Skåne län (0435) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Klippan-Perstorp',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46435')) === '+46435') && (strlen($phone) == 14)) {
   //Klippan-Perstorp in Skåne län (0435) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Klippan-Perstorp',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46435')) === '+46435') && (strlen($phone) == 15)) {
   //Klippan-Perstorp in Skåne län (0435) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Klippan-Perstorp',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46451')) === '+46451') && (strlen($phone) == 12)) {
   //Hässleholm in Skåne län (0451) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hässleholm',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46451')) === '+46451') && (strlen($phone) == 13)) {
   //Hässleholm in Skåne län (0451) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hässleholm',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46451')) === '+46451') && (strlen($phone) == 14)) {
   //Hässleholm in Skåne län (0451) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hässleholm',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46451')) === '+46451') && (strlen($phone) == 15)) {
   //Hässleholm in Skåne län (0451) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hässleholm',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46454')) === '+46454') && (strlen($phone) == 12)) {
   //Karlshamn-Olofström in Blekinge län (0454) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlshamn-Olofström',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46454')) === '+46454') && (strlen($phone) == 13)) {
   //Karlshamn-Olofström in Blekinge län (0454) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Karlshamn-Olofström',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46454')) === '+46454') && (strlen($phone) == 14)) {
   //Karlshamn-Olofström in Blekinge län (0454) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlshamn-Olofström',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46454')) === '+46454') && (strlen($phone) == 15)) {
   //Karlshamn-Olofström in Blekinge län (0454) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Karlshamn-Olofström',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46455')) === '+46455') && (strlen($phone) == 12)) {
   //Karlskrona in Blekinge län (0455) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlskrona',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46455')) === '+46455') && (strlen($phone) == 13)) {
   //Karlskrona in Blekinge län (0455) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Karlskrona',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46455')) === '+46455') && (strlen($phone) == 14)) {
   //Karlskrona in Blekinge län (0455) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlskrona',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46455')) === '+46455') && (strlen($phone) == 15)) {
   //Karlskrona in Blekinge län (0455) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Karlskrona',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46456')) === '+46456') && (strlen($phone) == 12)) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sölvesborg-Bromölla',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46456')) === '+46456') && (strlen($phone) == 13)) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sölvesborg-Bromölla',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46456')) === '+46456') && (strlen($phone) == 14)) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sölvesborg-Bromölla',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46456')) === '+46456') && (strlen($phone) == 15)) {
   //Sölvesborg-Bromölla in Blekinge län (0456) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sölvesborg-Bromölla',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46457')) === '+46457') && (strlen($phone) == 12)) {
   //Ronneby in Blekinge län (0457) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ronneby',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46457')) === '+46457') && (strlen($phone) == 13)) {
   //Ronneby in Blekinge län (0457) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ronneby',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46457')) === '+46457') && (strlen($phone) == 14)) {
   //Ronneby in Blekinge län (0457) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ronneby',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46457')) === '+46457') && (strlen($phone) == 15)) {
   //Ronneby in Blekinge län (0457) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ronneby',
                  'region' => 'Blekinge län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46459')) === '+46459') && (strlen($phone) == 12)) {
   //Ryd in Kronobergs län (0459) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46459')) === '+46459') && (strlen($phone) == 13)) {
   //Ryd in Kronobergs län (0459) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46459')) === '+46459') && (strlen($phone) == 14)) {
   //Ryd in Kronobergs län (0459) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46459')) === '+46459') && (strlen($phone) == 15)) {
   //Ryd in Kronobergs län (0459) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46470')) === '+46470') && (strlen($phone) == 12)) {
   //Växjö in Kronobergs län (0470) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Växjö',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46470')) === '+46470') && (strlen($phone) == 13)) {
   //Växjö in Kronobergs län (0470) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Växjö',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46470')) === '+46470') && (strlen($phone) == 14)) {
   //Växjö in Kronobergs län (0470) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Växjö',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46470')) === '+46470') && (strlen($phone) == 15)) {
   //Växjö in Kronobergs län (0470) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Växjö',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46471')) === '+46471') && (strlen($phone) == 12)) {
   //Emmaboda in Kalmar län (0471) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Emmaboda',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46471')) === '+46471') && (strlen($phone) == 13)) {
   //Emmaboda in Kalmar län (0471) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Emmaboda',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46471')) === '+46471') && (strlen($phone) == 14)) {
   //Emmaboda in Kalmar län (0471) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Emmaboda',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46471')) === '+46471') && (strlen($phone) == 15)) {
   //Emmaboda in Kalmar län (0471) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Emmaboda',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46472')) === '+46472') && (strlen($phone) == 12)) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alvesta-Rydaholm',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46472')) === '+46472') && (strlen($phone) == 13)) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Alvesta-Rydaholm',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46472')) === '+46472') && (strlen($phone) == 14)) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Alvesta-Rydaholm',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46472')) === '+46472') && (strlen($phone) == 15)) {
   //Alvesta-Rydaholm in Kronobergs län (0472) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Alvesta-Rydaholm',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46474')) === '+46474') && (strlen($phone) == 12)) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åseda-Lenhovda',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46474')) === '+46474') && (strlen($phone) == 13)) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Åseda-Lenhovda',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46474')) === '+46474') && (strlen($phone) == 14)) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åseda-Lenhovda',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46474')) === '+46474') && (strlen($phone) == 15)) {
   //Åseda-Lenhovda in Kronobergs län (0474) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Åseda-Lenhovda',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46476')) === '+46476') && (strlen($phone) == 12)) {
   //Älmhult in Kronobergs län (0476) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Älmhult',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46476')) === '+46476') && (strlen($phone) == 13)) {
   //Älmhult in Kronobergs län (0476) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Älmhult',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46476')) === '+46476') && (strlen($phone) == 14)) {
   //Älmhult in Kronobergs län (0476) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Älmhult',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46476')) === '+46476') && (strlen($phone) == 15)) {
   //Älmhult in Kronobergs län (0476) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Älmhult',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46477')) === '+46477') && (strlen($phone) == 12)) {
   //Tingsryd in Kronobergs län (0477) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tingsryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46477')) === '+46477') && (strlen($phone) == 13)) {
   //Tingsryd in Kronobergs län (0477) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tingsryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46477')) === '+46477') && (strlen($phone) == 14)) {
   //Tingsryd in Kronobergs län (0477) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tingsryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46477')) === '+46477') && (strlen($phone) == 15)) {
   //Tingsryd in Kronobergs län (0477) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tingsryd',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46478')) === '+46478') && (strlen($phone) == 12)) {
   //Lessebo in Kronobergs län (0478) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lessebo',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46478')) === '+46478') && (strlen($phone) == 13)) {
   //Lessebo in Kronobergs län (0478) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lessebo',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46478')) === '+46478') && (strlen($phone) == 14)) {
   //Lessebo in Kronobergs län (0478) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lessebo',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46478')) === '+46478') && (strlen($phone) == 15)) {
   //Lessebo in Kronobergs län (0478) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lessebo',
                  'region' => 'Kronobergs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46479')) === '+46479') && (strlen($phone) == 12)) {
   //Osby in Skåne län (0479) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Osby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46479')) === '+46479') && (strlen($phone) == 13)) {
   //Osby in Skåne län (0479) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Osby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46479')) === '+46479') && (strlen($phone) == 14)) {
   //Osby in Skåne län (0479) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Osby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46479')) === '+46479') && (strlen($phone) == 15)) {
   //Osby in Skåne län (0479) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Osby',
                  'region' => 'Skåne län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46480')) === '+46480') && (strlen($phone) == 12)) {
   //Kalmar in Kalmar län (0480) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kalmar',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46480')) === '+46480') && (strlen($phone) == 13)) {
   //Kalmar in Kalmar län (0480) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kalmar',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46480')) === '+46480') && (strlen($phone) == 14)) {
   //Kalmar in Kalmar län (0480) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kalmar',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46480')) === '+46480') && (strlen($phone) == 15)) {
   //Kalmar in Kalmar län (0480) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kalmar',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46481')) === '+46481') && (strlen($phone) == 12)) {
   //Nybro in Kalmar län (0481) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nybro',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46481')) === '+46481') && (strlen($phone) == 13)) {
   //Nybro in Kalmar län (0481) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Nybro',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46481')) === '+46481') && (strlen($phone) == 14)) {
   //Nybro in Kalmar län (0481) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nybro',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46481')) === '+46481') && (strlen($phone) == 15)) {
   //Nybro in Kalmar län (0481) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Nybro',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46485')) === '+46485') && (strlen($phone) == 12)) {
   //Öland in Kalmar län (0485) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Öland',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46485')) === '+46485') && (strlen($phone) == 13)) {
   //Öland in Kalmar län (0485) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Öland',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46485')) === '+46485') && (strlen($phone) == 14)) {
   //Öland in Kalmar län (0485) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Öland',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46485')) === '+46485') && (strlen($phone) == 15)) {
   //Öland in Kalmar län (0485) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Öland',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46486')) === '+46486') && (strlen($phone) == 12)) {
   //Torsås in Kalmar län (0486) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Torsås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46486')) === '+46486') && (strlen($phone) == 13)) {
   //Torsås in Kalmar län (0486) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Torsås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46486')) === '+46486') && (strlen($phone) == 14)) {
   //Torsås in Kalmar län (0486) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Torsås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46486')) === '+46486') && (strlen($phone) == 15)) {
   //Torsås in Kalmar län (0486) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Torsås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46490')) === '+46490') && (strlen($phone) == 12)) {
   //Västervik in Kalmar län (0490) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Västervik',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46490')) === '+46490') && (strlen($phone) == 13)) {
   //Västervik in Kalmar län (0490) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Västervik',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46490')) === '+46490') && (strlen($phone) == 14)) {
   //Västervik in Kalmar län (0490) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Västervik',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46490')) === '+46490') && (strlen($phone) == 15)) {
   //Västervik in Kalmar län (0490) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Västervik',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46491')) === '+46491') && (strlen($phone) == 12)) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Oskarshamn-Högsby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46491')) === '+46491') && (strlen($phone) == 13)) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Oskarshamn-Högsby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46491')) === '+46491') && (strlen($phone) == 14)) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Oskarshamn-Högsby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46491')) === '+46491') && (strlen($phone) == 15)) {
   //Oskarshamn-Högsby in Kalmar län (0491) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Oskarshamn-Högsby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46492')) === '+46492') && (strlen($phone) == 12)) {
   //Vimmerby in Kalmar län (0492) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vimmerby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46492')) === '+46492') && (strlen($phone) == 13)) {
   //Vimmerby in Kalmar län (0492) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vimmerby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46492')) === '+46492') && (strlen($phone) == 14)) {
   //Vimmerby in Kalmar län (0492) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vimmerby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46492')) === '+46492') && (strlen($phone) == 15)) {
   //Vimmerby in Kalmar län (0492) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vimmerby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46493')) === '+46493') && (strlen($phone) == 12)) {
   //Gamleby in Kalmar län (0493) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gamleby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46493')) === '+46493') && (strlen($phone) == 13)) {
   //Gamleby in Kalmar län (0493) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gamleby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46493')) === '+46493') && (strlen($phone) == 14)) {
   //Gamleby in Kalmar län (0493) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gamleby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46493')) === '+46493') && (strlen($phone) == 15)) {
   //Gamleby in Kalmar län (0493) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gamleby',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46494')) === '+46494') && (strlen($phone) == 12)) {
   //Kisa in Östergötalands län (0494) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kisa',
                  'region' => 'Östergötalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46494')) === '+46494') && (strlen($phone) == 13)) {
   //Kisa in Östergötalands län (0494) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kisa',
                  'region' => 'Östergötalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46494')) === '+46494') && (strlen($phone) == 14)) {
   //Kisa in Östergötalands län (0494) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kisa',
                  'region' => 'Östergötalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46494')) === '+46494') && (strlen($phone) == 15)) {
   //Kisa in Östergötalands län (0494) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kisa',
                  'region' => 'Östergötalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46495')) === '+46495') && (strlen($phone) == 12)) {
   //Hultsfred-Virserum in Kalmar län (0495) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hultsfred-Virserum',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46495')) === '+46495') && (strlen($phone) == 13)) {
   //Hultsfred-Virserum in Kalmar län (0495) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hultsfred-Virserum',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46495')) === '+46495') && (strlen($phone) == 14)) {
   //Hultsfred-Virserum in Kalmar län (0495) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hultsfred-Virserum',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46495')) === '+46495') && (strlen($phone) == 15)) {
   //Hultsfred-Virserum in Kalmar län (0495) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hultsfred-Virserum',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46496')) === '+46496') && (strlen($phone) == 12)) {
   //Mariannelund in Jönköpings län (0496) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mariannelund',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46496')) === '+46496') && (strlen($phone) == 13)) {
   //Mariannelund in Jönköpings län (0496) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mariannelund',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46496')) === '+46496') && (strlen($phone) == 14)) {
   //Mariannelund in Jönköpings län (0496) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mariannelund',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46496')) === '+46496') && (strlen($phone) == 15)) {
   //Mariannelund in Jönköpings län (0496) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mariannelund',
                  'region' => 'Jönköpings län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46498')) === '+46498') && (strlen($phone) == 12)) {
   //Gotland in Gotlands län (0498) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gotland',
                  'region' => 'Gotlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46498')) === '+46498') && (strlen($phone) == 13)) {
   //Gotland in Gotlands län (0498) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gotland',
                  'region' => 'Gotlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46498')) === '+46498') && (strlen($phone) == 14)) {
   //Gotland in Gotlands län (0498) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gotland',
                  'region' => 'Gotlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46498')) === '+46498') && (strlen($phone) == 15)) {
   //Gotland in Gotlands län (0498) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gotland',
                  'region' => 'Gotlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46499')) === '+46499') && (strlen($phone) == 12)) {
   //Mönsterås in Kalmar län (0499) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mönsterås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46499')) === '+46499') && (strlen($phone) == 13)) {
   //Mönsterås in Kalmar län (0499) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mönsterås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46499')) === '+46499') && (strlen($phone) == 14)) {
   //Mönsterås in Kalmar län (0499) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mönsterås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46499')) === '+46499') && (strlen($phone) == 15)) {
   //Mönsterås in Kalmar län (0499) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mönsterås',
                  'region' => 'Kalmar län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46500')) === '+46500') && (strlen($phone) == 12)) {
   //Skövde in Västra Götalands län (0500) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skövde',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46500')) === '+46500') && (strlen($phone) == 13)) {
   //Skövde in Västra Götalands län (0500) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Skövde',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46500')) === '+46500') && (strlen($phone) == 14)) {
   //Skövde in Västra Götalands län (0500) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skövde',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46500')) === '+46500') && (strlen($phone) == 15)) {
   //Skövde in Västra Götalands län (0500) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Skövde',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46501')) === '+46501') && (strlen($phone) == 12)) {
   //Mariestad in Västra Götalands län (0501) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mariestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46501')) === '+46501') && (strlen($phone) == 13)) {
   //Mariestad in Västra Götalands län (0501) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mariestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46501')) === '+46501') && (strlen($phone) == 14)) {
   //Mariestad in Västra Götalands län (0501) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mariestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46501')) === '+46501') && (strlen($phone) == 15)) {
   //Mariestad in Västra Götalands län (0501) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mariestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46502')) === '+46502') && (strlen($phone) == 12)) {
   //Tidaholm in Västra Götalands län (0502) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tidaholm',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46502')) === '+46502') && (strlen($phone) == 13)) {
   //Tidaholm in Västra Götalands län (0502) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tidaholm',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46502')) === '+46502') && (strlen($phone) == 14)) {
   //Tidaholm in Västra Götalands län (0502) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tidaholm',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46502')) === '+46502') && (strlen($phone) == 15)) {
   //Tidaholm in Västra Götalands län (0502) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tidaholm',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46503')) === '+46503') && (strlen($phone) == 12)) {
   //Hjo in Västra Götalands län (0503) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hjo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46503')) === '+46503') && (strlen($phone) == 13)) {
   //Hjo in Västra Götalands län (0503) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hjo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46503')) === '+46503') && (strlen($phone) == 14)) {
   //Hjo in Västra Götalands län (0503) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hjo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46503')) === '+46503') && (strlen($phone) == 15)) {
   //Hjo in Västra Götalands län (0503) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hjo',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46504')) === '+46504') && (strlen($phone) == 12)) {
   //Tibro in Västra Götalands län (0504) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tibro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46504')) === '+46504') && (strlen($phone) == 13)) {
   //Tibro in Västra Götalands län (0504) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tibro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46504')) === '+46504') && (strlen($phone) == 14)) {
   //Tibro in Västra Götalands län (0504) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tibro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46504')) === '+46504') && (strlen($phone) == 15)) {
   //Tibro in Västra Götalands län (0504) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tibro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46505')) === '+46505') && (strlen($phone) == 12)) {
   //Karlsborg in Västra Götalands län (0505) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlsborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46505')) === '+46505') && (strlen($phone) == 13)) {
   //Karlsborg in Västra Götalands län (0505) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Karlsborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46505')) === '+46505') && (strlen($phone) == 14)) {
   //Karlsborg in Västra Götalands län (0505) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlsborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46505')) === '+46505') && (strlen($phone) == 15)) {
   //Karlsborg in Västra Götalands län (0505) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Karlsborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46506')) === '+46506') && (strlen($phone) == 12)) {
   //Töreboda-Hova in Västra Götalands län (0506) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Töreboda-Hova',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46506')) === '+46506') && (strlen($phone) == 13)) {
   //Töreboda-Hova in Västra Götalands län (0506) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Töreboda-Hova',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46506')) === '+46506') && (strlen($phone) == 14)) {
   //Töreboda-Hova in Västra Götalands län (0506) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Töreboda-Hova',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46506')) === '+46506') && (strlen($phone) == 15)) {
   //Töreboda-Hova in Västra Götalands län (0506) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Töreboda-Hova',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46510')) === '+46510') && (strlen($phone) == 12)) {
   //Lidköping in Västra Götalands län (0510) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lidköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46510')) === '+46510') && (strlen($phone) == 13)) {
   //Lidköping in Västra Götalands län (0510) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lidköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46510')) === '+46510') && (strlen($phone) == 14)) {
   //Lidköping in Västra Götalands län (0510) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lidköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46510')) === '+46510') && (strlen($phone) == 15)) {
   //Lidköping in Västra Götalands län (0510) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lidköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46511')) === '+46511') && (strlen($phone) == 12)) {
   //Skara-Götene in Västra Götalands län (0511) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skara-Götene',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46511')) === '+46511') && (strlen($phone) == 13)) {
   //Skara-Götene in Västra Götalands län (0511) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Skara-Götene',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46511')) === '+46511') && (strlen($phone) == 14)) {
   //Skara-Götene in Västra Götalands län (0511) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skara-Götene',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46511')) === '+46511') && (strlen($phone) == 15)) {
   //Skara-Götene in Västra Götalands län (0511) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Skara-Götene',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46512')) === '+46512') && (strlen($phone) == 12)) {
   //Vara-Nossebro in Västra Götalands län (0512) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vara-Nossebro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46512')) === '+46512') && (strlen($phone) == 13)) {
   //Vara-Nossebro in Västra Götalands län (0512) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vara-Nossebro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46512')) === '+46512') && (strlen($phone) == 14)) {
   //Vara-Nossebro in Västra Götalands län (0512) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vara-Nossebro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46512')) === '+46512') && (strlen($phone) == 15)) {
   //Vara-Nossebro in Västra Götalands län (0512) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vara-Nossebro',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46513')) === '+46513') && (strlen($phone) == 12)) {
   //Herrljunga in Västra Götalands län (0513) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Herrljunga',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46513')) === '+46513') && (strlen($phone) == 13)) {
   //Herrljunga in Västra Götalands län (0513) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Herrljunga',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46513')) === '+46513') && (strlen($phone) == 14)) {
   //Herrljunga in Västra Götalands län (0513) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Herrljunga',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46513')) === '+46513') && (strlen($phone) == 15)) {
   //Herrljunga in Västra Götalands län (0513) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Herrljunga',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46514')) === '+46514') && (strlen($phone) == 12)) {
   //Grästorp in Västra Götalands län (0514) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Grästorp',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46514')) === '+46514') && (strlen($phone) == 13)) {
   //Grästorp in Västra Götalands län (0514) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Grästorp',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46514')) === '+46514') && (strlen($phone) == 14)) {
   //Grästorp in Västra Götalands län (0514) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Grästorp',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46514')) === '+46514') && (strlen($phone) == 15)) {
   //Grästorp in Västra Götalands län (0514) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Grästorp',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46515')) === '+46515') && (strlen($phone) == 12)) {
   //Falköping in Västra Götalands län (0515) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Falköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46515')) === '+46515') && (strlen($phone) == 13)) {
   //Falköping in Västra Götalands län (0515) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Falköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46515')) === '+46515') && (strlen($phone) == 14)) {
   //Falköping in Västra Götalands län (0515) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Falköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46515')) === '+46515') && (strlen($phone) == 15)) {
   //Falköping in Västra Götalands län (0515) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Falköping',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46520')) === '+46520') && (strlen($phone) == 12)) {
   //Trollhättan in Västra Götalands län (0520) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Trollhättan',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46520')) === '+46520') && (strlen($phone) == 13)) {
   //Trollhättan in Västra Götalands län (0520) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Trollhättan',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46520')) === '+46520') && (strlen($phone) == 14)) {
   //Trollhättan in Västra Götalands län (0520) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Trollhättan',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46520')) === '+46520') && (strlen($phone) == 15)) {
   //Trollhättan in Västra Götalands län (0520) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Trollhättan',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46521')) === '+46521') && (strlen($phone) == 12)) {
   //Vänersborg in Västra Götalands län (0521) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vänersborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46521')) === '+46521') && (strlen($phone) == 13)) {
   //Vänersborg in Västra Götalands län (0521) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vänersborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46521')) === '+46521') && (strlen($phone) == 14)) {
   //Vänersborg in Västra Götalands län (0521) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vänersborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46521')) === '+46521') && (strlen($phone) == 15)) {
   //Vänersborg in Västra Götalands län (0521) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vänersborg',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46522')) === '+46522') && (strlen($phone) == 12)) {
   //Uddevalla in Västra Götalands län (0522) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Uddevalla',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46522')) === '+46522') && (strlen($phone) == 13)) {
   //Uddevalla in Västra Götalands län (0522) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Uddevalla',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46522')) === '+46522') && (strlen($phone) == 14)) {
   //Uddevalla in Västra Götalands län (0522) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Uddevalla',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46522')) === '+46522') && (strlen($phone) == 15)) {
   //Uddevalla in Västra Götalands län (0522) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Uddevalla',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46523')) === '+46523') && (strlen($phone) == 12)) {
   //Lysekil in Västra Götalands län (0523) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lysekil',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46523')) === '+46523') && (strlen($phone) == 13)) {
   //Lysekil in Västra Götalands län (0523) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lysekil',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46523')) === '+46523') && (strlen($phone) == 14)) {
   //Lysekil in Västra Götalands län (0523) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lysekil',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46523')) === '+46523') && (strlen($phone) == 15)) {
   //Lysekil in Västra Götalands län (0523) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lysekil',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46524')) === '+46524') && (strlen($phone) == 12)) {
   //Munkedal in Västra Götalands län (0524) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Munkedal',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46524')) === '+46524') && (strlen($phone) == 13)) {
   //Munkedal in Västra Götalands län (0524) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Munkedal',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46524')) === '+46524') && (strlen($phone) == 14)) {
   //Munkedal in Västra Götalands län (0524) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Munkedal',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46524')) === '+46524') && (strlen($phone) == 15)) {
   //Munkedal in Västra Götalands län (0524) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Munkedal',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46525')) === '+46525') && (strlen($phone) == 12)) {
   //Grebbestad in Västra Götalands län (0525) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Grebbestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46525')) === '+46525') && (strlen($phone) == 13)) {
   //Grebbestad in Västra Götalands län (0525) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Grebbestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46525')) === '+46525') && (strlen($phone) == 14)) {
   //Grebbestad in Västra Götalands län (0525) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Grebbestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46525')) === '+46525') && (strlen($phone) == 15)) {
   //Grebbestad in Västra Götalands län (0525) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Grebbestad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46526')) === '+46526') && (strlen($phone) == 12)) {
   //Strömstad in Västra Götalands län (0526) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Strömstad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46526')) === '+46526') && (strlen($phone) == 13)) {
   //Strömstad in Västra Götalands län (0526) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Strömstad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46526')) === '+46526') && (strlen($phone) == 14)) {
   //Strömstad in Västra Götalands län (0526) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Strömstad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46526')) === '+46526') && (strlen($phone) == 15)) {
   //Strömstad in Västra Götalands län (0526) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Strömstad',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46528')) === '+46528') && (strlen($phone) == 12)) {
   //Färgelanda in Västra Götalands län (0528) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Färgelanda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46528')) === '+46528') && (strlen($phone) == 13)) {
   //Färgelanda in Västra Götalands län (0528) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Färgelanda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46528')) === '+46528') && (strlen($phone) == 14)) {
   //Färgelanda in Västra Götalands län (0528) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Färgelanda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46528')) === '+46528') && (strlen($phone) == 15)) {
   //Färgelanda in Västra Götalands län (0528) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Färgelanda',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46530')) === '+46530') && (strlen($phone) == 12)) {
   //Mellerud in Västra Götalands län (0530) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mellerud',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46530')) === '+46530') && (strlen($phone) == 13)) {
   //Mellerud in Västra Götalands län (0530) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Mellerud',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46530')) === '+46530') && (strlen($phone) == 14)) {
   //Mellerud in Västra Götalands län (0530) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Mellerud',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46530')) === '+46530') && (strlen($phone) == 15)) {
   //Mellerud in Västra Götalands län (0530) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Mellerud',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46531')) === '+46531') && (strlen($phone) == 12)) {
   //Bengtsfors in Västra Götalands län (0531) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bengtsfors',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46531')) === '+46531') && (strlen($phone) == 13)) {
   //Bengtsfors in Västra Götalands län (0531) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Bengtsfors',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46531')) === '+46531') && (strlen($phone) == 14)) {
   //Bengtsfors in Västra Götalands län (0531) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bengtsfors',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46531')) === '+46531') && (strlen($phone) == 15)) {
   //Bengtsfors in Västra Götalands län (0531) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Bengtsfors',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46532')) === '+46532') && (strlen($phone) == 12)) {
   //Åmål in Västra Götalands län (0532) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åmål',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46532')) === '+46532') && (strlen($phone) == 13)) {
   //Åmål in Västra Götalands län (0532) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Åmål',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46532')) === '+46532') && (strlen($phone) == 14)) {
   //Åmål in Västra Götalands län (0532) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åmål',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46532')) === '+46532') && (strlen($phone) == 15)) {
   //Åmål in Västra Götalands län (0532) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Åmål',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46533')) === '+46533') && (strlen($phone) == 12)) {
   //Säffle in Värmlands län (0533) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Säffle',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46533')) === '+46533') && (strlen($phone) == 13)) {
   //Säffle in Värmlands län (0533) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Säffle',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46533')) === '+46533') && (strlen($phone) == 14)) {
   //Säffle in Värmlands län (0533) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Säffle',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46533')) === '+46533') && (strlen($phone) == 15)) {
   //Säffle in Värmlands län (0533) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Säffle',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46534')) === '+46534') && (strlen($phone) == 12)) {
   //Ed in Östergötlands län (0534) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ed',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46534')) === '+46534') && (strlen($phone) == 13)) {
   //Ed in Östergötlands län (0534) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ed',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46534')) === '+46534') && (strlen($phone) == 14)) {
   //Ed in Östergötlands län (0534) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ed',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46534')) === '+46534') && (strlen($phone) == 15)) {
   //Ed in Östergötlands län (0534) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ed',
                  'region' => 'Östergötlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46550')) === '+46550') && (strlen($phone) == 12)) {
   //Kristinehamn in Värmlands län (0550) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kristinehamn',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46550')) === '+46550') && (strlen($phone) == 13)) {
   //Kristinehamn in Värmlands län (0550) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kristinehamn',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46550')) === '+46550') && (strlen($phone) == 14)) {
   //Kristinehamn in Värmlands län (0550) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kristinehamn',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46550')) === '+46550') && (strlen($phone) == 15)) {
   //Kristinehamn in Värmlands län (0550) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kristinehamn',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46551')) === '+46551') && (strlen($phone) == 12)) {
   //Gullspång in Västra Götalands län (0551) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gullspång',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46551')) === '+46551') && (strlen($phone) == 13)) {
   //Gullspång in Västra Götalands län (0551) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gullspång',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46551')) === '+46551') && (strlen($phone) == 14)) {
   //Gullspång in Västra Götalands län (0551) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gullspång',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46551')) === '+46551') && (strlen($phone) == 15)) {
   //Gullspång in Västra Götalands län (0551) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gullspång',
                  'region' => 'Västra Götalands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46552')) === '+46552') && (strlen($phone) == 12)) {
   //Deje in Värmlands län (0552) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Deje',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46552')) === '+46552') && (strlen($phone) == 13)) {
   //Deje in Värmlands län (0552) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Deje',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46552')) === '+46552') && (strlen($phone) == 14)) {
   //Deje in Värmlands län (0552) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Deje',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46552')) === '+46552') && (strlen($phone) == 15)) {
   //Deje in Värmlands län (0552) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Deje',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46553')) === '+46553') && (strlen($phone) == 12)) {
   //Molkolm in Värmlands län (0553) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Molkolm',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46553')) === '+46553') && (strlen($phone) == 13)) {
   //Molkolm in Värmlands län (0553) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Molkolm',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46553')) === '+46553') && (strlen($phone) == 14)) {
   //Molkolm in Värmlands län (0553) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Molkolm',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46553')) === '+46553') && (strlen($phone) == 15)) {
   //Molkolm in Värmlands län (0553) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Molkolm',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46554')) === '+46554') && (strlen($phone) == 12)) {
   //Kil in Värmlands län (0554) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kil',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46554')) === '+46554') && (strlen($phone) == 13)) {
   //Kil in Värmlands län (0554) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kil',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46554')) === '+46554') && (strlen($phone) == 14)) {
   //Kil in Värmlands län (0554) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kil',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46554')) === '+46554') && (strlen($phone) == 15)) {
   //Kil in Värmlands län (0554) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kil',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46555')) === '+46555') && (strlen($phone) == 12)) {
   //Grums in Värmlands län (0555) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Grums',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46555')) === '+46555') && (strlen($phone) == 13)) {
   //Grums in Värmlands län (0555) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Grums',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46555')) === '+46555') && (strlen($phone) == 14)) {
   //Grums in Värmlands län (0555) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Grums',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46555')) === '+46555') && (strlen($phone) == 15)) {
   //Grums in Värmlands län (0555) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Grums',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46560')) === '+46560') && (strlen($phone) == 12)) {
   //Torsby in Värmlands län (0560) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Torsby',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46560')) === '+46560') && (strlen($phone) == 13)) {
   //Torsby in Värmlands län (0560) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Torsby',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46560')) === '+46560') && (strlen($phone) == 14)) {
   //Torsby in Värmlands län (0560) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Torsby',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46560')) === '+46560') && (strlen($phone) == 15)) {
   //Torsby in Värmlands län (0560) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Torsby',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46563')) === '+46563') && (strlen($phone) == 12)) {
   //Hagfors-Munkfors in Värmlands län (0563) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hagfors-Munkfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46563')) === '+46563') && (strlen($phone) == 13)) {
   //Hagfors-Munkfors in Värmlands län (0563) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hagfors-Munkfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46563')) === '+46563') && (strlen($phone) == 14)) {
   //Hagfors-Munkfors in Värmlands län (0563) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hagfors-Munkfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46563')) === '+46563') && (strlen($phone) == 15)) {
   //Hagfors-Munkfors in Värmlands län (0563) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hagfors-Munkfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46564')) === '+46564') && (strlen($phone) == 12)) {
   //Sysslebäck in Värmlands län (0564) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sysslebäck',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46564')) === '+46564') && (strlen($phone) == 13)) {
   //Sysslebäck in Värmlands län (0564) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sysslebäck',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46564')) === '+46564') && (strlen($phone) == 14)) {
   //Sysslebäck in Värmlands län (0564) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sysslebäck',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46564')) === '+46564') && (strlen($phone) == 15)) {
   //Sysslebäck in Värmlands län (0564) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sysslebäck',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46565')) === '+46565') && (strlen($phone) == 12)) {
   //Sunne in Värmlands län (0565) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sunne',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46565')) === '+46565') && (strlen($phone) == 13)) {
   //Sunne in Värmlands län (0565) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sunne',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46565')) === '+46565') && (strlen($phone) == 14)) {
   //Sunne in Värmlands län (0565) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sunne',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46565')) === '+46565') && (strlen($phone) == 15)) {
   //Sunne in Värmlands län (0565) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sunne',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46570')) === '+46570') && (strlen($phone) == 12)) {
   //Arvika in Värmlands län (0570) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arvika',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46570')) === '+46570') && (strlen($phone) == 13)) {
   //Arvika in Värmlands län (0570) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Arvika',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46570')) === '+46570') && (strlen($phone) == 14)) {
   //Arvika in Värmlands län (0570) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arvika',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46570')) === '+46570') && (strlen($phone) == 15)) {
   //Arvika in Värmlands län (0570) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Arvika',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46571')) === '+46571') && (strlen($phone) == 12)) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Charlottenberg-Åmotfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46571')) === '+46571') && (strlen($phone) == 13)) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Charlottenberg-Åmotfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46571')) === '+46571') && (strlen($phone) == 14)) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Charlottenberg-Åmotfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46571')) === '+46571') && (strlen($phone) == 15)) {
   //Charlottenberg-Åmotfors in Värmlands län (0571) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Charlottenberg-Åmotfors',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46573')) === '+46573') && (strlen($phone) == 12)) {
   //Årjäng in Värmlands län (0573) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Årjäng',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46573')) === '+46573') && (strlen($phone) == 13)) {
   //Årjäng in Värmlands län (0573) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Årjäng',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46573')) === '+46573') && (strlen($phone) == 14)) {
   //Årjäng in Värmlands län (0573) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Årjäng',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46573')) === '+46573') && (strlen($phone) == 15)) {
   //Årjäng in Värmlands län (0573) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Årjäng',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46580')) === '+46580') && (strlen($phone) == 12)) {
   //Kopparberg in Örebro län (0580) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kopparberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46580')) === '+46580') && (strlen($phone) == 13)) {
   //Kopparberg in Örebro län (0580) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kopparberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46580')) === '+46580') && (strlen($phone) == 14)) {
   //Kopparberg in Örebro län (0580) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kopparberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46580')) === '+46580') && (strlen($phone) == 15)) {
   //Kopparberg in Örebro län (0580) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kopparberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46581')) === '+46581') && (strlen($phone) == 12)) {
   //Lindesberg in Örebro län (0581) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lindesberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46581')) === '+46581') && (strlen($phone) == 13)) {
   //Lindesberg in Örebro län (0581) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lindesberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46581')) === '+46581') && (strlen($phone) == 14)) {
   //Lindesberg in Örebro län (0581) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lindesberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46581')) === '+46581') && (strlen($phone) == 15)) {
   //Lindesberg in Örebro län (0581) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lindesberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46582')) === '+46582') && (strlen($phone) == 12)) {
   //Hallsberg in Örebro län (0582) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallsberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46582')) === '+46582') && (strlen($phone) == 13)) {
   //Hallsberg in Örebro län (0582) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hallsberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46582')) === '+46582') && (strlen($phone) == 14)) {
   //Hallsberg in Örebro län (0582) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallsberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46582')) === '+46582') && (strlen($phone) == 15)) {
   //Hallsberg in Örebro län (0582) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hallsberg',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46583')) === '+46583') && (strlen($phone) == 12)) {
   //Askersund in Örebro län (0583) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Askersund',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46583')) === '+46583') && (strlen($phone) == 13)) {
   //Askersund in Örebro län (0583) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Askersund',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46583')) === '+46583') && (strlen($phone) == 14)) {
   //Askersund in Örebro län (0583) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Askersund',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46583')) === '+46583') && (strlen($phone) == 15)) {
   //Askersund in Örebro län (0583) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Askersund',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46584')) === '+46584') && (strlen($phone) == 12)) {
   //Laxå in Örebro län (0584) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Laxå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46584')) === '+46584') && (strlen($phone) == 13)) {
   //Laxå in Örebro län (0584) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Laxå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46584')) === '+46584') && (strlen($phone) == 14)) {
   //Laxå in Örebro län (0584) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Laxå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46584')) === '+46584') && (strlen($phone) == 15)) {
   //Laxå in Örebro län (0584) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Laxå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46585')) === '+46585') && (strlen($phone) == 12)) {
   //Fjugesta-Svartå in Örebro län (0585) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Fjugesta-Svartå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46585')) === '+46585') && (strlen($phone) == 13)) {
   //Fjugesta-Svartå in Örebro län (0585) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Fjugesta-Svartå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46585')) === '+46585') && (strlen($phone) == 14)) {
   //Fjugesta-Svartå in Örebro län (0585) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Fjugesta-Svartå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46585')) === '+46585') && (strlen($phone) == 15)) {
   //Fjugesta-Svartå in Örebro län (0585) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Fjugesta-Svartå',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46586')) === '+46586') && (strlen($phone) == 12)) {
   //Karlskoga in Örebro län (0586) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlskoga',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46586')) === '+46586') && (strlen($phone) == 13)) {
   //Karlskoga in Örebro län (0586) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Karlskoga',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46586')) === '+46586') && (strlen($phone) == 14)) {
   //Karlskoga in Örebro län (0586) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Karlskoga',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46586')) === '+46586') && (strlen($phone) == 15)) {
   //Karlskoga in Örebro län (0586) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Karlskoga',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46587')) === '+46587') && (strlen($phone) == 12)) {
   //Nora in Örebro län (0587) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nora',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46587')) === '+46587') && (strlen($phone) == 13)) {
   //Nora in Örebro län (0587) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Nora',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46587')) === '+46587') && (strlen($phone) == 14)) {
   //Nora in Örebro län (0587) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nora',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46587')) === '+46587') && (strlen($phone) == 15)) {
   //Nora in Örebro län (0587) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Nora',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46589')) === '+46589') && (strlen($phone) == 12)) {
   //Arboga in Västmanlands län (0589) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arboga',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46589')) === '+46589') && (strlen($phone) == 13)) {
   //Arboga in Västmanlands län (0589) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Arboga',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46589')) === '+46589') && (strlen($phone) == 14)) {
   //Arboga in Västmanlands län (0589) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arboga',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46589')) === '+46589') && (strlen($phone) == 15)) {
   //Arboga in Västmanlands län (0589) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Arboga',
                  'region' => 'Västmanlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46590')) === '+46590') && (strlen($phone) == 12)) {
   //Filipstad in Värmlands län (0590) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Filipstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46590')) === '+46590') && (strlen($phone) == 13)) {
   //Filipstad in Värmlands län (0590) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Filipstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46590')) === '+46590') && (strlen($phone) == 14)) {
   //Filipstad in Värmlands län (0590) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Filipstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46590')) === '+46590') && (strlen($phone) == 15)) {
   //Filipstad in Värmlands län (0590) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Filipstad',
                  'region' => 'Värmlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46591')) === '+46591') && (strlen($phone) == 12)) {
   //Hällefors-Grythyttan in Örebro län (0591) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hällefors-Grythyttan',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46591')) === '+46591') && (strlen($phone) == 13)) {
   //Hällefors-Grythyttan in Örebro län (0591) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hällefors-Grythyttan',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46591')) === '+46591') && (strlen($phone) == 14)) {
   //Hällefors-Grythyttan in Örebro län (0591) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hällefors-Grythyttan',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46591')) === '+46591') && (strlen($phone) == 15)) {
   //Hällefors-Grythyttan in Örebro län (0591) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hällefors-Grythyttan',
                  'region' => 'Örebro län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46611')) === '+46611') && (strlen($phone) == 12)) {
   //Härnösand in Västernorrlands län (0611) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Härnösand',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46611')) === '+46611') && (strlen($phone) == 13)) {
   //Härnösand in Västernorrlands län (0611) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Härnösand',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46611')) === '+46611') && (strlen($phone) == 14)) {
   //Härnösand in Västernorrlands län (0611) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Härnösand',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46611')) === '+46611') && (strlen($phone) == 15)) {
   //Härnösand in Västernorrlands län (0611) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Härnösand',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46612')) === '+46612') && (strlen($phone) == 12)) {
   //Kramfors in Västernorrlands län (0612) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kramfors',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46612')) === '+46612') && (strlen($phone) == 13)) {
   //Kramfors in Västernorrlands län (0612) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kramfors',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46612')) === '+46612') && (strlen($phone) == 14)) {
   //Kramfors in Västernorrlands län (0612) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kramfors',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46612')) === '+46612') && (strlen($phone) == 15)) {
   //Kramfors in Västernorrlands län (0612) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kramfors',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46613')) === '+46613') && (strlen($phone) == 12)) {
   //Ullånger in Västernorrlands län (0613) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ullånger',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46613')) === '+46613') && (strlen($phone) == 13)) {
   //Ullånger in Västernorrlands län (0613) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ullånger',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46613')) === '+46613') && (strlen($phone) == 14)) {
   //Ullånger in Västernorrlands län (0613) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ullånger',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46613')) === '+46613') && (strlen($phone) == 15)) {
   //Ullånger in Västernorrlands län (0613) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ullånger',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46620')) === '+46620') && (strlen($phone) == 12)) {
   //Sollefteå in Västernorrlands län (0620) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sollefteå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46620')) === '+46620') && (strlen($phone) == 13)) {
   //Sollefteå in Västernorrlands län (0620) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sollefteå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46620')) === '+46620') && (strlen($phone) == 14)) {
   //Sollefteå in Västernorrlands län (0620) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sollefteå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46620')) === '+46620') && (strlen($phone) == 15)) {
   //Sollefteå in Västernorrlands län (0620) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sollefteå',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46621')) === '+46621') && (strlen($phone) == 12)) {
   //Junsele in Västernorrlands län (0621) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Junsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46621')) === '+46621') && (strlen($phone) == 13)) {
   //Junsele in Västernorrlands län (0621) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Junsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46621')) === '+46621') && (strlen($phone) == 14)) {
   //Junsele in Västernorrlands län (0621) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Junsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46621')) === '+46621') && (strlen($phone) == 15)) {
   //Junsele in Västernorrlands län (0621) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Junsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46622')) === '+46622') && (strlen($phone) == 12)) {
   //Näsåker in Västernorrlands län (0622) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Näsåker',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46622')) === '+46622') && (strlen($phone) == 13)) {
   //Näsåker in Västernorrlands län (0622) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Näsåker',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46622')) === '+46622') && (strlen($phone) == 14)) {
   //Näsåker in Västernorrlands län (0622) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Näsåker',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46622')) === '+46622') && (strlen($phone) == 15)) {
   //Näsåker in Västernorrlands län (0622) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Näsåker',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46623')) === '+46623') && (strlen($phone) == 12)) {
   //Ramsele in Västernorrlands län (0623) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ramsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46623')) === '+46623') && (strlen($phone) == 13)) {
   //Ramsele in Västernorrlands län (0623) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ramsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46623')) === '+46623') && (strlen($phone) == 14)) {
   //Ramsele in Västernorrlands län (0623) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ramsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46623')) === '+46623') && (strlen($phone) == 15)) {
   //Ramsele in Västernorrlands län (0623) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ramsele',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46624')) === '+46624') && (strlen($phone) == 12)) {
   //Backe in Jämtlands län (0624) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Backe',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46624')) === '+46624') && (strlen($phone) == 13)) {
   //Backe in Jämtlands län (0624) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Backe',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46624')) === '+46624') && (strlen($phone) == 14)) {
   //Backe in Jämtlands län (0624) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Backe',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46624')) === '+46624') && (strlen($phone) == 15)) {
   //Backe in Jämtlands län (0624) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Backe',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46640')) === '+46640') && (strlen($phone) == 12)) {
   //Krokom in Jämtlands län (0640) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Krokom',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46640')) === '+46640') && (strlen($phone) == 13)) {
   //Krokom in Jämtlands län (0640) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Krokom',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46640')) === '+46640') && (strlen($phone) == 14)) {
   //Krokom in Jämtlands län (0640) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Krokom',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46640')) === '+46640') && (strlen($phone) == 15)) {
   //Krokom in Jämtlands län (0640) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Krokom',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46642')) === '+46642') && (strlen($phone) == 12)) {
   //Lit in Jämtlands län (0642) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lit',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46642')) === '+46642') && (strlen($phone) == 13)) {
   //Lit in Jämtlands län (0642) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lit',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46642')) === '+46642') && (strlen($phone) == 14)) {
   //Lit in Jämtlands län (0642) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lit',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46642')) === '+46642') && (strlen($phone) == 15)) {
   //Lit in Jämtlands län (0642) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lit',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46643')) === '+46643') && (strlen($phone) == 12)) {
   //Hallen-Oviken in Jämtlands län (0643) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallen-Oviken',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46643')) === '+46643') && (strlen($phone) == 13)) {
   //Hallen-Oviken in Jämtlands län (0643) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hallen-Oviken',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46643')) === '+46643') && (strlen($phone) == 14)) {
   //Hallen-Oviken in Jämtlands län (0643) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hallen-Oviken',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46643')) === '+46643') && (strlen($phone) == 15)) {
   //Hallen-Oviken in Jämtlands län (0643) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hallen-Oviken',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46644')) === '+46644') && (strlen($phone) == 12)) {
   //Hammerdal in Jämtlands län (0644) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hammerdal',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46644')) === '+46644') && (strlen($phone) == 13)) {
   //Hammerdal in Jämtlands län (0644) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hammerdal',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46644')) === '+46644') && (strlen($phone) == 14)) {
   //Hammerdal in Jämtlands län (0644) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hammerdal',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46644')) === '+46644') && (strlen($phone) == 15)) {
   //Hammerdal in Jämtlands län (0644) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hammerdal',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46645')) === '+46645') && (strlen($phone) == 12)) {
   //Föllinge in Jämtlands län (0645) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Föllinge',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46645')) === '+46645') && (strlen($phone) == 13)) {
   //Föllinge in Jämtlands län (0645) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Föllinge',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46645')) === '+46645') && (strlen($phone) == 14)) {
   //Föllinge in Jämtlands län (0645) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Föllinge',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46645')) === '+46645') && (strlen($phone) == 15)) {
   //Föllinge in Jämtlands län (0645) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Föllinge',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46647')) === '+46647') && (strlen($phone) == 12)) {
   //Åre-Järpen in Jämtlands län (0647) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åre-Järpen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46647')) === '+46647') && (strlen($phone) == 13)) {
   //Åre-Järpen in Jämtlands län (0647) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Åre-Järpen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46647')) === '+46647') && (strlen($phone) == 14)) {
   //Åre-Järpen in Jämtlands län (0647) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åre-Järpen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46647')) === '+46647') && (strlen($phone) == 15)) {
   //Åre-Järpen in Jämtlands län (0647) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Åre-Järpen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46650')) === '+46650') && (strlen($phone) == 12)) {
   //Hudiksvall in Gävleborgs län (0650) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hudiksvall',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46650')) === '+46650') && (strlen($phone) == 13)) {
   //Hudiksvall in Gävleborgs län (0650) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hudiksvall',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46650')) === '+46650') && (strlen($phone) == 14)) {
   //Hudiksvall in Gävleborgs län (0650) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hudiksvall',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46650')) === '+46650') && (strlen($phone) == 15)) {
   //Hudiksvall in Gävleborgs län (0650) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hudiksvall',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46651')) === '+46651') && (strlen($phone) == 12)) {
   //Ljusdal in Gävleborgs län (0651) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ljusdal',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46651')) === '+46651') && (strlen($phone) == 13)) {
   //Ljusdal in Gävleborgs län (0651) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ljusdal',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46651')) === '+46651') && (strlen($phone) == 14)) {
   //Ljusdal in Gävleborgs län (0651) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ljusdal',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46651')) === '+46651') && (strlen($phone) == 15)) {
   //Ljusdal in Gävleborgs län (0651) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ljusdal',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46652')) === '+46652') && (strlen($phone) == 12)) {
   //Bergsjö in Gävleborgs län (0652) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bergsjö',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46652')) === '+46652') && (strlen($phone) == 13)) {
   //Bergsjö in Gävleborgs län (0652) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Bergsjö',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46652')) === '+46652') && (strlen($phone) == 14)) {
   //Bergsjö in Gävleborgs län (0652) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bergsjö',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46652')) === '+46652') && (strlen($phone) == 15)) {
   //Bergsjö in Gävleborgs län (0652) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Bergsjö',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46653')) === '+46653') && (strlen($phone) == 12)) {
   //Delsbo in Gävleborgs län (0653) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Delsbo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46653')) === '+46653') && (strlen($phone) == 13)) {
   //Delsbo in Gävleborgs län (0653) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Delsbo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46653')) === '+46653') && (strlen($phone) == 14)) {
   //Delsbo in Gävleborgs län (0653) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Delsbo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46653')) === '+46653') && (strlen($phone) == 15)) {
   //Delsbo in Gävleborgs län (0653) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Delsbo',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46657')) === '+46657') && (strlen($phone) == 12)) {
   //Los in Gävleborgs län (0657) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Los',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46657')) === '+46657') && (strlen($phone) == 13)) {
   //Los in Gävleborgs län (0657) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Los',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46657')) === '+46657') && (strlen($phone) == 14)) {
   //Los in Gävleborgs län (0657) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Los',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46657')) === '+46657') && (strlen($phone) == 15)) {
   //Los in Gävleborgs län (0657) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Los',
                  'region' => 'Gävleborgs län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46660')) === '+46660') && (strlen($phone) == 12)) {
   //Örnsköldsvik in Västernorrlands län (0660) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Örnsköldsvik',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46660')) === '+46660') && (strlen($phone) == 13)) {
   //Örnsköldsvik in Västernorrlands län (0660) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Örnsköldsvik',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46660')) === '+46660') && (strlen($phone) == 14)) {
   //Örnsköldsvik in Västernorrlands län (0660) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Örnsköldsvik',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46660')) === '+46660') && (strlen($phone) == 15)) {
   //Örnsköldsvik in Västernorrlands län (0660) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Örnsköldsvik',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46661')) === '+46661') && (strlen($phone) == 12)) {
   //Bredbyn in Västernorrlands län (0661) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bredbyn',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46661')) === '+46661') && (strlen($phone) == 13)) {
   //Bredbyn in Västernorrlands län (0661) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Bredbyn',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46661')) === '+46661') && (strlen($phone) == 14)) {
   //Bredbyn in Västernorrlands län (0661) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bredbyn',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46661')) === '+46661') && (strlen($phone) == 15)) {
   //Bredbyn in Västernorrlands län (0661) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Bredbyn',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46662')) === '+46662') && (strlen($phone) == 12)) {
   //Björna in Västernorrlands län (0662) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Björna',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46662')) === '+46662') && (strlen($phone) == 13)) {
   //Björna in Västernorrlands län (0662) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Björna',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46662')) === '+46662') && (strlen($phone) == 14)) {
   //Björna in Västernorrlands län (0662) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Björna',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46662')) === '+46662') && (strlen($phone) == 15)) {
   //Björna in Västernorrlands län (0662) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Björna',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46663')) === '+46663') && (strlen($phone) == 12)) {
   //Husum in Västernorrlands län (0663) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Husum',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46663')) === '+46663') && (strlen($phone) == 13)) {
   //Husum in Västernorrlands län (0663) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Husum',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46663')) === '+46663') && (strlen($phone) == 14)) {
   //Husum in Västernorrlands län (0663) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Husum',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46663')) === '+46663') && (strlen($phone) == 15)) {
   //Husum in Västernorrlands län (0663) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Husum',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46670')) === '+46670') && (strlen($phone) == 12)) {
   //Strömsund in Jämtlands län (0670) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Strömsund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46670')) === '+46670') && (strlen($phone) == 13)) {
   //Strömsund in Jämtlands län (0670) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Strömsund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46670')) === '+46670') && (strlen($phone) == 14)) {
   //Strömsund in Jämtlands län (0670) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Strömsund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46670')) === '+46670') && (strlen($phone) == 15)) {
   //Strömsund in Jämtlands län (0670) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Strömsund',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46671')) === '+46671') && (strlen($phone) == 12)) {
   //Hoting in Jämtlands län (0671) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hoting',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46671')) === '+46671') && (strlen($phone) == 13)) {
   //Hoting in Jämtlands län (0671) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hoting',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46671')) === '+46671') && (strlen($phone) == 14)) {
   //Hoting in Jämtlands län (0671) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hoting',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46671')) === '+46671') && (strlen($phone) == 15)) {
   //Hoting in Jämtlands län (0671) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hoting',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46672')) === '+46672') && (strlen($phone) == 12)) {
   //Gäddede in Jämtlands län (0672) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gäddede',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46672')) === '+46672') && (strlen($phone) == 13)) {
   //Gäddede in Jämtlands län (0672) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gäddede',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46672')) === '+46672') && (strlen($phone) == 14)) {
   //Gäddede in Jämtlands län (0672) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gäddede',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46672')) === '+46672') && (strlen($phone) == 15)) {
   //Gäddede in Jämtlands län (0672) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gäddede',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46680')) === '+46680') && (strlen($phone) == 12)) {
   //Sveg in Jämtlands län (0680) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sveg',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46680')) === '+46680') && (strlen($phone) == 13)) {
   //Sveg in Jämtlands län (0680) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sveg',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46680')) === '+46680') && (strlen($phone) == 14)) {
   //Sveg in Jämtlands län (0680) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sveg',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46680')) === '+46680') && (strlen($phone) == 15)) {
   //Sveg in Jämtlands län (0680) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sveg',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46682')) === '+46682') && (strlen($phone) == 12)) {
   //Rätan in Jämtlands län (0682) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Rätan',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46682')) === '+46682') && (strlen($phone) == 13)) {
   //Rätan in Jämtlands län (0682) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Rätan',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46682')) === '+46682') && (strlen($phone) == 14)) {
   //Rätan in Jämtlands län (0682) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Rätan',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46682')) === '+46682') && (strlen($phone) == 15)) {
   //Rätan in Jämtlands län (0682) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Rätan',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46684')) === '+46684') && (strlen($phone) == 12)) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hede-Funäsdalen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46684')) === '+46684') && (strlen($phone) == 13)) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hede-Funäsdalen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46684')) === '+46684') && (strlen($phone) == 14)) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hede-Funäsdalen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46684')) === '+46684') && (strlen($phone) == 15)) {
   //Hede-Funäsdalen in Jämtlands län (0684) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hede-Funäsdalen',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46687')) === '+46687') && (strlen($phone) == 12)) {
   //Svenstavik in Jämtlands län (0687) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Svenstavik',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46687')) === '+46687') && (strlen($phone) == 13)) {
   //Svenstavik in Jämtlands län (0687) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Svenstavik',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46687')) === '+46687') && (strlen($phone) == 14)) {
   //Svenstavik in Jämtlands län (0687) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Svenstavik',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46687')) === '+46687') && (strlen($phone) == 15)) {
   //Svenstavik in Jämtlands län (0687) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Svenstavik',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46690')) === '+46690') && (strlen($phone) == 12)) {
   //Ånge in Västernorrlands län (0690) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ånge',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46690')) === '+46690') && (strlen($phone) == 13)) {
   //Ånge in Västernorrlands län (0690) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Ånge',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46690')) === '+46690') && (strlen($phone) == 14)) {
   //Ånge in Västernorrlands län (0690) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Ånge',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46690')) === '+46690') && (strlen($phone) == 15)) {
   //Ånge in Västernorrlands län (0690) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Ånge',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46691')) === '+46691') && (strlen($phone) == 12)) {
   //Torpshammar in Västernorrlands län (0691) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Torpshammar',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46691')) === '+46691') && (strlen($phone) == 13)) {
   //Torpshammar in Västernorrlands län (0691) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Torpshammar',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46691')) === '+46691') && (strlen($phone) == 14)) {
   //Torpshammar in Västernorrlands län (0691) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Torpshammar',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46691')) === '+46691') && (strlen($phone) == 15)) {
   //Torpshammar in Västernorrlands län (0691) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Torpshammar',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46692')) === '+46692') && (strlen($phone) == 12)) {
   //Liden in Västernorrlands län (0692) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Liden',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46692')) === '+46692') && (strlen($phone) == 13)) {
   //Liden in Västernorrlands län (0692) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Liden',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46692')) === '+46692') && (strlen($phone) == 14)) {
   //Liden in Västernorrlands län (0692) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Liden',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46692')) === '+46692') && (strlen($phone) == 15)) {
   //Liden in Västernorrlands län (0692) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Liden',
                  'region' => 'Västernorrlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46693')) === '+46693') && (strlen($phone) == 12)) {
   //Bräcke-Gällö in Jämtlands län (0693) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bräcke-Gällö',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46693')) === '+46693') && (strlen($phone) == 13)) {
   //Bräcke-Gällö in Jämtlands län (0693) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Bräcke-Gällö',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46693')) === '+46693') && (strlen($phone) == 14)) {
   //Bräcke-Gällö in Jämtlands län (0693) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bräcke-Gällö',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46693')) === '+46693') && (strlen($phone) == 15)) {
   //Bräcke-Gällö in Jämtlands län (0693) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Bräcke-Gällö',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46695')) === '+46695') && (strlen($phone) == 12)) {
   //Stugun in Jämtlands län (0695) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Stugun',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46695')) === '+46695') && (strlen($phone) == 13)) {
   //Stugun in Jämtlands län (0695) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Stugun',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46695')) === '+46695') && (strlen($phone) == 14)) {
   //Stugun in Jämtlands län (0695) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Stugun',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46695')) === '+46695') && (strlen($phone) == 15)) {
   //Stugun in Jämtlands län (0695) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Stugun',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46696')) === '+46696') && (strlen($phone) == 12)) {
   //Hammarstrand in Jämtlands län (0696) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hammarstrand',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46696')) === '+46696') && (strlen($phone) == 13)) {
   //Hammarstrand in Jämtlands län (0696) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hammarstrand',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46696')) === '+46696') && (strlen($phone) == 14)) {
   //Hammarstrand in Jämtlands län (0696) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hammarstrand',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46696')) === '+46696') && (strlen($phone) == 15)) {
   //Hammarstrand in Jämtlands län (0696) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hammarstrand',
                  'region' => 'Jämtlands län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46910')) === '+46910') && (strlen($phone) == 12)) {
   //Skellefteå in Västerbottens län (0910) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skellefteå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46910')) === '+46910') && (strlen($phone) == 13)) {
   //Skellefteå in Västerbottens län (0910) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Skellefteå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46910')) === '+46910') && (strlen($phone) == 14)) {
   //Skellefteå in Västerbottens län (0910) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Skellefteå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46910')) === '+46910') && (strlen($phone) == 15)) {
   //Skellefteå in Västerbottens län (0910) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Skellefteå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46911')) === '+46911') && (strlen($phone) == 12)) {
   //Piteå in Norrbottens län (0911) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Piteå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46911')) === '+46911') && (strlen($phone) == 13)) {
   //Piteå in Norrbottens län (0911) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Piteå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46911')) === '+46911') && (strlen($phone) == 14)) {
   //Piteå in Norrbottens län (0911) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Piteå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46911')) === '+46911') && (strlen($phone) == 15)) {
   //Piteå in Norrbottens län (0911) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Piteå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46912')) === '+46912') && (strlen($phone) == 12)) {
   //Byske in Västerbottens län (0912) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Byske',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46912')) === '+46912') && (strlen($phone) == 13)) {
   //Byske in Västerbottens län (0912) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Byske',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46912')) === '+46912') && (strlen($phone) == 14)) {
   //Byske in Västerbottens län (0912) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Byske',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46912')) === '+46912') && (strlen($phone) == 15)) {
   //Byske in Västerbottens län (0912) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Byske',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46913')) === '+46913') && (strlen($phone) == 12)) {
   //Lövånger in Västerbottens län (0913) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lövånger',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46913')) === '+46913') && (strlen($phone) == 13)) {
   //Lövånger in Västerbottens län (0913) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lövånger',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46913')) === '+46913') && (strlen($phone) == 14)) {
   //Lövånger in Västerbottens län (0913) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lövånger',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46913')) === '+46913') && (strlen($phone) == 15)) {
   //Lövånger in Västerbottens län (0913) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lövånger',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46914')) === '+46914') && (strlen($phone) == 12)) {
   //Burträsk in Västerbottens län (0914) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Burträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46914')) === '+46914') && (strlen($phone) == 13)) {
   //Burträsk in Västerbottens län (0914) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Burträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46914')) === '+46914') && (strlen($phone) == 14)) {
   //Burträsk in Västerbottens län (0914) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Burträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46914')) === '+46914') && (strlen($phone) == 15)) {
   //Burträsk in Västerbottens län (0914) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Burträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46915')) === '+46915') && (strlen($phone) == 12)) {
   //Bastuträsk in Västerbottens län (0915) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bastuträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46915')) === '+46915') && (strlen($phone) == 13)) {
   //Bastuträsk in Västerbottens län (0915) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Bastuträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46915')) === '+46915') && (strlen($phone) == 14)) {
   //Bastuträsk in Västerbottens län (0915) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bastuträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46915')) === '+46915') && (strlen($phone) == 15)) {
   //Bastuträsk in Västerbottens län (0915) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Bastuträsk',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46916')) === '+46916') && (strlen($phone) == 12)) {
   //Jörn in Västerbottens län (0916) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Jörn',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46916')) === '+46916') && (strlen($phone) == 13)) {
   //Jörn in Västerbottens län (0916) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Jörn',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46916')) === '+46916') && (strlen($phone) == 14)) {
   //Jörn in Västerbottens län (0916) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Jörn',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46916')) === '+46916') && (strlen($phone) == 15)) {
   //Jörn in Västerbottens län (0916) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Jörn',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46918')) === '+46918') && (strlen($phone) == 12)) {
   //Norsjö in Västerbottens län (0918) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Norsjö',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46918')) === '+46918') && (strlen($phone) == 13)) {
   //Norsjö in Västerbottens län (0918) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Norsjö',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46918')) === '+46918') && (strlen($phone) == 14)) {
   //Norsjö in Västerbottens län (0918) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Norsjö',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46918')) === '+46918') && (strlen($phone) == 15)) {
   //Norsjö in Västerbottens län (0918) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Norsjö',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46920')) === '+46920') && (strlen($phone) == 12)) {
   //Luleå in Norrbottens län (0920) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Luleå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46920')) === '+46920') && (strlen($phone) == 13)) {
   //Luleå in Norrbottens län (0920) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Luleå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46920')) === '+46920') && (strlen($phone) == 14)) {
   //Luleå in Norrbottens län (0920) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Luleå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46920')) === '+46920') && (strlen($phone) == 15)) {
   //Luleå in Norrbottens län (0920) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Luleå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46921')) === '+46921') && (strlen($phone) == 12)) {
   //Boden in Norrbottens län (0921) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Boden',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46921')) === '+46921') && (strlen($phone) == 13)) {
   //Boden in Norrbottens län (0921) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Boden',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46921')) === '+46921') && (strlen($phone) == 14)) {
   //Boden in Norrbottens län (0921) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Boden',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46921')) === '+46921') && (strlen($phone) == 15)) {
   //Boden in Norrbottens län (0921) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Boden',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46922')) === '+46922') && (strlen($phone) == 12)) {
   //Haparanda in Norrbottens län (0922) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Haparanda',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46922')) === '+46922') && (strlen($phone) == 13)) {
   //Haparanda in Norrbottens län (0922) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Haparanda',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46922')) === '+46922') && (strlen($phone) == 14)) {
   //Haparanda in Norrbottens län (0922) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Haparanda',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46922')) === '+46922') && (strlen($phone) == 15)) {
   //Haparanda in Norrbottens län (0922) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Haparanda',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46923')) === '+46923') && (strlen($phone) == 12)) {
   //Kalix in Norrbottens län (0923) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46923')) === '+46923') && (strlen($phone) == 13)) {
   //Kalix in Norrbottens län (0923) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46923')) === '+46923') && (strlen($phone) == 14)) {
   //Kalix in Norrbottens län (0923) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46923')) === '+46923') && (strlen($phone) == 15)) {
   //Kalix in Norrbottens län (0923) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46924')) === '+46924') && (strlen($phone) == 12)) {
   //Råneå in Norrbottens län (0924) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Råneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46924')) === '+46924') && (strlen($phone) == 13)) {
   //Råneå in Norrbottens län (0924) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Råneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46924')) === '+46924') && (strlen($phone) == 14)) {
   //Råneå in Norrbottens län (0924) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Råneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46924')) === '+46924') && (strlen($phone) == 15)) {
   //Råneå in Norrbottens län (0924) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Råneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46925')) === '+46925') && (strlen($phone) == 12)) {
   //Lakaträsk in Norrbottens län (0925) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lakaträsk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46925')) === '+46925') && (strlen($phone) == 13)) {
   //Lakaträsk in Norrbottens län (0925) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lakaträsk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46925')) === '+46925') && (strlen($phone) == 14)) {
   //Lakaträsk in Norrbottens län (0925) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lakaträsk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46925')) === '+46925') && (strlen($phone) == 15)) {
   //Lakaträsk in Norrbottens län (0925) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lakaträsk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46926')) === '+46926') && (strlen($phone) == 12)) {
   //Överkalix in Norrbottens län (0926) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Överkalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46926')) === '+46926') && (strlen($phone) == 13)) {
   //Överkalix in Norrbottens län (0926) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Överkalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46926')) === '+46926') && (strlen($phone) == 14)) {
   //Överkalix in Norrbottens län (0926) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Överkalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46926')) === '+46926') && (strlen($phone) == 15)) {
   //Överkalix in Norrbottens län (0926) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Överkalix',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46927')) === '+46927') && (strlen($phone) == 12)) {
   //Övertorneå in Norrbottens län (0927) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Övertorneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46927')) === '+46927') && (strlen($phone) == 13)) {
   //Övertorneå in Norrbottens län (0927) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Övertorneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46927')) === '+46927') && (strlen($phone) == 14)) {
   //Övertorneå in Norrbottens län (0927) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Övertorneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46927')) === '+46927') && (strlen($phone) == 15)) {
   //Övertorneå in Norrbottens län (0927) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Övertorneå',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46928')) === '+46928') && (strlen($phone) == 12)) {
   //Harads in Norrbottens län (0928) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Harads',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46928')) === '+46928') && (strlen($phone) == 13)) {
   //Harads in Norrbottens län (0928) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Harads',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46928')) === '+46928') && (strlen($phone) == 14)) {
   //Harads in Norrbottens län (0928) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Harads',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46928')) === '+46928') && (strlen($phone) == 15)) {
   //Harads in Norrbottens län (0928) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Harads',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46929')) === '+46929') && (strlen($phone) == 12)) {
   //Älvsbyn in Norrbottens län (0929) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Älvsbyn',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46929')) === '+46929') && (strlen($phone) == 13)) {
   //Älvsbyn in Norrbottens län (0929) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Älvsbyn',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46929')) === '+46929') && (strlen($phone) == 14)) {
   //Älvsbyn in Norrbottens län (0929) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Älvsbyn',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46929')) === '+46929') && (strlen($phone) == 15)) {
   //Älvsbyn in Norrbottens län (0929) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Älvsbyn',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46930')) === '+46930') && (strlen($phone) == 12)) {
   //Nordmaling in Västerbottens län (0930) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nordmaling',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46930')) === '+46930') && (strlen($phone) == 13)) {
   //Nordmaling in Västerbottens län (0930) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Nordmaling',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46930')) === '+46930') && (strlen($phone) == 14)) {
   //Nordmaling in Västerbottens län (0930) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Nordmaling',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46930')) === '+46930') && (strlen($phone) == 15)) {
   //Nordmaling in Västerbottens län (0930) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Nordmaling',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46932')) === '+46932') && (strlen($phone) == 12)) {
   //Bjurholm in Västerbottens län (0932) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bjurholm',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46932')) === '+46932') && (strlen($phone) == 13)) {
   //Bjurholm in Västerbottens län (0932) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Bjurholm',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46932')) === '+46932') && (strlen($phone) == 14)) {
   //Bjurholm in Västerbottens län (0932) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Bjurholm',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46932')) === '+46932') && (strlen($phone) == 15)) {
   //Bjurholm in Västerbottens län (0932) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Bjurholm',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46933')) === '+46933') && (strlen($phone) == 12)) {
   //Vindeln in Västerbottens län (0933) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vindeln',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46933')) === '+46933') && (strlen($phone) == 13)) {
   //Vindeln in Västerbottens län (0933) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vindeln',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46933')) === '+46933') && (strlen($phone) == 14)) {
   //Vindeln in Västerbottens län (0933) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vindeln',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46933')) === '+46933') && (strlen($phone) == 15)) {
   //Vindeln in Västerbottens län (0933) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vindeln',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46934')) === '+46934') && (strlen($phone) == 12)) {
   //Robertsfors in Västerbottens län (0934) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Robertsfors',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46934')) === '+46934') && (strlen($phone) == 13)) {
   //Robertsfors in Västerbottens län (0934) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Robertsfors',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46934')) === '+46934') && (strlen($phone) == 14)) {
   //Robertsfors in Västerbottens län (0934) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Robertsfors',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46934')) === '+46934') && (strlen($phone) == 15)) {
   //Robertsfors in Västerbottens län (0934) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Robertsfors',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46935')) === '+46935') && (strlen($phone) == 12)) {
   //Vännäs in Västerbottens län (0935) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vännäs',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46935')) === '+46935') && (strlen($phone) == 13)) {
   //Vännäs in Västerbottens län (0935) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vännäs',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46935')) === '+46935') && (strlen($phone) == 14)) {
   //Vännäs in Västerbottens län (0935) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vännäs',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46935')) === '+46935') && (strlen($phone) == 15)) {
   //Vännäs in Västerbottens län (0935) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vännäs',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46940')) === '+46940') && (strlen($phone) == 12)) {
   //Vilhelmina in Västerbottens län (0940) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vilhelmina',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46940')) === '+46940') && (strlen($phone) == 13)) {
   //Vilhelmina in Västerbottens län (0940) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vilhelmina',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46940')) === '+46940') && (strlen($phone) == 14)) {
   //Vilhelmina in Västerbottens län (0940) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vilhelmina',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46940')) === '+46940') && (strlen($phone) == 15)) {
   //Vilhelmina in Västerbottens län (0940) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vilhelmina',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46941')) === '+46941') && (strlen($phone) == 12)) {
   //Åsele in Västerbottens län (0941) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46941')) === '+46941') && (strlen($phone) == 13)) {
   //Åsele in Västerbottens län (0941) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Åsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46941')) === '+46941') && (strlen($phone) == 14)) {
   //Åsele in Västerbottens län (0941) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Åsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46941')) === '+46941') && (strlen($phone) == 15)) {
   //Åsele in Västerbottens län (0941) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Åsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46942')) === '+46942') && (strlen($phone) == 12)) {
   //Dorotea in Västerbottens län (0942) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Dorotea',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46942')) === '+46942') && (strlen($phone) == 13)) {
   //Dorotea in Västerbottens län (0942) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Dorotea',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46942')) === '+46942') && (strlen($phone) == 14)) {
   //Dorotea in Västerbottens län (0942) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Dorotea',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46942')) === '+46942') && (strlen($phone) == 15)) {
   //Dorotea in Västerbottens län (0942) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Dorotea',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46943')) === '+46943') && (strlen($phone) == 12)) {
   //Fredrika in Västerbottens län (0943) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Fredrika',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46943')) === '+46943') && (strlen($phone) == 13)) {
   //Fredrika in Västerbottens län (0943) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Fredrika',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46943')) === '+46943') && (strlen($phone) == 14)) {
   //Fredrika in Västerbottens län (0943) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Fredrika',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46943')) === '+46943') && (strlen($phone) == 15)) {
   //Fredrika in Västerbottens län (0943) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Fredrika',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46950')) === '+46950') && (strlen($phone) == 12)) {
   //Lycksele in Västerbottens län (0950) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lycksele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46950')) === '+46950') && (strlen($phone) == 13)) {
   //Lycksele in Västerbottens län (0950) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Lycksele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46950')) === '+46950') && (strlen($phone) == 14)) {
   //Lycksele in Västerbottens län (0950) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Lycksele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46950')) === '+46950') && (strlen($phone) == 15)) {
   //Lycksele in Västerbottens län (0950) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Lycksele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46951')) === '+46951') && (strlen($phone) == 12)) {
   //Storuman in Västerbottens län (0951) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Storuman',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46951')) === '+46951') && (strlen($phone) == 13)) {
   //Storuman in Västerbottens län (0951) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Storuman',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46951')) === '+46951') && (strlen($phone) == 14)) {
   //Storuman in Västerbottens län (0951) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Storuman',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46951')) === '+46951') && (strlen($phone) == 15)) {
   //Storuman in Västerbottens län (0951) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Storuman',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46952')) === '+46952') && (strlen($phone) == 12)) {
   //Sorsele in Västerbottens län (0952) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sorsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46952')) === '+46952') && (strlen($phone) == 13)) {
   //Sorsele in Västerbottens län (0952) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Sorsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46952')) === '+46952') && (strlen($phone) == 14)) {
   //Sorsele in Västerbottens län (0952) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Sorsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46952')) === '+46952') && (strlen($phone) == 15)) {
   //Sorsele in Västerbottens län (0952) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Sorsele',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46953')) === '+46953') && (strlen($phone) == 12)) {
   //Malå in Västerbottens län (0953) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Malå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46953')) === '+46953') && (strlen($phone) == 13)) {
   //Malå in Västerbottens län (0953) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Malå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46953')) === '+46953') && (strlen($phone) == 14)) {
   //Malå in Västerbottens län (0953) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Malå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46953')) === '+46953') && (strlen($phone) == 15)) {
   //Malå in Västerbottens län (0953) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Malå',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46954')) === '+46954') && (strlen($phone) == 12)) {
   //Tärnaby in Västerbottens län (0954) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tärnaby',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46954')) === '+46954') && (strlen($phone) == 13)) {
   //Tärnaby in Västerbottens län (0954) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Tärnaby',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46954')) === '+46954') && (strlen($phone) == 14)) {
   //Tärnaby in Västerbottens län (0954) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Tärnaby',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46954')) === '+46954') && (strlen($phone) == 15)) {
   //Tärnaby in Västerbottens län (0954) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Tärnaby',
                  'region' => 'Västerbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46960')) === '+46960') && (strlen($phone) == 12)) {
   //Arvidsjaur in Norrbottens län (0960) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arvidsjaur',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46960')) === '+46960') && (strlen($phone) == 13)) {
   //Arvidsjaur in Norrbottens län (0960) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Arvidsjaur',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46960')) === '+46960') && (strlen($phone) == 14)) {
   //Arvidsjaur in Norrbottens län (0960) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arvidsjaur',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46960')) === '+46960') && (strlen($phone) == 15)) {
   //Arvidsjaur in Norrbottens län (0960) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Arvidsjaur',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46961')) === '+46961') && (strlen($phone) == 12)) {
   //Arjeplog in Norrbottens län (0961) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arjeplog',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46961')) === '+46961') && (strlen($phone) == 13)) {
   //Arjeplog in Norrbottens län (0961) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Arjeplog',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46961')) === '+46961') && (strlen($phone) == 14)) {
   //Arjeplog in Norrbottens län (0961) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Arjeplog',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46961')) === '+46961') && (strlen($phone) == 15)) {
   //Arjeplog in Norrbottens län (0961) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Arjeplog',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46970')) === '+46970') && (strlen($phone) == 12)) {
   //Gällivare in Norrbottens län (0970) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gällivare',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46970')) === '+46970') && (strlen($phone) == 13)) {
   //Gällivare in Norrbottens län (0970) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Gällivare',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46970')) === '+46970') && (strlen($phone) == 14)) {
   //Gällivare in Norrbottens län (0970) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Gällivare',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46970')) === '+46970') && (strlen($phone) == 15)) {
   //Gällivare in Norrbottens län (0970) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Gällivare',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46971')) === '+46971') && (strlen($phone) == 12)) {
   //Jokkmokk in Norrbottens län (0971) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Jokkmokk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46971')) === '+46971') && (strlen($phone) == 13)) {
   //Jokkmokk in Norrbottens län (0971) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Jokkmokk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46971')) === '+46971') && (strlen($phone) == 14)) {
   //Jokkmokk in Norrbottens län (0971) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Jokkmokk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46971')) === '+46971') && (strlen($phone) == 15)) {
   //Jokkmokk in Norrbottens län (0971) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Jokkmokk',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46973')) === '+46973') && (strlen($phone) == 12)) {
   //Porjus in Norrbottens län (0973) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Porjus',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46973')) === '+46973') && (strlen($phone) == 13)) {
   //Porjus in Norrbottens län (0973) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Porjus',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46973')) === '+46973') && (strlen($phone) == 14)) {
   //Porjus in Norrbottens län (0973) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Porjus',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46973')) === '+46973') && (strlen($phone) == 15)) {
   //Porjus in Norrbottens län (0973) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Porjus',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46975')) === '+46975') && (strlen($phone) == 12)) {
   //Hakkas in Norrbottens län (0975) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hakkas',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46975')) === '+46975') && (strlen($phone) == 13)) {
   //Hakkas in Norrbottens län (0975) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Hakkas',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46975')) === '+46975') && (strlen($phone) == 14)) {
   //Hakkas in Norrbottens län (0975) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Hakkas',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46975')) === '+46975') && (strlen($phone) == 15)) {
   //Hakkas in Norrbottens län (0975) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Hakkas',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46976')) === '+46976') && (strlen($phone) == 12)) {
   //Vuollerim in Norrbottens län (0976) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vuollerim',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46976')) === '+46976') && (strlen($phone) == 13)) {
   //Vuollerim in Norrbottens län (0976) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vuollerim',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46976')) === '+46976') && (strlen($phone) == 14)) {
   //Vuollerim in Norrbottens län (0976) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vuollerim',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46976')) === '+46976') && (strlen($phone) == 15)) {
   //Vuollerim in Norrbottens län (0976) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vuollerim',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46977')) === '+46977') && (strlen($phone) == 12)) {
   //Korpilombolo in Norrbottens län (0977) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Korpilombolo',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46977')) === '+46977') && (strlen($phone) == 13)) {
   //Korpilombolo in Norrbottens län (0977) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Korpilombolo',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46977')) === '+46977') && (strlen($phone) == 14)) {
   //Korpilombolo in Norrbottens län (0977) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Korpilombolo',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46977')) === '+46977') && (strlen($phone) == 15)) {
   //Korpilombolo in Norrbottens län (0977) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Korpilombolo',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46978')) === '+46978') && (strlen($phone) == 12)) {
   //Pajala in Norrbottens län (0978) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Pajala',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46978')) === '+46978') && (strlen($phone) == 13)) {
   //Pajala in Norrbottens län (0978) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Pajala',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46978')) === '+46978') && (strlen($phone) == 14)) {
   //Pajala in Norrbottens län (0978) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Pajala',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46978')) === '+46978') && (strlen($phone) == 15)) {
   //Pajala in Norrbottens län (0978) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Pajala',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46980')) === '+46980') && (strlen($phone) == 12)) {
   //Kiruna in Norrbottens län (0980) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kiruna',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46980')) === '+46980') && (strlen($phone) == 13)) {
   //Kiruna in Norrbottens län (0980) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Kiruna',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46980')) === '+46980') && (strlen($phone) == 14)) {
   //Kiruna in Norrbottens län (0980) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Kiruna',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46980')) === '+46980') && (strlen($phone) == 15)) {
   //Kiruna in Norrbottens län (0980) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Kiruna',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} elseif((substr($phone, 0, strlen('+46981')) === '+46981') && (strlen($phone) == 12)) {
   //Vittangi in Norrbottens län (0981) : 10 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vittangi',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46981')) === '+46981') && (strlen($phone) == 13)) {
   //Vittangi in Norrbottens län (0981) : 11 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2),
                  'city'   => 'Vittangi',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46981')) === '+46981') && (strlen($phone) == 14)) {
   //Vittangi in Norrbottens län (0981) : 12 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 2),
                  'city'   => 'Vittangi',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');

} elseif((substr($phone, 0, strlen('+46981')) === '+46981') && (strlen($phone) == 15)) {
   //Vittangi in Norrbottens län (0981) : 13 digit
   $found = array(
                  'number' => substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'local' => '0' . substr($phone, 3, 3) . ' - ' . substr($phone, 6, 3) . ' ' . substr($phone, 7, 3) . ' ' . substr($phone, 10, 3),
                  'city'   => 'Vittangi',
                  'region' => 'Norrbottens län',
                  'country' => 'Sweden');





} 