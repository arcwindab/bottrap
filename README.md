# ArcWind BotTrap
[![Latest Stable Version](https://poser.pugx.org/arcwindab/bottrap/v/stable.svg)](https://packagist.org/packages/arcwindab/bottrap)
[![Latest Unstable Version](https://poser.pugx.org/arcwindab/bottrap/v/unstable.svg)](https://packagist.org/packages/arcwindab/bottrap)
[![Build Status](https://travis-ci.org/arcwindab/bottrap.svg)](https://packagist.org/packages/arcwindab/bottrap)  

[![Total Downloads](https://poser.pugx.org/arcwindab/bottrap/downloads)](https://packagist.org/packages/arcwindab/bottrap)
[![GitHub issues open](https://img.shields.io/github/issues/arcwindab/bottrap.svg)](https://github.com/arcwindab/bottrap/issues)

[![License](https://poser.pugx.org/arcwindab/bottrap/license.svg)](https://packagist.org/packages/arcwindab/bottrap)

## Disclaimer
In the words of Abraham Lincoln:
> Pardon my French

My English, and technical terms in code, is not very good - I'm not a native speaker.  
Sorry for any confusion that may occur.

## Install
ArcWind BotTrap is available on [Packagist](https://packagist.org/packages/arcwindab/bottrap) and installation via Composer is the recommended way to install ArcWind BotTrap. Just add this line to your composer.json file:
```
"arcwindab/bottrap": "@dev"
```
or run
```
composer require arcwindab/bottrap
```
## Run
```
<?php
//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing my own user agent
$bottrap = new arcwindab\bottrap();  
echo $bottrap->email('test+prof@bot.example.com');  
echo $bottrap->phone('+46 77 114 14 00');  
```
