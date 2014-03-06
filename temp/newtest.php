<?php

print("Hello world!");
print("<br>");

$var1 = "Hello";
$var2 = "world!";

print($var1 . " " . $var2);


?>

<br>

That was php, but this is normal html. All in the same page.
<?php print("<br>But we can do php again too.<br><br>"); ?>

In fact, check out this nifty footer that stays up to date:<br><br>
<?php print "&copy; 2012-" . date('Y') . " Andrew Ferrari";?>
