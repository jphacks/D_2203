<?php
$q = str_replace('s', '', mb_strtolower($_GET["q"]));
$q = str_replace('(', '', $q);
$q = str_replace(')', '', $q);
?>


<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <script src="../../js/inject.js"></script>
        <title>検索結果 - <?php echo $q; ?></title>
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="columns is-centered hero-body has-text-centered ">
                <div class="column box is-half">
                    <div class="column notification">
                        <b><?php echo $q; ?></b>に一致する情報は見つかりませんでした。
                    </div>
                </div>
            </div>
        </section>     
    </body>
</html>