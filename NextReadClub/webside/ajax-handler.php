<?php

function searchGoodreads($query) {

  $key = "T3IMSsYOcjl0Z0GF2CeQeA";

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, "www.goodreads.com/search.xml?key=" + $key + "&q=" + $query);
  $result = curl_exec($curl);
  return $result;
}

if (isset($_GET["callSearchGoodreads"])) {
  echo searchGoodreads($_GET["callSearchGoodreads"]);
}

?>
