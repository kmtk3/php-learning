<?php
 if (!empty($_POST['author']) && !empty($_POST['content'])) {
     $author = $_POST['author'];
     $content = $_POST['content'];
   
     $db = new PDO('mysql:host=localhost;dbname=php_learning', 'root', '_xgH4gF!riAf');

     $sql = "INSERT INTO board02 (id,author,content,time)
     VALUES (NULL,:author,:content,NOW())";
   
     $stmt = $db -> prepare($sql);

     $stmt -> bindValue(':author', $author);
     $stmt -> bindValue(':content', $content);

     $stmt -> execute();

//     $db->query("INSERT INTO board02 (id,author,content,time)
//           VALUES (NULL,'$author','$content',NOW())");

     header('Location: /index.php', true, 302);
     exit();
 } else {
     header('Location: /index.php', true, 302);
     exit();
 }
