<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Practise</title>
</head>
<body>
        <div style="text-align:center">
                <?php
                                $input = $_GET['inp'];
                                $black = array("ls","pwd","cat","ping","man"," ","&","|",);
                                $result = str_replace($black,"",$input);
                $op = shell_exec("man ".$result);
                echo $result;
                ?>
                <form action="http://localhost/php/cmd.php" method=get>
                        <input type="text" name="inp"><br><br>
                        <input type="submit" value='Submit'>
                </form>
            <?php
                echo '<pre>'.$op.'</pre>';
            ?>
        </div>

</body>
</html>