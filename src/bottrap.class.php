<?php 
/**
 * @package arcwindab/bottrap
 * @link    https://github.com/arcwindab/bottrap/
 * @author  Tobias Jonson <support@bot.arcwind.se>
 * @license https://github.com/arcwindab/bottrap/blob/main/LICENSE
 */

namespace arcwindab {
   include_once dirname(__FILE__).'/phones.trait.php';
   
   class bottrap {
      use phone_formats;
      /**
       * The version number
       *
       * @var string
       */
      protected $version = '0.1';
      
      /**
       * Should the output be obfuscated or false for clean
       *
       * @var bool
       */
      protected $obfuscate = true;
      
      /**
       * Should the output be international formated
       *
       * @var bool
       */
      protected $international = false;
      
      
      /**
       * Should output be obfuscated or false for clean
       *
       * @param bool $bool       True/false
       *
       * @return bool
       */
      public function set_obfuscate($bool) {
         if(is_bool($bool)) {
            $this->obfuscate = $bool;
            
            return true;
         }
         
         return false;
      }
      
      /**
       * Set return should be international formated
       *
       * @param bool $bool       True/false
       *
       * @return bool
       */
      public function set_international($bool) {
         if(is_bool($bool)) {
            $this->international = $bool;
            
            return true;
         }
         
         return false;
      }
      
      
      // <!-- Email bottrap function to copy as stand-alone

      /**
       * Return a bot-safe email
       *
       * @param string $email    Email to hide
       * @param string $icon     What font-icon to use | empty for no
       * @param string $title    Text to be shown instead of email
       * @param string $subject  Email subject
       * @param string $body     Email body
       *
       * @return string
       */
      function email($email, $icon = "at", $title = "", $subject = "", $body = "") {
         $incontext        = false;
         $email            = strtolower(trim($email));
         $id               = rand(10,99)."".uniqid(); 
         $str              = '';
         $title            = trim($title);
         $text             = $title;
         
         $db = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)[0];
         if((isset($db['class'])) && ($db['class'] == 'arcwindab\bottrap')) {
            $incontext = true;
         }
         
         if((!filter_var($email, FILTER_VALIDATE_EMAIL) === false) && (strpos($email, '@') !== false)) {
            $db = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)[0];
            if(($incontext) && (isset($this->obfuscate)) && ($this->obfuscate === false)) {
               return $email;
            } 
            
            $q = array();
            if($subject!="") {
               $q[] = "subject=".addslashes(urlencode($subject));
            }
            
            if($body!="") {
               $q[] = "body=".addslashes(urlencode($body));
            }
            
            $parts["prefix"]  = substr($email, 0, strrpos($email, '@'));
            $parts["domain"]  = substr(substr(strrchr($email, '@'), 1), 0 , (strrpos(substr(strrchr($email, '@'), 1), ".")));
            $parts["top"]     = substr(strrchr($email, '.'), 1);

            if($title == '') {
               $text = $parts["prefix"].' at '.$parts["domain"].' dot '.$parts["top"];
            }
            
