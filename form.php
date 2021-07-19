<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
    echo "<p>title : ".$_POST['title'];
    echo "<p>description : ".$_POST['description'];
?>