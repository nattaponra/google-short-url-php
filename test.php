<?php
require_once __DIR__ . '/app/autoload.php';

use Googl\Googl;
// If your don't has api key please read this document > https://developers.google.com/identity/protocols/OAuth2
$apiKey = "XxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxX";
$goo = new Googl($apiKey);



/** Create short a url from https://github.com */
$shortUrl = "https://github.com";
$resultOfShortening = $goo->shorten($shortUrl);
print_r($resultOfShortening);
// Result utl : https://goo.gl/un5E



/** Try to expand short url to long url. */
$longUrl = "https://goo.gl/un5E";
$resultOfExpansion = $goo->expand($longUrl);
print_r($resultOfExpansion);
// Result utl : https://github.com


/** Get stat of short url. */
$result = $goo->lookUpAnalytics("https://goo.gl/un5E");
print_r($result);