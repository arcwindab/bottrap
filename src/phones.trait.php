<?php 
/**
 * @package arcwindab/bottrap
 * @link    https://github.com/arcwindab/bottrap/
 * @author  Tobias Jonson <support@bot.arcwind.se>
 * @license https://github.com/arcwindab/bottrap/blob/main/LICENSE
 */

namespace arcwindab {
  trait phone_formats {
      function format_numbers($numbers, $return = '') {
         $returns= array();
         
         if((is_array($numbers)) || (is_object($numbers))) {
            $phones = $numbers;
         } else {
            $phones = explode(',', $numbers);
         }
         

         foreach($phones as $key => $phone) {
            $input = $phone;
            $phone = trim(preg_replace('/[^\d\+]/', '', ($phone)));
            if($phone != '') {
               if(substr($phone, 0, strlen('00')) === '00') {
                  $phone = str_replace('00', '+', $phone);
               }
               
               $plain = preg_replace('/[^\d]/', '', str_replace('+', '00', $phone));
               $found = array('number' => '', 'local' => '', 'city' => '', 'region' => '', 'country' => '');
               
               foreach(glob(dirname(__FILE__).'/phone_formats/*.php') as $filename) {
                  include($filename);
               }
               
               $found['input'] = $input;
               $found['plain'] = $plain;
               
               if(($return != '') && (isset($found[$return]))) {
                  $returns[$key] = $found[$return];
               } else {
                  $returns[$key] = $found;
               }
               
            }
         }
         return $returns;
      }
  }
}