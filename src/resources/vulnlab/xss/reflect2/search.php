<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <script src="../../js/inject.js"></script>
        <title>検索結果 - <?php echo htmlspecialchars($_GET["q"]); ?></title>
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="columns is-centered hero-body has-text-centered">
                    <form class="column box " method="get" action="search.php">
                        <div class="field">
                            <label class="label">検索</label>
                            <div class="control">
                                <input class="input" type="text" name="q" autocomplete="off" autocorrect="off" spellcheck="false" placeholder="<?php echo $_GET["q"]; ?>">
                            </div>
                        </div>
                        <button  type="submit" class="button is-primary">検索</button>
                    </form>
                </div>
                <div class="columns is-centered hero-body has-text-centered">
                    <div class="column box ">
                        <div class="column notification">
                            <b><?php echo htmlspecialchars($_GET["q"]); ?></b>に一致する情報は見つかりませんでした。
                        </div>
                    </div>
                </div>
            </div>
        </section>     
    </body>
</html>