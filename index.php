<?php
require ("temp/head.php");
require ("temp/bg.php");
$page=new head();
$page->title("My HomePage");
$style=new bg();
if($_REQUEST){

}else{

require ("home/home.php");
$home=new home();
$home->LunBo();


}
