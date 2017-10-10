# google-short-url-php
PHP Library for easy convert long url to short url.
## Install library with composer.
```
composer require nattaponra/google-short-url-php
```
## Inherent class and setting api key.
```php
// If your don't has api key please read this document > https://developers.google.com/identity/protocols/OAuth2
$apiKey = "XxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxX";
$goo = new Googl($apiKey);

```

## Create short of https://github.com
```php
$shortUrl = "https://github.com";
$resultOfShortening = $goo->shorten($shortUrl);
print_r($resultOfShortening);
// Result utl : https://goo.gl/un5E
```
Result:
```console
{
 "kind": "urlshortener#url",
 "id": "https://goo.gl/un5E",
 "longUrl": "https://github.com/"
}
```

## Try to expand short url to long url. 
```php
$longUrl = "https://goo.gl/un5E";
$resultOfExpansion = $goo->expand($longUrl);
print_r($resultOfExpansion);
// Result utl : https://github.com
```
Result:
```console
{
 "kind": "urlshortener#url",
 "id": "https://goo.gl/un5E",
 "longUrl": "https://github.com/",
 "status": "OK"
}
```
## Get stat of short url.
```php
$result = $goo->lookUpAnalytics("https://goo.gl/un5E");
print_r($result);
```
Result:
```console
{
 "kind": "urlshortener#url",
 "id": "https://goo.gl/un5E",
 "longUrl": "https://github.com/",
 "status": "OK",
 "created": "2009-12-18T02:20:15.000+00:00",
 "analytics": {
  "allTime": {
   "shortUrlClicks": "2390",
   "longUrlClicks": "4822",
   "referrers": [
    {
     "count": "764",
     "id": "unknown"
    },
    {
     "count": "645",
     "id": "talaroid.com"
    },
    {
     "count": "526",
     "id": "www.chatlogix.com"
    },
    {
     "count": "163",
     "id": "tysgo.com.gt"
    },
    {
     "count": "142",
     "id": "jalebiyat.com"
    },
    {
     "count": "19",
     "id": "by3.eu"
    },
    {
     "count": "18",
     "id": "phraseapp.com"
    },
    {
     "count": "12",
     "id": "web-your-enthusiasm.surge.sh"
    },
    {
     "count": "9",
     "id": "umass-cs-326.github.io"
    },
    {
     "count": "7",
     "id": "ubuntuforums.org"
    }
   ],
   "countries": [
    {
     "count": "892",
     "id": "US"
    },
    {
     "count": "863",
     "id": "IR"
    },
    {
     "count": "54",
     "id": "JP"
    },
    {
     "count": "51",
     "id": "GB"
    },
    {
     "count": "43",
     "id": "DE"
    },
    {
     "count": "39",
     "id": "BR"
    },
    {
     "count": "39",
     "id": "CN"
    },
    {
     "count": "34",
     "id": "IN"
    },
    {
     "count": "20",
     "id": "FR"
    },
    {
     "count": "18",
     "id": "BY"
    }
   ],
   "browsers": [
    {
     "count": "1563",
     "id": "Chrome"
    },
    {
     "count": "310",
     "id": "Firefox"
    },
    {
     "count": "213",
     "id": "MSIE"
    },
    {
     "count": "158",
     "id": "SamsungBrowser"
    },
    {
     "count": "67",
     "id": "Safari"
    },
    {
     "count": "32",
     "id": "Mobile Safari"
    },
    {
     "count": "18",
     "id": "CriOS"
    },
    {
     "count": "8",
     "id": "Mobile"
    },
    {
     "count": "5",
     "id": "UCBrowser"
    },
    {
     "count": "4",
     "id": "Dalvik"
    }
   ],
   "platforms": [
    {
     "count": "964",
     "id": "Windows"
    },
    {
     "count": "668",
     "id": "Macintosh"
    },
    {
     "count": "565",
     "id": "Android"
    },
    {
     "count": "87",
     "id": "X11"
    },
    {
     "count": "53",
     "id": "iPhone"
    },
    {
     "count": "10",
     "id": "iPad"
    },
    {
     "count": "8",
     "id": "Android 6.0.1"
    },
    {
     "count": "6",
     "id": "Android 4.4.2"
    },
    {
     "count": "6",
     "id": "Android 5.0.1"
    },
    {
     "count": "3",
     "id": "Android 5.1"
    }
   ]
  },
  "month": {
   "shortUrlClicks": "66",
   "longUrlClicks": "104",
   "referrers": [
    {
     "count": "29",
     "id": "unknown"
    },
    {
     "count": "17",
     "id": "jalebiyat.com"
    },
    {
     "count": "12",
     "id": "web-your-enthusiasm.surge.sh"
    },
    {
     "count": "5",
     "id": "talaroid.com"
    },
    {
     "count": "3",
     "id": "virtual.universidadean.edu.co"
    }
   ],
   "countries": [
    {
     "count": "25",
     "id": "IR"
    },
    {
     "count": "12",
     "id": "US"
    },
    {
     "count": "5",
     "id": "CO"
    },
    {
     "count": "3",
     "id": "GB"
    },
    {
     "count": "2",
     "id": "AT"
    },
    {
     "count": "2",
     "id": "AU"
    },
    {
     "count": "2",
     "id": "IN"
    },
    {
     "count": "2",
     "id": "IQ"
    },
    {
     "count": "2",
     "id": "MA"
    },
    {
     "count": "1",
     "id": "FR"
    }
   ],
   "browsers": [
    {
     "count": "42",
     "id": "Chrome"
    },
    {
     "count": "17",
     "id": "Firefox"
    },
    {
     "count": "3",
     "id": "Mobile Safari"
    },
    {
     "count": "3",
     "id": "SamsungBrowser"
    },
    {
     "count": "1",
     "id": "CriOS"
    }
   ],
   "platforms": [
    {
     "count": "28",
     "id": "Windows"
    },
    {
     "count": "17",
     "id": "Android"
    },
    {
     "count": "8",
     "id": "X11"
    },
    {
     "count": "3",
     "id": "Macintosh"
    },
    {
     "count": "1",
     "id": "Android 5.0.1"
    },
    {
     "count": "1",
     "id": "Android 5.1"
    },
    {
     "count": "1",
     "id": "iPhone"
    }
   ]
  },
  "week": {
   "shortUrlClicks": "12",
   "longUrlClicks": "17",
   "referrers": [
    {
     "count": "10",
     "id": "unknown"
    },
    {
     "count": "1",
     "id": "jalebiyat.com"
    },
    {
     "count": "1",
     "id": "virtual.universidadean.edu.co"
    }
   ],
   "countries": [
    {
     "count": "3",
     "id": "IR"
    },
    {
     "count": "2",
     "id": "GB"
    },
    {
     "count": "2",
     "id": "IQ"
    },
    {
     "count": "2",
     "id": "US"
    },
    {
     "count": "1",
     "id": "AU"
    },
    {
     "count": "1",
     "id": "FR"
    },
    {
     "count": "1",
     "id": "YE"
    }
   ],
   "browsers": [
    {
     "count": "5",
     "id": "Chrome"
    },
    {
     "count": "4",
     "id": "Firefox"
    },
    {
     "count": "2",
     "id": "SamsungBrowser"
    },
    {
     "count": "1",
     "id": "Mobile Safari"
    }
   ],
   "platforms": [
    {
     "count": "6",
     "id": "Android"
    },
    {
     "count": "2",
     "id": "Windows"
    },
    {
     "count": "2",
     "id": "X11"
    },
    {
     "count": "1",
     "id": "Android 5.0.1"
    },
    {
     "count": "1",
     "id": "Android 5.1"
    }
   ]
  },
  "day": {
   "shortUrlClicks": "2",
   "longUrlClicks": "3",
   "referrers": [
    {
     "count": "2",
     "id": "unknown"
    }
   ],
   "countries": [
    {
     "count": "2",
     "id": "IQ"
    }
   ],
   "browsers": [
    {
     "count": "2",
     "id": "Chrome"
    }
   ],
   "platforms": [
    {
     "count": "2",
     "id": "Android"
    }
   ]
  },
  "twoHours": {
   "shortUrlClicks": "0",
   "longUrlClicks": "0"
  }
 }
}
```
