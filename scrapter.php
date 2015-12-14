<?php
/**
 * Created by PhpStorm.
 * User: liangchen
 * Date: 10/12/15
 * Time: 4:45 PM
 */

    $city=(isset($_GET['city']));
    $city=$_GET['city'];

    $city=str_replace(" ", "", $city);

    $contents=file_get_contents("http://www.weather-forecast.com/locations/$city/forecasts/latest");

    preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

    echo $matches[1];
?>