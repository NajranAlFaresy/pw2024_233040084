<?php 

echo @date("j/n/y");
echo "<br>";
echo @date("l, d F Y");
echo "<br>";
echo time();
echo "<br>";
echo time("l", time() + 60 * 60 * 24 * 9 );
echo "<br>";
