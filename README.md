# DuckDuckGo-Search-API
Search Anything on the web using DuckDuckGo API using our framework and save your time. Just for fun


## Composer 
```
composer require ampare-engine/duckduckgo
```
## How to Use

Just include the php file just like the example.

For Object Oriented Style
```
include('duckduckgo-search.php');
$DuckDuckGo = new AmpareEngine\DuckDuckGo;
var_dump($DuckDuckGo->search("Ampare Engine"));
```

For Procedure Function Style
```
<?php
include('duckduckgo-search-function.php');
var_dump(DuckDuckGoSearch("Ampare Engine"));
```

## More Information For DuckDuckGo Search and instant Answer API

https://duckduckgo.com/api
