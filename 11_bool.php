<?php
$isOK = true;
$n = 0;
echo $isOK ? "True" : "False", "<br>";
echo $n ? "True" : "False", "<br>";
echo ($isOK and $n) ? "True" : "False", "<br>";
echo ($isOK and !$n) ? "True" : "False", "<br>";
?>