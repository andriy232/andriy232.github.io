<!DOCTYPE html>
<html>
    <head>
        <title>Головна</title>
        <?php include('./blocks/head.php'); ?>
    </head>
    <body>
            <h1 id="main" class="magic_class">Кібербезпека</h1>
        <div style="margin-top:0px;" class="container">
            <a href="admin">Панель Адміністратора</a>
            <div>
                <?php foreach($articles as $a): ?>
                <article>
                    <h3>
                        <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
                    </h3>
                    <em>
                        Опубліковано: <?=$a['date']?>
                    </em>
                    <p>
                        <?=articles_intro($a['content'])?>
                    </p>
                </article>
                <?php endforeach ?>
            </div>
            <div class="footer">
                <?php include('./blocks/footer.php'); ?>
            </div>
         </div>
    </body>
</html>