            if($text != '') {
               ob_start(); ?><span style="cursor:pointer;" data-id="<?php echo $id; ?>"><?php echo $text; ?></span>
<script>
   var a<?php echo $id; ?> = false;
   b<?php echo $id; ?>();
   function b<?php echo $id; ?>() {
      var icon = '', top = "<?php echo $parts["top"]; ?>", pre = "<?php echo $parts["prefix"]; ?>", dom = "<?php echo $parts["domain"]; ?>", e = pre + '&#64;' + dom + '&#46;' + top, t = e, i = 'il', o = 'to', m = 'ma', mio = m+i+o+':';
      if(typeof(jQuery) == "undefined") {
         if(!a<?php echo $id; ?>) {a<?php echo $id; ?> = true;
            document.write("<scr" + "ipt type=\'text/javascript\' src=\'//code.jquery.com/jquery-3.6.0.min.js\'></scr" + "ipt>");
         }
         setTimeout("b<?php echo $id; ?>()", 50);
      } else {<?php if($title != '') { ?> 
         t= "<?php echo $title; ?>";<?php } ?> 
         $("[data-id='<?php echo $id; ?>']").html('<span class="fa-fw"></span>');
         if($("[data-id='<?php echo $id; ?>'] .fa-fw").css('text-align') == 'center') {icon = '<?php echo $icon; ?>';}
         $("[data-id='<?php echo $id; ?>']").html((icon != '' ? "<i class='fal fa-fw fa-" + icon + "'></i>&#32;" : '') + t);

         $("[data-id='<?php echo $id; ?>']").on("click", function(event) {
            event.preventDefault();
            var t = mio + e.replace('&#46;', '.').replace('&#64;', '@')<?php echo (!empty($q) ? ' + "?' . implode('&', $q).'"' : ''); ?>;

            if(event.type == 'click') {
               location.href = t;
            }
         });
      }
   }
</script><?php return ob_get_clean();
            }
         }
         
         
         return $email;
      }

      // -->
      
      
      
      // <!-- Phone bottrap function to copy as stand-alone

      /**
       * Return a bot-safe tel:link
       *
       * @param string $number   Number to format and to hide
       * @param string $icon     What font-icon to use | empty for no
       * @param string $title    Text to be shown instead of phone
       *
       * @return string
       */
      function phone($number, $icon = "phone", $title = "") {
         $incontext                 = false;
         $number = $local = $plain  = trim(preg_replace('/\s+/', ' ', preg_replace('/[^\d\s\+]/', '', ($number))));
         $id                        = rand(10,99)."".uniqid(); 
         $str                       = '';
         $title                     = trim($title);
         $text                      = $title;
         
         $db = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)[0];
         if((isset($db['class'])) && ($db['class'] == 'arcwindab\bottrap')) {
            $incontext = true;
         }
         
         if($number != '') {
            if($incontext) {
               $numbers = $this->format_numbers($number)[0];
               
               if($this->international == true) {
                  if((isset($numbers['number'])) && ($numbers['number'] != '')) {
                     $number = $numbers['number'];
                  } else if((isset($numbers['input'])) && ($numbers['input'] != '')) {
                     $number = $numbers['input'];
                  }
               } else {
                  if((isset($numbers['local'])) && ($numbers['local'] != '')) {
                     $number = $numbers['local'];
                  } else if((isset($numbers['input'])) && ($numbers['input'] != '')) {
                     $number = $numbers['input'];
                  }
               }
               
               
               if((isset($numbers['plain'])) && ($numbers['plain'] != '')) {
                  $plain = $numbers['plain'];
               }
               
               
               if((isset($this->obfuscate)) && ($this->obfuscate === false)) {
                  return $number;
               } 
            }
               
            
            if($title == '') {
               $text = $number;
            }
            
            if($text != '') {
               ob_start(); ?><span style="cursor:pointer;" data-id="<?php echo $id; ?>"><?php echo $text; ?></span>
<script>
   var a<?php echo $id; ?> = false;
   b<?php echo $id; ?>();
   function b<?php echo $id; ?>() {
      var icon = '', n = "<?php echo $plain; ?>", t = "<?php echo $text; ?>", i = 'e', o = 'l', m = 't', mio = m+i+o+':';
      if(typeof(jQuery) == "undefined") {
         if(!a<?php echo $id; ?>) {a<?php echo $id; ?> = true;
            document.write("<scr" + "ipt type=\'text/javascript\' src=\'//code.jquery.com/jquery-3.6.0.min.js\'></scr" + "ipt>");
         }
         setTimeout("b<?php echo $id; ?>()", 50);
      } else {<?php if($title != '') { ?> 
         t= "<?php echo $title; ?>";<?php } ?> 
         $("[data-id='<?php echo $id; ?>']").html('<span class="fa-fw"></span>');
         if($("[data-id='<?php echo $id; ?>'] .fa-fw").css('text-align') == 'center') {icon = '<?php echo $icon; ?>';}
         $("[data-id='<?php echo $id; ?>']").html((icon != '' ? "<i class='fal fa-fw fa-" + icon + "'></i>&#32;" : '') + t);

         $("[data-id='<?php echo $id; ?>']").on("click", function(event) {
            event.preventDefault();
            t = mio + n;

            if(event.type == 'click') {
               location.href = t;
            }
         });
      }
   }
</script><?php return ob_get_clean();
            }
         }
         
         
         return $number;
      }

      // -->
   }
}
