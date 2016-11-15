<!DOCTYPE html>
<html>
    <head>
        <title>Стаття</title>
        <?php include('./blocks/head.php'); ?>
    </head>
    <body>
        <div class="container">
            <h1><a href="index.php">Кібербезпека</a></h1>
            <div>
                <article>
                    <h3>
                        <?=$article['title']?>
                    </h3>
                    <em>
                        Опубліковано: <?=$article['date']?>
                    </em>
                    <p>
                        <?=$article['content']?>
                    </p>
                </article>
            </div>
            <div class="footer">
                <?php include('./blocks/footer.php'); ?>
            </div>
        </div>
    </body>
</html>