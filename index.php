<!DOCTYPE html>
<html>
    <head>
        <title>Zwigoose</title>
        <link rel="icon" type="image/ico" href="assets/img/goose.ico">
        <link rel="stylesheet" href="assets/css/styles.css">
        <script type="text/javascript" src="assets/js/scriptclock.js"></script>
    <head>

    <body>
        <div id="time">
            <?php
                include 'include/timetest.php';
                print("<br><br>");
            ?>

            <body onload="startTime()">
        </div>

        <h1>Links</h1>
        <a href="files.php">File Management</a>
        <a href="http://www.reddit.com/u/zwigoose" target="_blank">Reddit</a>
        <a href="http://www.facebook.com/andrew.c.ferrari" target="_blank">Facebook</a>
        <a href="http://www.twitter.com/zwigoose" target="_blank">Twitter</a>
        <a href="mailto:andrew@zwigoose.com" target="_blank">Email Me</a>

        <div class="footer">
            <?php
            print "<br>&copy; 2012-" . date('Y') . " Andrew Ferrari";
            ?>
        </div>
    </body>
</html>
