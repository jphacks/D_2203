<?php
require_once __DIR__ . "../../../token/conf.php";
setcookie("redirect_uri", $_GET["q"], time()+36000, basename(dirname(__FILE__)));
?>


<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <title>短縮URL - <?php echo htmlspecialchars($_GET["q"]); ?></title>
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="columns is-centered hero-body has-text-centered ">
                <div class="column box is-half">
                    <div class="column notification">
                        <p>URLを短縮しました。短縮したリンクは以下の通りです。</p>
                        <a href="s.php"><?php echo htmlspecialchars( (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').SERVER_HOST.":".SERVER_PORT.dirname($_SERVER['REQUEST_URI'])."/s.php" ) ?></a>
                    </div>
                </div>
            </div>
        </section>     
    </body>
</html>