<?php
session_start();

?>
<!doctype html>

<html>

<head>
    <title>Under Maintenance</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <meta property="og:title" content="Maintenance" />
    <meta property="og:image" content="https://intranetproject.net/logo.png" />
    <meta property="og:url" content="https://maintenance.intranetproject.net" />
    <meta property="og:description" content="Intranetproject's maintenance page" />
    <meta property="og:site_name" content="Maintenance" />
</head>

<body>
    <main>
        <div class="container">
            <div class="center-align page-panel header">
                <h4>
                    <?php
                if (isset($_GET['site'])) {
                    $site = ucfirst($_GET['site']);
                    echo '<p>' . $site . " is temporarily down for maintenance. We should be back online shortly!</h4>";
                } else {
                    echo '<h4>Temporarily down for maintenance! We should be back online shortly!';
                }
                ?>
                </h4>
                <p class="contact">Contact: <a href="mailto:support@intranetproject.net">support@intranetproject.net</a></p>
                <img src="https://i.imgur.com/WesZdDe.gif">
            </div>
        </div>
    </main>
    <footer class="page-footer teal lighten-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Questions?</h5>
                    <p class="grey-text text-lighten-4">Contact: <a href="mailto:support@intranetproject.net" style="color:white; text-decoration:underline;">support@intranetproject.net</a></p>
                    <ul style="text-decoration:underline">
                        <li><a href="http://intranetproject.net" class="white-text">Main Page</a></li>
                    </ul>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://twitter.com/Intranetprojec">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/IntranetProject">GitHub</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://intranetproject.net/imprint.html">Imprint</a></li>
                        <li>
                            <p class="grey-text text-lighten-3" href="#!"><b>&lt; &gt;</b> with <i style="color: red;">&hearts;</i> by <a class="grey-text text-lighten-3" href="https://github.com/IntranetProject">Intranet</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                ©
                <?php echo "2017-" . date('Y'); ?> Intranet Project
            </div>
        </div>
    </footer>
</body>

</html>
