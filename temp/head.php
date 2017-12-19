<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/19
 * Time: 12:03
 */
define("head","
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\">
 
<script src=\"https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js\"></script>
 
<script src=\"https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js\"></script>
 
<script src=\"https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>

");
class head{
    function title($title){
        echo head;
        echo "<title>$title</title>";
    }
}

