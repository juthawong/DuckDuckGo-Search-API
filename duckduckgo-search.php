<?php
namespace AmpareEngine;
class DuckDuckGo
{

    public function Search($search)
    {
      return json_decode(file_get_contents("http://api.duckduckgo.com/?q=".$search."&format=json&pretty=1"));
    }
}
