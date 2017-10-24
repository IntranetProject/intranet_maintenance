<?php
session_start();

?>
<!doctype html>

<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<body>
  <main>
    <div class="container">
        <div class="center-align page-panel header">
            <h4><?php
                if (isset($_GET['site'])) {
                    $site = ucfirst($_GET['site']);
                    echo '<p>' . $site . " is temporarily down for maintenance. We should be back online shortly!</h4>";
                } else {
                    echo '<h4>Temporarily down for maintenance! We should be back online shortly!';
                }
                ?></h4>
                <p class="contact">Contact: <a href="mailto:support@intranetproject.net">support@intranetproject.net</a></p>
        </div>
      </main>
      <footer class="page-footer teal lighten-2">
        <div class="container">
           <div class="row">
              <div class="col l6 s12">
                 <h5 class="white-text">How about you...</h5>
                 <p class="grey-text text-lighten-4">
                     <?php
                     $a = array(
                         "... stay calm and drink something.",
                         "... grab yourself a bag of chips!",
                         "... donate us some money.",
                         "... try again later.",
                         "... visit our main site <a href='http://intranetproject.net' style='color:white; text-decoration: underline;'>here</a>");

                     $random_keys = array_rand($a);
                     echo $a[$random_keys];
                     ?>
                 </p>
              </div>
              <div class="col l4 offset-l2 s12">
                 <h5 class="white-text">Links</h5>
                 <ul>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/IntranetProjec">GitHub</a></li>
                    <li><a class="grey-text text-lighten-3" href="imprint.html">Imprint</a></li>
                    <li>
                       <p class="grey-text text-lighten-3" href="#!">&lt; &gt;</i></b> with <i style="color: red;">&hearts;</i> by <a class="grey-text text-lighten-3" href="https://github.com/IntranetProject">Intranet</a></p>
                    </li>
                 </ul>
              </div>
           </div>
        </div>
        <div class="footer-copyright">
           <div class="container">
              © 2017 Intranet Project
           </div>
        </div>
      </footer>
</body>

</html>
