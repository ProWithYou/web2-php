<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic(){
            print("Lorem ipsum dolo1<br>");
            print("Lorem ipsum dolo2<br>");
        }
        basic();
    ?>
    <h2>paramiter &amp; argument</h2>
    <?php
    function sum($left,$right){
        print($left+$right);
        print("<br>");
    }
    sum(2,4);
    sum(4,6);
    ?>
    <h2>return</h2>
    <?php
        function sum2($left, $right){
            return $left+$right;
        }
        print(sum2(2,4));
        file_put_contents('result.txt', sum2(2,4));
    ?>
</body>
</html>