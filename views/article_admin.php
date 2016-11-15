<!DOCTYPE html>
<html>
    <head>
        <title>Стаття</title>
        <?php include('./blocks/head.php'); ?>
    </head>
    <body>
        <div class="container">
            <h1>Додавання/Редагування статті</h1>
            <div>
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Заголовок
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <label>
                        Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    <label>
                        Вміст
                        <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                    </label>
                    <input type="submit" value="Зберегти" class="btn">
                </form>
            </div>
            <div class="footer">
                <?php include('./blocks/footer.php'); ?>
            </div>
        </div>
    </body>
</html>