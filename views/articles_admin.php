<!DOCTYPE html>
<html>
    <head>
        <title>Адмінка</title>
        <?php include('./blocks/head.php'); ?>
    </head>
    <body>
        <div class="container">
            <h1>Панель адміністатора</h1>
             <nav class="two">
                <ul>
                    <li><a href="../index.php">Додому</a></li>
                    <li><a href="index.php?action=add">Додати статтю</a></li>
                    <li><a href="#">Про сайт</a></li>
                </ul>
            </nav>
            <div>
                <table class="admin-table">
                    <tr>
                        <th>Дата</th>
                        <th>Заголовок</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($articles as $a): ?> 
                    <tr>
                        <td><?=$a['date']?></td>
                        <td><?=$a['title']?></td>
                        <td style="text-align:right;">
                        <a href="index.php?action=edit&id=<?=$a['id']?>">Редагувати</a>
                        </td>
                        <td style="text-align:right;">
                        <a href="index.php?action=delete&id=<?=$a['id']?>">Видалити</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>        
            </div>
        <div class="footer">
                <?php include('./blocks/footer.php'); ?>
            </div>
     </div>
    </body>
</html>