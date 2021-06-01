<?php
$a = array("HTML","CSS","css","Javascript","React","angular","angular","react native");
$newarr = array_count_values($a);
echo"<B>ARRAY COUNT VALUE</b>";
echo"<hr>";
foreach ($newarr as $key => $value) {
echo "<br/>$key : <strong>$value</strong> ";
}
?>