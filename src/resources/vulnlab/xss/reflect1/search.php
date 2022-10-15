<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <script src="../../js/inject.js"></script>
        <title>検索結果 - <?php echo $_GET["q"]; ?></title>
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="columns is-centered hero-body has-text-centered ">
                <div class="column box is-half" method="get" action="search.php">
                    <div class="column notification">
                        <b><?php echo $_GET["q"]; ?></b>に一致する情報は見つかりませんでした。
                    </div>
                </div>
            </div>
        </section>     
    </body>
</html>