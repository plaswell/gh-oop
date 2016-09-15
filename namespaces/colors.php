<?php
require __DIR__ . '/vendor/autoload.php';
use Rych\Random\Random;
//echo (new Random())->getRandomInteger(1, 5);
$myColor =  "#" . (new Random())->getRandomString(6, 'ABCDEF0123456789');
echo "<h1 style='color:" . $myColor . "'>RANDOM COLOR PICKER!</h1>";

$myColor1 =  "#" . (new Random())->getRandomString(6, 'ABCDEF0123456789');
echo "<p style='font-size:50px;margin-bottom:-50px;background-color:" . $myColor1 . "'>&nbsp;&nbsp;</p>";
$myColor2 =  "#" . (new Random())->getRandomString(6, 'ABCDEF0123456789');
echo "<p style='font-size:50px;margin-bottom:-50px;background-color:" . $myColor2 . "'>&nbsp;&nbsp;</p>";
$myColor3 =  "#" . (new Random())->getRandomString(6, 'ABCDEF0123456789');
echo "<p style='font-size:50px;margin-bottom:-50px;background-color:" . $myColor3 . "'>&nbsp;&nbsp;</p>";
$myColor4 =  "#" . (new Random())->getRandomString(6, 'ABCDEF0123456789');
echo "<p style='font-size:50px;margin-bottom:-50px;background-color:" . $myColor4 . "'>&nbsp;&nbsp;</p>";
$myColor5 =  "#" . (new Random())->getRandomString(6, 'ABCDEF0123456789');
echo "<p style='font-size:50px;margin-bottom:-50px;background-color:" . $myColor5 . "'>&nbsp;&nbsp;</p>";
$myColor6 =  "#" . (new Random())->getRandomString(6, 'ABCDEF0123456789');
echo "<p style='font-size:50px;margin-bottom:-50px;background-color:" . $myColor6 . "'>&nbsp;&nbsp;</p>";


echo "<br><br><br><br>";
echo "<h2>color 1: " . $myColor1 . "</h2>";
echo "<h2>color 2: " . $myColor2 . "</h2>";
echo "<h2>color 3: " . $myColor3 . "</h2>";
echo "<h2>color 4: " . $myColor4 . "</h2>";
echo "<h2>color 5: " . $myColor5 . "</h2>";
echo "<h2>color 6: " . $myColor6 . "</h2>";

