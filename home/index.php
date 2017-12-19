<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/19
 * Time: 17:28
 */
$url="/temp/404.html";
if($_SERVER['HTTP_REFERER']==""){
   header("Location:".$url);exit();
}