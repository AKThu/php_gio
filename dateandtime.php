<?php

/* Date & Time */
// official doc - https://www.php.net/manual/en/datetime.format.php
// timezone doc - https://www.php.net/manual/en/datetimeimmutable.settimezone.php

echo time() . '<br />'; // time in seconds since 1970 jan 1
echo time() + ( 5 * 24 * 60 * 60) . '<br />'; // next five day timestamp
echo time() - ( 24 * 60 * 60) . '<br />'; // yesterday timestamp

echo 'UTC: ' . date('m/d/Y g:ia') . '<br />'; 
echo date_default_timezone_get() . '<br />';

date_default_timezone_set('Asia/Yangon'); // change timezone, default is UTC

echo 'Yangon: ' . date('m/d/Y g:ia') . '<br />';
echo 'Yangon (yesterday): ' . date('m/d/Y g:ia', time() - ( 24 * 60 * 60)) . '<br />';
echo 'Yangon (tomorrow): ' . date('m/d/Y g:ia', time() + ( 24 * 60 * 60)) . '<br />';


echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null )) . '<br />';


echo date('m/d/Y g:ia', strtotime('2021-01-18 07:00:00')) . '<br />';
echo date('m/d/Y g:ia', strtotime('tomorrow')) . '<br />';
echo date('m/d/Y g:ia', strtotime('first day of february')) . '<br />';
echo date('m/d/Y g:ia', strtotime('last day of february')) . '<br />';
echo date('m/d/Y g:ia', strtotime('last day of february  2023')) . '<br />';


$date = date('m/d/Y g:ia', strtotime('second friday of Januray'));

echo '<pre>';
print_r(date_parse($date));
echo '</pre>';

echo '<pre>';
print_r(date_parse_from_format('m/d/Y g:ia', $date));
echo '</pre>';

