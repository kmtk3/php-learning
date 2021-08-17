<?php
 if (!empty($_POST["author"]) && !empty($_POST["content"])) {
     $author = htmlspecialchars($_POST["author"], ENT_QUOTES);
     $content = htmlspecialchars($_POST["content"], ENT_QUOTES);
   
     $db = new PDO("mysql:host=localhost;dbname=php_learning", "root", "_xgH4gF!riAf");
   
     $db->query("INSERT INTO board02 (id,author,content,time)
           VALUES (NULL,'$author','$content',NOW())");

     header("Location: /index.php", true, 302);
     exit();
 } else {
     header("Location: /index.php", true, 302);
     exit();
 }
