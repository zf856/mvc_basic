<?php
    include_once 'public/include/config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $controller=@$_GET['c']?$_GET['c']:'index';
    $action=@$_GET['a']?$_GET['a']:'index';
    if(file_exists('controller/C'.$controller.'.php')){
        require_once 'controller/C'.$controller.'.php';
    }
?>
</body>
</html>

<!--
index.php?c=index&a=index
index.php
index.php?c=user&a=login
index.php?c=user&a=register-->