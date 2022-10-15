<?php
require_once __DIR__ . "../../../token/tokengen.php";
$token = generate_token(basename(dirname(__FILE__)));
setcookie("token", $token, time()+36000, basename(dirname(__FILE__)));
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <title>検索</title>
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="columns is-centered hero-body has-text-centered">
                <form class="column box is-half" method="get" action="search.php">
                    <div class="field">
                        <label class="label">検索</label>
                        <div class="control">
                            <input class="input" type="text" name="q" autocomplete="off" autocorrect="off" spellcheck="false" placeholder="Woof!">
                        </div>
                    </div>
                    <button  type="submit" class="button is-primary">検索</button>
                </form>
            </div>
        </section>
    </body>
</html>