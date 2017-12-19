<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/19
 * Time: 10:05
 */

if($_GET) {
    require("class/hello.php");
    $name="world";
    if(isset($_GET['name'])){
        $name=$_GET['name'];
    }
    $hello = new hello();
    $hello->sayHello($name);

}else{
    echo "<form action='index.php' method='get'><input name='name' type='text'><input type='submit'></form>";
}