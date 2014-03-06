<!DOCTYPE html>
<html>
<head>
<title>Zwigoose</title>

<!--STYLE SECTION-->
<style>
body {
    font-family: sans-serif;
}
.footer {
    position: fixed;
    bottom: 0;
    left:50%;
    margin-left:-100px;
    text-align: center;
    padding-bottom: 10px;
}

</style>
<!--END STYLE-->


<head>
<link rel="icon"
    type="image/ico"
    href="/goose.ico">

<!--START BODY-->
<body>

<?php
include 'timetest.php';
include 'scriptclock.html';
print("<br>");
?>

<h1>Links</h1>
<a href="/files.php">File Management</a>
<a href="http://www.reddit.com/u/zwigoose">Reddit</a>
<a href="http://www.facebook.com/andrew.c.ferrari">Facebook</a>
<a href="http://www.twitter.com/zwigoose">Twitter</a>
<a href="mailto:andrew@zwigoose.com">Email Me</a>

<div class="footer">
<?php
print "<br>&copy; 2012-" . date('Y') . " Andrew Ferrari";
?>
</div>

</body>
<!--CLOSE BODY-->

</html>
