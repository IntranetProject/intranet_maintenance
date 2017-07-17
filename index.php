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
                if (isset($_GET['site'])) {
                    $site = ucfirst($_GET['site']);
                    echo '<p>' . $site . " is temporarily down for maintenance. We should be back online shortly!</p>";
                } else {
                    echo '<p>Temporarily down for maintenance! We should be back online shortly!';
                }
                ?>
                <p><br><br>
                    <?php
                    $a = array(
                        "Stay calm and drink something.",
                        "Grab yourself a bag of chips!",
                        "Donate us some money.");

                    $random_keys = array_rand($a);
                    echo $a[$random_keys];
                    ?>
                </p><br><br>
                <p class="contact">Contact: <a href="mailto:support@intranetproject.net">support@intranetproject.net</a></p>
        </div>
        <div class="footer">
            <div class="git">
                <p><a href="https://github.com/IntranetProject">GitHub</a></p>
            </div>
            <div class="imp">
                <p><a href="imprint.html">Impressum</a></p>
            </div>
            <div class="credit">
                <p><b><i style="color: black;">&lt; &gt;</i></b> with <i style="color: red;">&hearts;</i> by <a href="https://github.com/IntranetProject">Intranet</a></p>
            </div>
        </div>
    </div>
</body>

</html>
