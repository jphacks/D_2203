<?php
require_once __DIR__ . "../../../token/tokengen.php";
$token = generate_token(basename(dirname(__FILE__)));
setcookie("token", $token, time()+36000, basename(dirname(__FILE__)));
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <title>短縮URLサービス</title>
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="columns is-centered hero-body has-text-centered">
                <form class="column box is-half" method="get" action="shorten.php">
                    <div class="field">
                        <label class="label">URLを入力してください</label>
                        <div class="control">
                            <input class="input" type="text" name="q" autocomplete="off" autocorrect="off" spellcheck="false" placeholder="省略したいURL">
                        </div>
                    </div>
                    <button  type="submit" class="button is-primary">短縮</button>
                </form>
            </div>
        </section>
    </body>
</html>