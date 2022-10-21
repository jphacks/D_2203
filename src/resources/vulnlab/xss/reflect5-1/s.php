<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <title>リダイレクト中</title>
        <script src="../../js/inject.js"></script>
        <script src="../../js/redirect.js"></script>
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="columns is-centered hero-body has-text-centered ">
                <div class="column box is-half">
                    <div class="column notification">
                        <b><?php echo htmlspecialchars($_COOKIE["redirect_uri"]); ?></b>にリダイレクト中です。暫くお待ちください。
                    </div>
                </div>
            </div>
        </section>     
    </body>
</html>

