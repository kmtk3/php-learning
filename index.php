<?php
     $db = new PDO("mysql:host=localhost;dbname=php_learning", "root", "_xgH4gF!riAf");

?>
<!DOCTYPE html>
<meta charset="UTF-8">
<title>掲示板</title>
<h1>掲示板</h1>
<section>
    <h2>新規投稿</h2>
    <form action="redirect.php" method="post">
        名前: <input type="text" name="author" value=""><br>
        本文: <input type="text" name="content" value=""><br>
        <button type="submit">投稿</button>
    </form>
</section>
<section>
    <h2>投稿一覧</h2>
    <?php
     $query_result = $db -> query("SELECT * FROM board02 ORDER BY id DESC");
     ?>
    <ul>
        <?php while ($post = $query_result -> fetch()):?>

        <li style="list-style: none;"><?=htmlspecialchars($post['id']);?>
            <?=htmlspecialchars($post['content']);?>
            (<?=htmlspecialchars($post['author']);?>)
            <?=htmlspecialchars($post['time']);?>
        </li>
        <?php endwhile; ?>
    </ul>
</section>