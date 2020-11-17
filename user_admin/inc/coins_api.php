<!--getting data from crypto api-->
<?php
$url = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false';
$coins = json_decode(file_get_contents($url), true);
?>