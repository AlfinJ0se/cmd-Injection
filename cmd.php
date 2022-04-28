<?php
        $input = $_GET['inp'];
        $black = array("ls","pwd","cat","ping","man"," ","&","|",);
        $result = str_replace($black,"",$input);
        $op = shell_exec("man ".$result);
        echo $result;
                if(isset($_GET['src'])){
                        highlight_file('index.php');
                }
        echo '<pre>'.$op.'</pre>';
?>
