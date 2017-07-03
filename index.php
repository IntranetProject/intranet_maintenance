<?php
session_start();

?>
<!doctype html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="css/maintenance.css">
<link type="text/css" rel="stylesheet" href="css/reset.css">
</head>

<body>
        <div class="container">
            <div class="subcontainer">
                <?php
                if ($_GET['site']) {
                    $site = ucfirst($_GET['site']);
                    echo '<p>' . $site . " is temporarily down for maintenance. We should be back online shortly!</p>";
                }
                ?>
                <p><br><br> Stay calm and drink something. </p><br><br><p class="contact">Contact: <a href="mailto:support@intranetproject.net">support@intranetproject.net</a></p>
            </div>
        </div>
</body>

</html>
