<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        $coworkers = array('kim','lee','kang','song');
        $i=0;
        while($i<count($coworkers)){
            echo $coworkers[$i].'<br>';
            $i=$i+1;
        }
    ?>
</body>
</html>
