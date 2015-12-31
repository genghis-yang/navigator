<?php
/**
 * Created by PhpStorm.
 * User: genghis
 * Date: 15-12-28
 * Time: 下午10:56
 */
$hostName = $_SERVER['HTTP_HOST'];
$requestStr = $_SERVER["REQUEST_URI"];
if (stripos($hostName, "blog.") == 0) {
    header("Location: https://genghis.info/blog" . $requestStr, true, 301);
} else {
    echo "<h1>No content. Wait a time...</h1>";
}